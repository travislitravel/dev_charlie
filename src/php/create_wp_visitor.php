<?php

/**
  * Create WP Visitor Custom Post Type.
  * Version: golf
*/

// CORS.
// Allows outside sources to access this file.
header('Access-Control-Allow-Origin: *');

// Local / Development / Production
$local_base = "http://localhost:8888/wordpress";
$dev_base = "https://dev.romeohq.com";
$prod_base = "https://visit.romeohq.com";


// POST DATA VARIABLES
// with casting operators
$person_being_visited = $_REQUEST['person_being_visited']; //
$guest_arrival = $_REQUEST['visitor_arrival'];
$guest_departure = $_REQUEST['visitor_departure'];
$guest_first_name = $_REQUEST['visitor_first_name']; //
$guest_last_name = $_REQUEST['visitor_last_name']; //
$guest_email = $_REQUEST['visitor_email']; //
$guest_phone = $_REQUEST['visitor_phone']; //
$guest_company = $_REQUEST['visitor_company']; //

// ----------------------------
// DEV cURL POST FIELDS
// ----------------------------
$wp_slug = strtolower( $guest_first_name ) . "-" . strtolower( $guest_last_name );
$wp_url = $prod_base . "/guests/" . $wp_slug;

$post_fields = "{
	\"date\": \"2018-09-11T00:45:57\",\n
	\"slug\": \"$wp_slug\",\n
	\"status\": \"publish\",\n
	\"type\": \"guests\",\n
	\"link\": \"$wp_url\",\n
  \"title\": {\n
	  \"raw\": \"$guest_first_name $guest_last_name || $guest_email\"\n
  },\n
  \"content\": {\n
	  \"raw\": \"\"\n
  },\n
  \"excerpt\": {\n
	  \"raw\": \"\"\n
  },\n
  \"author\": 7,\n
  \"categories\": [ 4 ],\n
  \"meta\": {\n
	  \"guest_name\": \"$guest_first_name $guest_last_name\",\n
	  \"guest_company\": \"$guest_company\",\n
	  \"guest_email\": \"$guest_email\",\n
	  \"guest_phone\": \"$guest_phone\",
	  \"guest_sponsor_name\": \"\",
	  \"guest_sponsor_email\": \"$person_being_visited\"\n
  },\n
  \"tags\": [ 5 ],\n
  \"_links\": {}\n
}";



// DEV HTTP HEADER
$dev_http_header = array(
  "Authorization: Basic cHJlY2hlY2s6YzczS1Ildnh1RmlBXmVCS1I0Ylc1UFNM",
  "Cache-Control: no-cache",
  "Content-Type: application/json",
  "Postman-Token: 216ac989-d453-4c47-8f28-df7e6942b161"
);


// -----------------------------------
// cURL
// -----------------------------------
$curl = curl_init();

curl_setopt_array($curl, array(

  // LOCAL
  // CURLOPT_URL => "http://localhost:8888/wordpress//wp-json/wp/v2/visitors",

  // DEV
  // CURLOPT_URL => "https://dev.romeohq.com/wp-json/wp/v2/visitors",

  // PRODUCTION
  CURLOPT_URL => "https://visit.romeohq.com/wp-json/wp/v2/guests",

  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $post_fields,
  CURLOPT_HTTPHEADER => $dev_http_header,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);






// -----------------------------------
// HTML VARIABLES
// -----------------------------------

// Error
$error_html = "\n
<div class='alert alert-danger' role='alert'>\n
  cURL Error #: $err \n
  <hr>\n
  $response\n
</div>";

// 201 - ISE Guest Created.
$success_created = "\n
<div class='alert alert-success' role='alert'>\n
  <strong>$guest_first_name $guest_last_name</strong> was successfully created in WordPress.\n
</div>";




// -----------------------
// TESTING
// -----------------------
$test_post_variables = "\n
<hr>\n
<div class=\"row\">\n
  <div class=\"col\">\n
    <div><strong>Full Name:</strong> $guest_first_name $guest_last_name</div>\n
    <div><strong>Email:</strong> $guest_email</div>\n
    <div><strong>Phone:</strong> $guest_phone</div>\n
    <div><strong>Company:</strong> $guest_company</div>\n
    \n
    <div><strong>Arrival:</strong> $guest_arrival</div>\n
    <div><strong>Departure:</strong> $guest_departure</div>\n
    \n
    <div><strong>Romeo Email:</strong> $person_being_visited</div>\n
  </div>\n
  <div class=\"col\">\n
    <div><strong>WP Slug:</strong> $wp_slug</div>\n
    <div><strong>WP URL:</strong> $wp_url</div>\n
  </div>\n
</div>\n
<hr>\n
\n
";



// -----------------------------------
// RESPONSE
// -----------------------------------
if ($err) {
  echo $error_html;
} else {
  // echo $success_created . $test_post_variables;
  echo $success_created;
}
