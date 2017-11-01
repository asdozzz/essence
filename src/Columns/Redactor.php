<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:35
 */
namespace Asdozzz\Essence\Columns;

class Redactor extends \Asdozzz\Essence\Columns\Textarea
{
    public $html = [
        'type'	=> 'redactor'
    ];

    public $name               = 'Редактор';
    public $data = 'Redactor';
}