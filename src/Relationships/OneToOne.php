<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 30.10.2017
 * Time: 15:23
 */
namespace Asdozzz\Essence\Relationships;

class OneToOne extends Root
{
    public function __construct($essence, $column, $pk = 'id')
    {
        parent::__construct('OneToOne', $essence, $column, $pk);
    }
}