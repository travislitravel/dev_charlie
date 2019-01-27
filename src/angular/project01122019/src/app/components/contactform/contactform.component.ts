import { Component, OnInit } from '@angular/core';
// import * as M from '../../../assets/js/materialize.min.js'; // Import Materialize JS library.

// MODELS
// import { Traveler } from "../../models/traveler";


// SERVICES
import { ContactService } from "../../services/contact.service";

@Component({
  selector: 'app-contactform',
  templateUrl: './contactform.component.html',
  styleUrls: ['./contactform.component.scss']
})

export class ContactformComponent implements OnInit {

  public message = "Loading Message...";

  constructor(public contactService: ContactService){}

  ngOnInit() {}

  /**
   * Process the form we have. Send to whatever backend
   * Only alerting for now
   */
  processForm() {

  }

}
