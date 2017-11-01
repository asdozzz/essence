<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:34
 */
namespace Asdozzz\Essence\Columns;

class Image extends \Asdozzz\Essence\Columns\File
{
    public $html = [
        'type'	=> 'image'
    ];

    public $name               = 'Изображение';
    public $data = 'Image';
}