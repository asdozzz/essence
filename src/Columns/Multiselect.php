<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:35
 */
namespace Asdozzz\Essence\Columns;

class Multiselect extends \Asdozzz\Essence\Columns\Select
{
    public $html = [
        'type'	=> 'multiselect'
    ];

    public $name               = 'Множественный список';
    public $data = 'Multiselect';
}