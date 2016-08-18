<?php

class Autoloader
{
    private $spaceMap = [];

    private $classMap = [];

    private $lastMap;

    private $space;

    private $baseDir;

    public function __construct()
    {
        spl_autoload_register(array($this, 'microLoader'), false, true);
        $this->baseDir = dirname(__DIR__);
    }

    public function space($name, $path)
    {
        $this->lastMap = &$this->spaceMap;
        $this->spaceMap['lastName'] = $name;
        $this->spaceMap[$name]['path'] = $path;

        return $this;
    }

    public function class($path)
    {
        $this->lastMap = &$this->classMap;
        $arr = explode('/', $path);
        $name = array_pop($arr);
        $this->classMap['lastName'] = $name;
        $this->classMap[$name]['path'] = implode('/', $arr);

        return $this;
    }

    public function strict()
    {
        $this->lastMap[$this->lastMap['lastName']]['strict'] = true;

        return $this;
    }

    private function microLoader($className)
    {
        $exploded_name = explode('\\', $className);

        $this->space = array_shift($exploded_name);

        echo '<br>'.$this->space.'<br>';

        if (empty($exploded_name)) {
            if ($path = $this->existInMap($this->space, $this->classMap)) {
                $this->includeFile($path, $this->classMap, true);
            } else {
                $this->globalName();
            }
        } elseif ($path = $this->existInMap(implode('/', $exploded_name), $this->spaceMap)) {
            $this->includeFile($path, $this->spaceMap);
        }
    }

    private function existInMap($class, $map)
    {
        if (array_key_exists($this->space, $map)) {
            return $this->baseDir.$map[$this->space]['path'].'/'.$class.'.php';
        } else {
            return false;
        }
    }

    private function includeFile($path, $map, $global = false)
    {
        if (array_key_exists('strict', $map[$this->space])) {
            require $path;
        } else {
            if (file_exists($path)) {
                require $path;
            } elseif ($global) {
                $this->globalName();
            }
        }
    }

    private function globalName() {
        if (array_key_exists('', $this->spaceMap)) {
            $path = $this->baseDir.$this->spaceMap['']['path'].'/'.$this->space.'.php';
            $this->space = '';
            $this->includeFile($path, $this->spaceMap);
        }
    }
}
