import { Component, OnInit } from '@angular/core';
import * as M from '../../../assets/js/materialize.min.js'; // Import Materialize JS library.

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {

  public sidebar_options = { // Options object for side navigation.
    edge: 'left',
    draggable: true,
    inDuration: 250,
    ourDuration: 200
  };

  constructor() { }

  ngOnInit() {
    var sidebar_elems = document.querySelectorAll('.sidenav');
    var sidebar_instances = M.Sidenav.init(sidebar_elems, this.sidebar_options);
  }

}
