import { Component } from '@angular/core';

//
function log(target, name, descriptor){
  console.log(target, name, descriptor)
  // store the original function in a variable.
  const original = descriptor.value
  // do some manipulations with 'descriptor.value'
  // original()
  // descriptor.value = function () {
  //   console.log("This function was hacked!");
  // }
  // return the descriptor
  return descriptor
}

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent {

  title = 'decorators01202019';

  constructor(){
    this.simpleMethod();
  }
  @log
  simpleMethod(){
    console.log('Hey There?');
  }

}
