## Mar 4, 2022 - v1.3

### CSS
* _button-grid.scss
	* Added this file for a button grid on the new HR site
* _tables.scss
	* Adjusted table padding and made tables scroll properly on mobile
* _video-embed.scss
	* Fixed Vimeo issues

### JS
* site.js
	* Changed Flickity function to target two different selectors instead of one. Basically a WordPress broke our galleries, and here's how: https://www.koberoku.com/content/why-wordpress-5-9-broke-your-galleries-and-how-to-fix-it/

### PHP
* functions.php
	* Added code for a shortcode Morgan wrote. This shortcode displays Committees content (https://offices.vassar.edu/dean-of-the-faculty/committees/), which needs to be pulled from a database.


## Aug 16, 2021 - v1.2

### CSS

* Added underscores to all files in _type/_uses folder.


## Aug 11, 2021 - v1.1

### PHP

* functions.php
	* Removed `news` from breadcrumb URLs; these links didn't work, since permalinks are relative to the root

### CSS

* _u-page-parent.scss
	* Hid subnav for pages with a `no-subnav` class 
* _recent-posts.scss
	* Added this file
* _button.scss
	* Added more button styling
* _wp-block-columns.scss
	* Added margin below column block
* Deleted some spurious CSS files


## Dec 15, 2020 - v1.0

* functions.php
	* Added function to key off the new vassarparent__before_header hook. This function generates a breadcrumb trail on news sites.