<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:34
 */
namespace Asdozzz\Essence\Columns;

class File extends \Asdozzz\Essence\Columns\Text
{
    public $html = [
        'type'	=> 'file'
    ];

    public $name = 'Файл';
    public $data = 'File';
}