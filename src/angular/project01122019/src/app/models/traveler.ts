/*
DATA MODEL
Name: 'traveler'
Description: 'Those that use the contact form'
*/

export class Traveler {
  public first_name:string;
  public last_name:string;
  public email:string;
  public phone:string;
  public company:string;
  public travel_miles:string;
  public travel_type:string;
  public message: string;
}

/*


public first_name:string;
public last_name:string;
public email:string;
public phone:string;
public company:string;
public travel_miles = [
  "Less than 20K",
  "20K - 40K",
  "40K - 70K",
  "More than 70K"
];
public travel_types = [
  "Leisure",
  "Business",
  "Both"
];
public contact_info = {
  first_name: this.first_name,
  last_name: this.last_name,
  email: this.email,
  phone: this.phone,
  company: this.company,
  travel_miles: this.travel_miles[0],
  travel_type: this.travel_types[0],
};
public travel_type_options = {
  class: "validate",
  dropdownOptions: {

  }
};





// const allInfo = `
${this.first_name} ${this.last_name} ${this.email}  ${this.phone} ${this.company} ${this.travel_type_instances[0][0]}
`;
alert(allInfo);

*/
