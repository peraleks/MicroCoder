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
                require_once __DIR__.'/../vendor/zdorovo/micro/Micro/Debug/d.php';

                return;
        }

    }
}
