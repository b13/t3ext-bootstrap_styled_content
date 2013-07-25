# Bootstrap Styled Content

## What does it do?
Gives you the opportunity to easily include the Twitter-Project *Bootstrap* from [http://twitter.github
.io/bootstrap/](http://twitter.github.io/bootstrap/).
Also add a HTML5 Boilerplate Switch for Internet Explorer in the html-tag. So you can add special css for IE.

## Best Practise
If you able to set a shortcut from your less files in fileadmin to the less files of this ext. you can easily inlcude
 those files into your main.less file. If you store your lessfiles in typo3conf/templates/main/less/ you can use the
 following in your command line:

```
$ cd typo3conf/templates/main/less/
$ ln -s ../../../ext/bootstrap_styled_content/Resources/Public/Contrib/Bootstrap/less/ contrib
```

If your store your less files in fileadmin/templates/less you can use following command:

```
$ cd fileadmin/templates/less/
$ ln -s ../../../typo3conf/ext/bootstrap_styled_content/Resources/Public/Contrib/Bootstrap/less/ contrib
```

### Less to css converter
We recommend you to use *amazingless* on your system to convert your less files to css. You can find it on
[https://github.com/b13/t3ext-amazingless](https://github.com/b13/t3ext-amazingless)

## Configuration
There is not realy a configuration. You only can set the HTML5 Boilerplate Switch. But: More to come. Stay tuned!

### HTML5 Boilerplate Switch
To enable the HTML5 Boilerplate Switch, add this to your typoscript
(It's default on, if you include the static TS file)

config.doctype = html5
config.doctype.enableBoilerplateCondition = 1

and your HTML Tag & Head Tag will look like this

```html
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
```
