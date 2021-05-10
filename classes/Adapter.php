<?php

namespace Classes;

use Classes\ClassJson;
use Classes\ClassXml;

class Adapter
{
    public function jsonToXml(string $str)
    {
        $objXml = new ClassXml();
        return $objXml->prepareStringX($str);
    }

    public function xmlToJson(string $str)
    {
        $objJson = new ClassJson();
        return $objJson->prepareStringJ($str);
    }
}