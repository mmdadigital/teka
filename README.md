========================
Introduction to Teka
========================

Teka is the new drupal base theme.


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

* style.scss => All your custom scss goes right here.

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
