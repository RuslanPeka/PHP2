<?php

namespace Classes;

class ClassXml
{
    private $stringX;

    public function getStringX()
    {
        return $this->stringX;
    }

    public function setStringX(string $str)
    {
        $this->stringX = $str;
    }

    protected function toXml(string $str)
    {
        $this->setStringX($str);
        return json_decode($this->stringX);
    }

    public function prepareStringX(string $str)
    {
        if(!empty($str)) {
            return $this->toXml($str);
        } else {
            die('Строка пуста');
        }
    }
}