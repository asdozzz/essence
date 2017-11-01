<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:35
 */
namespace Asdozzz\Essence\Columns;

class Email extends \Asdozzz\Essence\Columns\Text
{
    public $html = [
        'type'	=> 'vika-email'
    ];

    public $name               = 'Email';
    public $data               = 'Email';
}