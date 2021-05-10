<?php

namespace App\Facade;

use External\ExternalApi;

class Facade
{
    public $conn;

    public function __construct()
    {
        $this->conn = new ExternalApi();
    }

    public function generateNewInfo(string $someStr)
    {
        return $this->conn->generateNewInfo($someStr);
    }
}