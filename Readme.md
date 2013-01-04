Bootcon!
========

This is a CodeIgniter Helper to enable fast coding when dealing with Bootstrap-Glyphicons


Usage
-----
Load the helper in the controller

```php
$this->load->helper('bootcon');
```

Use the helper in the views and let the magic happen

```php
<?= bootcon('plus') ?>
```
Outputs

```html
<div><i class="icon-plus"></i></div>
```

You can also wrap the <i> tag 

```php
<?= bootcon('star','<li class="li-icon"> This is a star</li>') ?>
```

So you get

```html
<li class="li-icon"><i class="icon-star"></i> This is a star</li>
```

You can even unwrap your icon and use the white version!

```php
<?= bootcon('chevron-right','',true) ?>
```

```html
<i class="icon-chevron-right icon-white"></i>
```

License
-------
Helper created by Christian Córdoba. Did I forget to say you can do with this whatever you want?
