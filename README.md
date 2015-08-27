# CLI Framework

A simple CLI framework built with PEAR console_commandline and PEAR console_color.

# Install

composer require diversen/cli-framework

Example: 

There is an example. You can test it like this:  
Put it in a file called `example`. 

~~~.php
#!/usr/bin/env php
<?php

include_once "vendor/autoload.php";

use diversen\cli\example;

example::init();
example::run();
~~~

    chmod +x example
    ./example 

This example can found be found in [src/cli/example.php](https://github.com/diversen/cli-framework/blob/master/src/cli/example.php)

The example loads all commands found in the folder [src/cli/example](https://github.com/diversen/cli-framework/tree/master/src/cli/commands)

There is only one base command, with to sub-commands and one argument. 
This looks like this: [src/cli/commands/miau.php](https://github.com/diversen/cli-framework/blob/master/src/cli/commands/miau.php)