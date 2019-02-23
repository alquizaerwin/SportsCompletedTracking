# AngularAdminUX

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 7.3.2.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).

Details on how to have AngularAdminUI communicates with LaravelAdminUI:
=======================================================================

$ ng new AngularAdminUI
$ cd AngularAdminUI
$ npm install --save bulma

Add to .angular.json:

"schematics": {
   "@schematics/angular:component": {
      "style": [
         "sass",
         "node_modules/bulma/css/bulma.min.css",
         ]

1.) Customized the layout: editing the src/app/app.component.html.
2.) Add material components

# sudo npm install --save material@latest @material/theme@latest @material/animation@latest material-colors@latest @material/base@latest @material/checkbox@latest @material/rtl@latest @material/drawer@latest @material/menu@latest @material/form-field@latest @material/layout-grid@latest @material/dom@latest @material/auto-init@latest --global

# npm install --save @angular/material @angular/cdk @angular/animations
# npm install --save angular/material2-builds angular/cdk-builds angular/animations-builds

3.) Alternatively:

# ng add @angular/material

+ material-colors@1.2.6
+ @material/animation@0.41.0
+ material@0.3.2
+ @material/theme@0.43.0
+ @material/base@0.41.0
+ @material/rtl@0.42.0
+ @material/checkbox@0.44.1
+ @material/menu@0.44.1
+ @material/drawer@0.44.1
+ @material/form-field@0.44.1
+ @material/layout-grid@0.41.0
+ @material/auto-init@0.41.0
+ @material/dom@0.41.0

4.) configure animation module. (src/app/)

import {BrowserAnimationsModule} from '@angular/platform-browser/animations';

@NgModule({
  ...
  imports: [BrowserAnimationsModule],
  ...
})
export class HomeAppModule { }

5.) As alternative syles.scss can be edited to import angular
6.) ng generate component Home
7.) ng generate component DataEntry

