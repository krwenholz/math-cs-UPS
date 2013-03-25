[Mathematics and Computer Science at UPS](mathcs.pugetsound.edu)
================================================================

Hosting the testing and development of Puget Sound's Math/CS department site.

# Usage
Below are some instructions for making changes to the website through WordPress
and/or the actual PHP code.

## Logging in
You can log into the WordPress administration interface through virtually any
web browser by going to the 
[wp-admin page](http://www.mathcs.pugetsound.edu/wp-admin).  If you need 
credentials to log in, ask Carl Toews, Giot Concepcion or Kyle Wenholz.

## Adding Faculty
After logging in, use the menu bar to the left and select "Faculty".  You'll
be taken to a page with "Faculty" displayed at the top and a list of the 
current members below.  Click the link "Add New Faculty Member" next to the 
title at the top or on your left menu bar.  Fill in all of the appropriate
information asked for in "Faculty Member Info".  Avoid using the "Custom 
Fields" section, since this is intended for advanced users.  Once you have
filled in the appropriate information, click the "Publish" button inside of
the "Publish" box to the right hand side.

## Adding a Seminar
After logging in, use the menu bar to the left and select "Seminar".  You'll
be taken to a page with "Seminar" displayed at the top and a list of the 
current seminars below.  Click the link "Add New Seminar" next to the 
title at the top or on your left menu bar.  Fill in all of the appropriate
information asked for in "Enter Title Here" and "Seminar Info".  You should 
put abstracts in the large text box in the center of the page. Avoid using 
the "Custom Fields" section, since this is intended for advanced users.  
Once you have filled in the appropriate information, click the "Publish" 
button inside of the "Publish" box to the right hand side.

## Editing the Page Layouts
Currently, the Tutoring and Academics pages can be edited through the WordPress backend by clicking the Pages menu item and selecting one of these pages.

The Home, Faculty, and Seminar pages are all specialized enough that their layouts are specified in specifice PHP files in within the theme (all located at the root theme directory level). Below is a last of the specific file(s) which must be edited in order to change the page layout. Not that accompanying CSS changes may also be necessary, depending on the type of layout change desired.

* Home Page = index.php
* Faculty Page = page-faculty.php
* Seminar Pages
  * Current/Upcoming Seminars = page-upcoming_seminars.php
  * Past Seminars = archive-seminar.php

All theme updates should be managed through this GitHub repo, and tested on a separate instance of WordPress before being installed on the live site. Once the updates have been tested and approved, the updated theme directory can be uploaded via FTP:

* Navigate to the theme directory within WordPress: `/path/to/wordpress/wp-content/themes`
* Overwrite the contents of the `math-cs-ups` directory with the updated theme files

Themes can also be updated via the WordPress backend, but the process is slightly complicated due to the fact that we're running WordPress in multisite mode. More info here about administration of themes and other elements for WordPress Multisite: http://codex.wordpress.org/Multisite_Network_Administration#Themes

# Some Implementation Details
### Bones Development Theme
We used the [Bones Development Theme](http://themble.com/bones/) as a starting point for our theme. It provided a mobile-first and responsive "bare bones" starting point, which allowed us to focus fully on designing the site and avoid all the setup pieces required in creating a new WOrdPress theme.

### WordPress Version
This theme was developed for and tested on WordPress version 3.5.1. Any subsequent version updates should be tested on a separate instance of WordPress to ensure compatibility before making the update on the live site.

TODO: Discuss how the PHP files work/are organized (briefly)

- [ ] @krwenholz can you explain a little about what you're looking for here? Do you want a breakdown of the important PHP files in the theme directory, or a general overview of WOrdPress theme structure? Or something else?

# A Quick and Dirty Installation
TODO: Quick recipe for how to get this whole shebang working.

