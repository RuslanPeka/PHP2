<?php

namespace External;

class ExternalApi
{
    private $someInfo = 'It is External Api.';

    public function getSomeInfo()
    {
        return $this->someInfo;
    }

    public function setSomeInfo(string $someInfo)
    {
        $this->someInfo = $someInfo;
    }

    public function generateNewInfo(string $newInfo) : string
    {
        if(!empty($newInfo)) {
            $this->setSomeInfo($newInfo);
            $result = $this->getSomeInfo();
            $result .= ' : new info generated!';
        } else {
            $result = $this->someInfo;
        }
        return $result;
    }
}