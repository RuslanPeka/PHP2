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
        try {
            if (!is_string($str)) {
                throw new Exception('Передана не строка.');
            }
            return $this->toXml($str);
        } catch (Exception $e) {
            echo 'Выброшено исключение: ', $e->getMessage();
            die();
        }
    }
}
