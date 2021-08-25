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