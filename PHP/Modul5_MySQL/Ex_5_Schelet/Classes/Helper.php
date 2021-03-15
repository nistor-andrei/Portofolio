<?php

namespace Classes;

class Helper
{
    public static function preventXSS($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

    public static function preventXSSArr(array $arr)
    {
        foreach ($arr as $value) {
            $preventArr[] = self::preventXSS($value);
        }
        return $preventArr;
    }

}
