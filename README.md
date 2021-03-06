# CLI Framework

A simple CLI framework built with PEAR console_commandline and PEAR console_color.

# Install

You will need to have the `PEAR repositories` enabled in your base `composer.json` file:  

~~~.json
    "repositories": [
        {
            "type": "pear",
            "url": "https://pear.php.net"
        }

    ],
~~~

composer require diversen/cli-framework

# Example: 

There is a simple example. You can test it by creating a file called `example`,
and add the following piece of code. 

~~~.php
#!/usr/bin/env php
<?php

include_once "vendor/autoload.php";

use diversen\cli\example;

example::init();
example::run();
~~~

Run the example:

    chmod +x example
    ./example 

The example class can found be found in [src/cli/example.php](https://github.com/diversen/cli-framework/blob/master/src/cli/example.php)

The example class loads all commands found in the folder [src/cli/example](https://github.com/diversen/cli-framework/tree/master/src/cli/commands)

There is only one base command, with two sub-commands, and it can take one optional argument. 
This looks like this: [src/cli/commands/miau.php](https://github.com/diversen/cli-framework/blob/master/src/cli/commands/miau.php)
