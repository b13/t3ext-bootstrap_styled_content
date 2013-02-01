To enable the HTML5 Boilerplate Switch, add this to your typoscript   
(It's default on, if you inlude the static TS file)

config.doctype = html5
config.doctype.enableBoilerplateCondition = 1

and your HTML Tag & Head Tag will look like this
-------
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
-------
