import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, of } from 'rxjs';

// MODEL
// import { Traveler } from "../models/traveler";
interface contactData {
    message: string
}

const httpOptions = {
  headers: new HttpHeaders({ 'Content-Type': 'application/text' })
};

@Injectable({
  providedIn: 'root'
})
export class ContactService {

  private contactUrl = 'http://travisli.com/api/contacts.php';

  constructor(private http: HttpClient){}

  // GET: 'CONTACTS'
  getContacts (){
    return this.http.get<contactData>(this.contactUrl)
  }

}
