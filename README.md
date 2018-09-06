Toggle switcher widget for Yii2
===============================

Usage
-----
How to basic use widget:

```php
<?php 
    echo $form->field($model, 'flagActive')->widget(ToggleSwitchWidget::classname(), [
        'type' => IosStyleToggleSwitchWidget::CHECKBOX
    ]); 
?>

```