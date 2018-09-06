Toggle switcher widget for Yii2
===============================


This widget will help to replace the checkbox in the form with a nice switch.

![alt text](https://github.com/coderius/github-images/blob/master/ezgif.com-optimize.gif "Toggle switcher widget example")
![alt text](https://github.com/coderius/github-images/blob/master/Kazam_screenshot_00003.png "Toggle switcher widget example")

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "coderius/yii2-toggle-switcher-widget" "@dev"
```

or add

```json
"coderius/yii2-toggle-switcher-widget" : "@dev"
```

to the require section of your application's `composer.json` file.

Usage
-----
How to basic use widget:

```php
<?php 
    echo $form->field($model, 'flagActive')->widget(ToggleSwitchWidget::classname(), [
        'type' => ToggleSwitchWidget::CHECKBOX
    ]); 
?>

```
Or more short notice (ToggleSwitchWidget::CHECKBOX is default type value in widget):

```php
<?= $form->field($model, 'status')->widget(ToggleSwitchWidget::classname()); ?>
```
