# Angular   

Create a new project named 'project'
```javascript      
$ ng new project --style=scss --routing      
```       


Generate A Component Named 'home' in the pages directory
```javascript      
$ ng generate component --spec=false pages/home      
```       





Serve the project locally in the browser
```javascript      
$ ng serve -o      
```       

Build the project
```javascript      
$ ng build --prod      
```       


Update Angular CLI Globally
```javascript      
$ npm uninstall -g angular-cli        
```   
```javascript      
$ npm install -g @angular/cli@latest        
```   

Update Angular CLI Locally      
```javascript    
$ npm install --save-dev @angular/cli@latest     
```     








## Angular 6 Cliff Notes    

### Decorators   

**../src/app/app.component.ts**     
```javascript      
import { Component } from '@angular/core';

function log(target, name, descriptor){
  console.log(target, name, descriptor)
}

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {
  title = 'app';

  @log
  simpleMethod(){
    console.log('Hey There?');
  }
}
```      












# References         

1. [How to upgrade Angular CLI to the latest version](https://stackoverflow.com/questions/43931986/how-to-upgrade-angular-cli-to-the-latest-version)
1. [Create a Contact Page and Contact Form](https://scotch.io/courses/build-your-first-angular-website/create-a-contact-page-and-contact-form) published on March 17, 2018      
1. [angular-first-site-test](https://github.com/sevilayha/angular-first-site-test)
1. [Angular 5: How to Bind/Get selected value/Set Default in SelectList](https://youtu.be/8ZlrORYOl_0) Published on Feb 24, 2018      
1. [Angular select list validation](https://youtu.be/TLUP1LhW5bo) Feb 20, 2018      
