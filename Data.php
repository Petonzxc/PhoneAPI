<?php

class Data
{
    private array $phoneNumbers;

    public function __construct($phoneNumbers = array())
    {
        $this->phoneNumbers = $phoneNumbers;
    }



    function searchPhoneNumberByStart(string $startOfProneNumber): array
    {
        $result = array();
        foreach ($this->phoneNumbers as $value) {
            if(str_starts_with($value->getNumber(), $startOfProneNumber))
            {
                $result[count($result)] = $value;
            }
        }
        unset($value);
        return $result;
    }
}