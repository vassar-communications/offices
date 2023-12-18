## Dec 18, 2023 - v1.6

### CSS
* Added styling for the Fearlessly Consequential universal nav badge

## Nov 21, 2023 - v1.5

### CSS
* Added new styling for buttons and call-to-action styling.

## Oct 11, 2023 - v1.4.3

### CSS
* Removed duotone background on homepage masthead banners (people Megg was training thought it was dark and didn't look good, we decided on this in a web meeting)

## PHP

* functions.php
	* Removed link around extension; the auto-linker was making the link appear twice.


## July 18, 2023 - v1.4.2

### CSS
* Fixed contrast issue on Vassar masthead focus/hover states


## Apr 19, 2023 - v1.4.1

### CSS
* Fixed contrast issue on `th` cells

## Feb 28, 2023 - v1.4

### CSS
* Fixed awkward link colors on the Vassar alert banner
* Added a class for center-aligning items

## Feb 21, 2023 - v1.3.6

### PHP
* footer_markup.php: changed footer to new Admission/Alums-style, from the old Drupal template style
* header_markup.php: updated links

### CSS
* On pages where there's no featured image, they now get a burgundy gradient instead of a blank white area

## Nov 17, 2022 - v1.3.5

### PHP
* _config.php
	* set `SITE__NO_TAGLINE_IN_TITLE` to `false`. When true, it was invoking a function that was meant to strip the tagline from the title, but resulted in the titles on archive pages being inaccurate (showing the title of the first post on the page instead of the archive title).
* footer_markup.php
	* Fixed TikTok link URL
* functions.php
	* Fixed a bug where links in the breadcrumb trail on news were broken
	* Fixed another bug where a breadcrumb item for the month was erroneously appearing on archive pages for years


## Sep 29, 2022 - v1.3.4

### CSS
* Column and list fixes

### PHP
* Edited footer content

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
