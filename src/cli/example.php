<?php

namespace diversen\cli;

use diversen\cli;

class example extends cli {
    public static function init() {
        
        // Init parent with base commands
        parent::init();
        
        self::$parser->description = <<<EOF
                
                        /\_/\
                   ____/ o o \
                 /~____  =ø= /
                (______)__m_m)
                
    Miau. A modulized command line program

EOF;
        self::$parser->version = '0.0.1';

        // Adding a main option for setting domain
        self::$parser->addOption(
            'domain', array(
            'short_name' => '-d',
            'long_name' => '--domain',
            'description' => 'Domain to use if using multi hosts. If not set we will use default domain',
            'action' => 'StoreString',
            'default' => 'default',
                )
        );
        
        self::beforeParse();
    }
    
    /**
     * Run the parser
     *                              
     * @return int $ret 0 on success any other int is failure
     */
    public static function run() {
        
        $result = self::parse();
        
        // Execute the result
        $ret = self::execute($result);
        
        // Exit with result from execution
        exit($ret);
    }

    /**
     * Before parsing of the commandline options
     * This loads all commandline options from file system
     * and modules found in the database
     */
    public static function beforeParse () {
        
        $command_path = __DIR__ . "/commands";
        $files = scandir($command_path);
        foreach ($files as $file){
            $full = $command_path . "/$file";
            if (!is_dir($full)) {
                include_once $full;
            }
        }
    }
}
