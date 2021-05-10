<?php

namespace Classes;

class ClassJson
{
    private $stringJ;

    public function getStringJ()
    {
        return $this->stringJ;
    }

    public function setStringJ(string $str)
    {
        $this->stringJ = $str;
    }

    protected function toJson(string $str)
    {
        $this->setStringJ($str);
        return json_encode($this->stringJ);
    }

    public function prepareStringJ(string $str)
    {
        if(!empty($str)) {
            return $this->toJson($str);
        } else {
            die('Строка пуста');
        }
    }
}