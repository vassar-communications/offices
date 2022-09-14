## Sep 14, 2022 - v1.3.3

### CSS
* _button.scss, _placement.scss, _wp-block-columns.scss, _wp-block-group.scss, 
	* Minor design adjustments
* _group-row.scss
	* This is a full-width section that can have different background colors applied to it, similar to the section designs already on Drupal and the new Alums and Admission sites.
* _group-sidebar.scss
	* This is a new module for supplemental content.
* _linked-list--inline.scss
	* This is a new module for horizontal lists of links.
* _lists.scss
	* Added an option so items can have light borders under them.
* _backgrounds.scss
	* This is intended for use on `group-row`. It provides the styling for a few different background colors.

### PHP
* functions.php
	* Registered a few of Vassar's brand colors with the theme so they can be selected in the block editor.


## Jun 17, 2022 - v1.3.2

### CSS
* _wp-block-columns.scss
	* Added fixes for a situation where column content was getting vertically centered; looks like WordPress is adding its own CSS, which is conflicting with the Offices styling.
* flickity.scss
	* Moved some Offices-specific styling out of this file, and into wp-block-gallery-flickity.scss. flickity.scss should contain only the vendor styling (the CSS that comes with Flickity); wp-block-gallery-flickity.scss contains the Offices styling.
* wp-block-gallery-flickity.scss
	* Added !important to display: block on .wp-block-gallery, to override a `display:flex` rule that WordPress was applying. That spurious flex rule might be related to the columns that can be applied to galleries in the admin side.



## Apr 5, 2022 - v1.3.1

### PHP
* functions.php
	* Fixed a bug that was breaking links in the breadcrumb trail


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