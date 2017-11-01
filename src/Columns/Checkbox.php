<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:33
 */
namespace Asdozzz\Essence\Columns;

class Checkbox extends \Asdozzz\Essence\Columns\Boolean
{
    public $html = [
        'type'	=> 'vika-checkbox'
    ];

    public $name               = 'Чекбокс';
    public $data               = 'Checkbox';
}