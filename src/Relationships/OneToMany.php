<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 30.10.2017
 * Time: 15:23
 */
namespace Asdozzz\Essence\Relationships;

class OneToMany extends Root
{
    public function __construct($essence, $column, $pk = 'id')
    {
        parent::__construct('OneToMany', $essence, $column, $pk);
    }
}