# The Extract
Take control of your excerpt length. The Extract is a simple and lightweight plugin that allows you to customize the excerpt length in your WordPress theme. Instead of using ```the_excerpt()``` you use ```the_extract()``` with optional parameters.

## Why do I need this plugin?
If you are a WordPress developer and you create custom WordPress themes, you nornally use ```the_excerpt()``` to display the excerpt on your WordPress website. The default is 55 words. There are many resources on the Internet that explains how to customize the excerpt length by inserting a few lines of code into the *__functions.php__* file of your WordPress theme. 

But here is the problem. What if you want a different excerpt length for each custom post type, archive, and category? You could do it but that would require tedious programming because you would need to define the excerpt length for each post type, archive, and category in your *__functions.php__* file.

Why not do it the easy way? This plugin takes a different approach. With **The Extract** plugin, you can define the length of your excerpt by simply inserting a few parameters like this:
```
<?php the_extract(100, '...show me more'); ?>
```
In the example above, the first 100 characters or so will be displayed and will end with ```...show me more```. The number of characters outputted can vary slightly and are approximate because the plugin will automatically crop the last sentence to the nearest word. This is to prevent cutting of words or partial words.

## Syntax
```
<?php the_extract(integer, 'string', boolean); ?>
```

- *integer*	Optional. Required only if string is defined. The number of characters to crop. Default is 100 characters
- *string*	Optional. A few words to end the sentence. Default is none. Limit is 50 characters
- *boolean*	Optional. Whether to hyperlink the string. Default is true


## How to use it in your WordPress template
There are no settings or parameters. This plugin does not add anything to the WordPress backend. Once activated, you can utilize this plugin in your WordPress theme files in your PHP programming. 

## Example 1:
Basic example. Outputs approximately 100 characters as the default
```
<?php the_extract(); ?>
```

## Example 2:
Outputs approximately 250 characters
```
<?php the_extract(250); ?>
```

## Example 3:
Outputs approximately 200 characters and ends with *Click here to learn more...*
```
<?php the_extract(200, 'Click here to learn more...'); ?>
```

## Example 4:
Special HTML characters and HTML entities are allowed. The example below outputs approximately 225 characters and ends with an HTML long arrow
```
<?php the_extract(225, '&xrarr;'); ?>
```

## Example 5:
Outputs approximately 225 characters and ends with *Learn more...* and removes the hyperlink
```
<?php the_extract(225, 'Learn more...', FALSE); ?>
```

## Example 6:
The same set of parameters also apply when you use ```get_extract()``` or ```get_the_extract()``` and use it in a variable
```
<?php 
$blurb = get_extract(250, '...show me more'); 
echo $blurb;
?>
```

```
<?php 
$blurb = get_the_extract(250, 'Learn more...'); 
echo $blurb;
?>
```

## Installation
1. After you download it, unzip the plugin files.
2. Upload the entire plugin folder to the "/wp-content/plugins/" directory of your WordPress installation.
3. Activate the plugin through the "Plugins" menu in WordPress.

## Screenshots
There are no screenshots because this plugin does not add anything to the WordPress backend. 

## Changelog
Version 1.0.0 - First plugin release.
