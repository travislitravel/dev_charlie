# Destinations     
**Version**: 0.0.1        
**Author**: Steve Berry, steveberry@romeopower.com     
The management of "destinations", this plugin registers the 'destination' custom post type. It also exposes the destination's extended custom meta properties to the WordPress API.

---       
### Endpoint   
**URL**: "Wordpress API Base URL" + "destinations"         
**IE**: [https://my-domain-name.com/wp-json/wp/v2/destinations](#)


## Prerequisites  

---  

###  Plugins required
1. [Basic Authentication Handler](https://github.com/WP-API/Basic-Auth) - This plugin adds Basic Authentication to a WordPress site.

## Installation  

---  

1. Log into your wordpress instance.
2. Navigate to your plugins
3. Add new plugin


## 'C' - Create A Destination           
This is an example of a minimum POST request to your new endpoint.    
---  
```json
  {
    "slug": "tony-starks",
    "status": "publish",
    "type": "destinations",
    "link": "https://my-domain-name.com/destinations/tony-starks/",
    "title": {
      "raw": "Tony Starks"
    },
    "content": {
      "raw": "Tony Starks Content"
    },
    "excerpt": {
      "raw": "Tony Starks Excerpt"
    },
    "author": 3,
    "meta": {
      "destination_first_name": "Tony",
      "destination_last_name": "Starks",
      "destination_email": "tonystarks@gmail.com"
    }
  }
```  


## 'U' - Update An Destination           
This is an example of a minimum PUT request to your new endpoint.    
---  
```json
  {
    "id": 4415,
    "slug": "tony-starks",
    "status": "publish",
    "type": "destinations",
    "link": "https://my-domain-name.com/destinations/tony-starks/",
    "title": {
      "raw": "Tony Starks"
    },
    "content": {
      "raw": "Tony Starks Content - Updated"
    },
    "excerpt": {
      "raw": "Tony Starks Excerpt - Updated"
    },
    "author": 3,
    "meta": {
      "destination_first_name": "Tony",
      "destination_last_name": "Starks",
      "destination_email": "tonystarks@gmail.com"
    }
  }
```
## 'U' - Update A Destination         
This is an example of a minimum PUT request to your new endpoint.    
---  
```json
  {
    "content": {
      "raw": "Tony Starks Content - Updated"
    },
  }
```

## 'D' - Delete An Destination           
This is an example of a minimum DELETE request to your new endpoint.    
---  
```json
  {
    "id": 4415
  }
```

---          
### Extended/Exposed Meta
When this plugin is activated the following fields become visible in the returned request.      
```json
{
  "meta": {
    "_": ""
	}
}
```

---  
# License  


This program is **NOT** free software; you can **NOT** redistribute it and/or modify it under the **digital software intellectual property** terms of the **TravisLi Luxury Travel, LLC.** as published by **TravisLi Luxury Travel, LLC.**; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY ANY WARRANTY of FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the **digital software intellectual property** terms of the **TravisLi Luxury Travel, LLC.** along with this program; if not, write to **TravisLi Luxury Travel, LLC.**. Copyright 2005-2018 **TravisLi Luxury Travel, LLC.**.
