========================
Introduction to Teka
========================


theming possibilities as well as a top-down load order for improved SEO. It is fully
responsive out-of-the-box and provides an adaptive, elegant, SASS based grid system (Bourbon Neat).

Basic's goal is to provide themers the building blocks needed to get their designs up and
running quickly and simply.

Basic is perfect if you want a simple, smart, and flexible theme starter.

Less code spam, more ham.

===============
Installation


In order to make things easier, we have chose to create our own Yeoman scaffolding generator.
So, all you got to do is:

1 - Install teka's generator globally

```
$ sudo npm install -g generator-teka

```
2 - Run yo teka into your themes directory (it will ask for a theme name)
```
$ cd /www/my_project/sites/all/themes/
$ yo teka

```
Install teka's dependencies into the generated directory, then run gulp framework
```
$ cd my_project/
$ sudo npm install
$ gulp

```

You're done!


===========================
##Our gulp workflow


### Sprites / creation
You can just drop separated .png files into 'assets/img/sprite/' and you'll receive a brand new 'dist/img/sprite.png' file automatically, via gulp watch task.
### Sprites / usage
Use the pattern 'header-big-logo.png' on your image names. So you can just use the following SCSS:
```scss
@include sprite($header-big-logo);
```
this will be compiled to the equivalent css, as the example
```css
background-image: src(../img/sprite.png);
background-position: 45px 10px;
heihgt: 234px;
width: 122px;
```
###SCSS
Saving any of the scss files that are in 'assets/scss', will make gulp re-compile all the scss and minifying them into the single 'dist/css/style.css'.
Our default files are:

* style.scss  => All your custom scss goes right here.


* base/_.scss          => All @import are centered on this file.
* base/_base.scss      => All the base styles, such as 'a', 'ul', 'h1' etc.
* base/_normalize.scss => 'Normalize' css lib.


* components/_buttons.scss       => Button default style mixins.
* components/_forms.scss         => Form components style mixins.
* components/_grid-settings.scss => Grid kickstart default style.
* components/_lists.scss         => List default styles.
* components/_tables.scss        => Table default styles.
* components/_typography.scss    => Font-face declarations and default markup styles.


* conifg/_mixins.scss    => Your custom mixins to be used all over the theme.
* conifg/_variables.scss => All kind of reusable data goes here, stored as variables.
* conifg/sprites.scss    => Gulp's auto-generated sprite variables. (Don't write nothing on this file).


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
