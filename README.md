# Asynchronous Javascript Loader

Some javascript libraries are big and they pose a stress on the browser when they are loaded all at the same time.

Most of these libraries suggest to load them in async.

## Library examples

 * Google Analytics
 * Google Maps
 * Google Plus
 * Facebook Like
 * Twitter button

## Problems with existing solution

 * A lot of ugly script tag with semi-minified code.
 * Most of the library suggest the same trick so we see code duplication.
 * You have to go copy-paste the code each time you start a new project.
 * If you have multiple libraries, they will all fire at the same time, possibly causing a stress on the browser
 * While the libraries are loading (usually with a lot of dependencies) the browser is sluggish and users probably want to read that article before clicking on 'Like'.

## Solution

 * Load each library with a function taking an `id`, a `url` and a `delay`.
 * Allow each library to have a different delay.
   * You may want Google Maps to load only 200ms after the page, but the Facebook Like can wait a bit more.

## Usage

```bash
composer.phar install # autoloader
php build.php twitter facebook > /path/to/you/project/js/async-libs.js
```

## TODO

 * Add more libraries (only Twitter and Facebook at the moment).
 * Add configuration files
   * Facebook locale / xfbml
   * Google Maps sensors / api key

