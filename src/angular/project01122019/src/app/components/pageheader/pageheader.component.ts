import { Component, OnInit } from '@angular/core';
import * as M from '../../../assets/js/materialize.min.js'; // Import Materialize JS library.

@Component({
  selector: 'app-pageheader',
  templateUrl: './pageheader.component.html',
  styleUrls: ['./pageheader.component.scss']
})
export class PageheaderComponent implements OnInit {

  public carousel_options = {
    fullWidth: true,
    indicators: true
  };

  constructor() { }

  ngOnInit() {
    var carousel_elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init( carousel_elems, this.carousel_options );
  }

}
