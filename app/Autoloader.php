<?php

class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'myAutoload'));
    }

    private function myAutoload($className)
    {
        $exploded_name = explode('\\', $className);

        switch ($exploded_name[count($exploded_name) - 1]) {
            case 'd':
                require_once __DIR__.'/../vendor/microcode/framework/src/Microcode/Debug/d.php';

                return;
        }
        echo $className;
        if (count($exploded_name) == 1) {
            require_once $className.'.php';
            return;
        }

        switch ($exploded_name[0]) {
            case 'Microcode':
                require __DIR__.'/../vendor/microcode/framework/src/'.$className.'.php';
                break;
            case 'app':
                require $className.'.php';
                break;
            default:
                return;
        }
    }
}
