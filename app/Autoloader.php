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

        array_key_exists($name, $this->spaceMap)
            ?: $this->spaceMap[$name] = [];

        array_key_exists('path', $this->spaceMap[$name])
            ?: $this->spaceMap[$name]['path'] = [];

        $this->spaceMap[$name]['path'][] .= $path;

        return $this;
    }

    public function class($path)
    {
        $this->lastMap = &$this->classMap;
        $arr = explode('/', $path);
        $name = array_pop($arr);
        $this->classMap['lastName'] = $name;

        array_key_exists($name, $this->classMap)
            ?: $this->classMap[$name] = [];

        array_key_exists('path', $this->classMap[$name])
            ?: $this->classMap[$name]['path'] = [];

        $this->classMap[$name]['path'][] .= implode('/', $arr);

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
        if (empty($exploded_name)) {
            if (array_key_exists($this->space, $this->classMap)) {
                $this->includeFile($this->space, $this->classMap, true);
            } else {
                $this->globalName();
            }
        } elseif (array_key_exists($this->space, $this->spaceMap)) {
            $this->includeFile(implode('/', $exploded_name), $this->spaceMap);
        }
    }

    private function includeFile($class, $map, $global = false)
    {
        $count = count($map[$this->space]['path']) - 1;
        for ($i = 0; $i <= $count; ++$i) {
            $path = $this->baseDir.$map[$this->space]['path'][$i].'/'.$class.'.php';
            if (($i == $count) && array_key_exists('strict', $map[$this->space])) {
                require $path;

                return;
            } else {
                if (file_exists($path)) {
                    require $path;

                    return;
                }
            }
        }
        !$global ?: $this->globalName();
    }

    private function globalName()
    {
        if (array_key_exists('', $this->spaceMap)) {
            $class = $this->space;
            $this->space = '';
            $this->includeFile($class, $this->spaceMap);
        }
    }
}
