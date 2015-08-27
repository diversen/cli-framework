# CLI Framework

A simple CLI framework built with PEAR console_commandline and PEAR console_color.

# Install

composer require diversen/cli-framework

Example: 

There is an example. You can test it like this:  

~~~.php
#!/usr/bin/env php
<?php

include_once "vendor/autoload.php";

use diversen\cli\example;

example::init();
example::run();
~~~

The example found at [https://github.com/diversen/cli-framework/blob/master/src/cli/example.php](https://github.com/diversen/cli-framework/blob/master/src/cli/example.php)


