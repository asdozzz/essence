<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:32
 */
namespace Asdozzz\Essence\Columns;

class Autocomplete extends \Asdozzz\Essence\Columns\Text
{
    public $html = [
        'type'	=> 'autocomplete'
    ];

    public $name               = 'Автозаполнение';
    public $data               = 'Autocomplete';
}