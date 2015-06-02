
========================
Introduction to Basic
========================

Basic boasts a clean HTML5 structure with extensible CSS classes and ID's for unlimited
theming possibilities as well as a top-down load order for improved SEO. It is fully
responsive out-of-the-box and provides an adaptive, elegant, SASS based grid system (Bourbon Neat).

Basic's goal is to provide themers the building blocks needed to get their designs up and
running quickly and simply.

Basic is perfect if you want a simple, smart, and flexible theme starter.

Less code spam, more ham.

===============
Installation
===============

Basic utilizes SASS for adaptive grids and layouts and general structure of the site.
It's recommended to use SASS for building out your theme. You are required to download
the following Ruby Gems and plugins:

  - SASS (http://sass-lang.com/)
  - Bourbon (http://bourbon.io/)
  - Boubon Neat (http://neat.bourbon.io/)

Basic is meant to be YOUR theme. To change the name of the theme from 'basic' to another name like 'mytheme',
follow these steps (to do BEFORE enabling the theme) :

  - rename the theme folder to 'mytheme'
  - rename basic.info to mytheme.info
  - Edit basic.info and change the name, description, project (can be deleted), replace all other instances of "basic" ie. [basic_tabs] would become [mytheme_tabs]
  - In template.php change each iteration of 'basic' to 'mytheme'
  - In theme-settings.php change each iteration of 'basic' to 'mytheme'

To use SASS and automatically compile it within your theme, please refer to "Using Grunt" in the documentation below. If you would like to use SASS' internal watch functionality, simply CD into your theme directory and run:

"sass --watch sass:css"

If you would like to add browser sync support to your theme, please include the follow JS snippet before the closing </body> tag in the html.tpl.php file:

<script type='text/javascript'>//<![CDATA[
;document.write("<script defer src='//HOST:3000/socket.io/socket.io.js'><\/script><script defer src='//HOST:3001/client/browser-sync-client.0.9.1.js'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>

===========================
What are the files for ?
===========================

- basic.info                => provide informations about the theme, like regions, css, settings, js ...
- block-system-main.tpl.php => template to edit the content
- block.tpl.php             => template to edit the blocks
- comment.tpl.php           => template to edit the comments
- node.tpl.php              => template to edit the nodes (in content)
- page.tpl.php              => template to edit the page
- template.php              => used to modify drupal's default behavior before outputting HTML through
                               the theme
- theme-settings            => used to create additional settings in the theme settings page

============
In /SASS
============

- default.sass  => define default classes, browser resets and admin styles (compiles to css/default.css)
- ie8.sass      => used to debug IE8 (compiles to css/ie8.css)
- ie9.sass      => used to debug IE9 (compiles to css/ie9.css)
- layout.sass   => define the layout of the theme (compiles to css/layout.css)
- print.sass    => define the way the theme look like when printed (compiles to css/print.css)
- style.sass    => contains some default font styles. that's where you can add custom css (compiles to css/style.css)
- tabs.sass     => styles for the admin tabs (from ZEN)


========================
Changing the Layout
========================

The layout used in Basic is fairly similar to the Holy Grail method. It has been tested on
all major browser including IE (5>10), Opera, Firefox, Safari, Chrome ...
The purpose of this method is to have a minimal markup for an ideal display.
For accessibility and search engine optimization, the best order to display a page is ]
the following :

    1. header
    2. content
    3. sidebars
    4. footer

This is how the page template is buit in basic, and it works in fluid and fixed layout.
Refers to the notes in layout.css to see how to modify the layout.

==============
Using Grunt
==============

In order to use grunt (http://gruntjs.com/) with basic you will need to install a few programs.
These will only be installed the first time you start a project using Basic with Grunt.

Getting Started

1. Navigate to http://nodejs.org/ and install node.js.
2. Once you have node installed you will be able to use the npm (node package manager) to install the rest.
   In order for grunt to work in terminal we are going to need the grunt cli. Open a new terminal window and type "npm install -g grunt-cli" , this will install the cli globally. Restart terminal when that is complete and you will now be able to use grunt commands.

How To Use Grunt

1. cd into the grunt folder and type in "grunt" to start the watch task.


__________________________________________________________________________________________

UPDATING BASIC

Once you start using basic, you will massively change it until a point where it has nothing
to do with basic anymore. Unlike ZEN, basic is not intended to be use as a base theme for a
sub-theme (even though it is possible to do so). Because of this, it is not necessary to
update your theme when a new version of BASIC comes out. Always see Basic as a STARTER, and
as soon as you start using it, it is not BASIC anymore, but your own theme.

If you didn't rename your theme, but you don't want to be notified when basic has a new version
by the update module, simply delete "project = "basic" in basic.info

__________________________________________________________________________________________

Thanks for using BASIC, and remember to use the issue queue in drupal.org for any question
or bug report:

http://drupal.org/project/issues/basic

Current maintainers:
* Steve Krueger (SteveK) -http://drupal.org/user/111656 (http://thejibe.com)
* Niall Morgan (lil.destro) -https://drupal.org/user/597808 (http://thejibe.com)