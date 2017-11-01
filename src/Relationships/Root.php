<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 30.10.2017
 * Time: 15:22
 */
namespace Asdozzz\Essence\Relationships;

class Root
{
    public $type;
    public $essence;
    public $pk = 'id';
    public $column;

    public function __construct($type,$essence,$column, $pk)
    {
        $this->type = $type;
        $this->essence = $essence;
        $this->column = $column;
        $this->pk = $pk;
    }
}