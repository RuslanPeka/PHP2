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
        try {
            if (!is_string($str)) {
                throw new Exception('Передана не строка.');
            }
            return $this->toJson($str);
        } catch (Exception $e) {
            echo 'Выброшено исключение: ', $e->getMessage();
            die();
        }
    }
}
