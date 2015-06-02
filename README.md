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


In order to make things easier, we have chosen to create our own Yeoman scaffolding generator.
So, all you got to do is:
1 - Install teka's generator globally

```
sudo npm install -g generator-teka

```
2 - Run yo teka into your themes directory (it will ask for a theme name)
```
cd /www/my_project/sites/all/themes/
yo teka

```
Install teka's dependencies into the generated directory, then run gulp framework
```
cd my_project/
sudo npm install
gulp

```

You're done!


===========================
##Our gulp workflow


### Sprites / creation
You can just drop separated .png files into 'assets/img/sprite/' and you'll receive a brand new 'dist/img/sprite.png'.
### Sprites / usage
Use the pattern 'header-big-logo.png' on your image names. So you can just use the following SCSS:
```scss
@include sprite($header-big-logo);
```
this will be compiled to the css equivalent, as the example
```css
background-image: src(../img/sprite.png);
background-position: 0px 0px;
heihgt: 234px;
width: 122px;
```
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
