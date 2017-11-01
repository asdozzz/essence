<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 30.10.2017
 * Time: 15:32
 */
namespace Asdozzz\Essence;

class Relationship
{
    public static function factory($operator_alias, $arguments)
    {
        if (empty($operator_alias))
        {
            throw new \Exception("Название класса не указано");
        }

        $className = "\\Asdozzz\\Essence\\Relationships\\".$operator_alias;

        $refl = new \ReflectionClass($className);
        $instance = $refl->newInstanceArgs($arguments);

        return $instance;
    }
}