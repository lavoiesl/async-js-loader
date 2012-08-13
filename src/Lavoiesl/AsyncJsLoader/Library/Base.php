<?php

namespace Lavoiesl\AsyncJsLoader\Library;

abstract class Base
{
    protected $id    = false;
    protected $delay = 400;

    public function getId()
    {
        if ($this->id) {
            return $this->id;
        } else {
            return $this->id = md5($this->getSrc());
        }
    }

    public function getJs()
    {
        $id  = $this->getId();
        $src = $this->getSrc();

        return "l('$id','$src',{$this->delay});";
    }

    abstract public function getSrc();
}
