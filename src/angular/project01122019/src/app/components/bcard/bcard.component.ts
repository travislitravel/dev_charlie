import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-bcard',
  templateUrl: './bcard.component.html',
  styleUrls: ['./bcard.component.scss']
})
export class BcardComponent implements OnInit {

  public bcard = {
    first_name: "Travis",
    last_name: "Li Dedmore",
    title: "Travel Advisor",
    email: "hello@travisli.com",
    url: "www.travisli.com",
    company: "TravisLi Luxury Travel Design",
    description: "Travel makes one modest. You see what a tiny place you occupy in the world.” - Gustav Flaubert."
  };

  constructor() { }

  ngOnInit() {
  }

}
