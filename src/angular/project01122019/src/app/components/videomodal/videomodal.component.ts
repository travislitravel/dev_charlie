import { Component, OnInit } from '@angular/core';
import * as M from '../../../assets/js/materialize.min.js'; // Import Materialize JS library.

@Component({
  selector: 'app-videomodal',
  templateUrl: './videomodal.component.html',
  styleUrls: ['./videomodal.component.scss']
})
export class VideomodalComponent implements OnInit {

  public videomodal_options = {};

  constructor() { }

  ngOnInit() {
    var videomodal_elems = document.querySelectorAll('.modal');
    var videomodal_instances = M.Modal.init(videomodal_elems, this.videomodal_options);
  }

}
