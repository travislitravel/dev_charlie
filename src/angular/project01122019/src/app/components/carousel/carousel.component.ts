import { Component, OnInit } from '@angular/core';
import * as M from '../../../assets/js/materialize.min.js'; // Import Materialize JS library.

@Component({
  selector: 'app-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.scss']
})
export class CarouselComponent implements OnInit {

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
