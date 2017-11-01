<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:34
 */
namespace Asdozzz\Essence\Columns;

class Hidden extends \Asdozzz\Essence\Columns\Text
{
    public $html = [
        'type'	=> 'hidden'
    ];

    public $name               = 'Скрытое';
    public $data = 'Hidden';
}