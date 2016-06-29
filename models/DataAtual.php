<?php
/**
 * Created by PhpStorm.
 * User: daizinunes
 * Date: 28/06/2016
 * Time: 20:50
 */

namespace app\models;

class DataAtual
{
    public static function getData()
    {
        $time = new \DateTime('now', new \DateTimeZone('UTC'));
        return $time->format('c');
    }
}