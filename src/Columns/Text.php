<?php

namespace Asdozzz\Essence\Columns;

class Text extends \Asdozzz\Essence\Columns\Column
{
    public $html = [
        'type'	=> 'vika-text'
    ];

    public $name               = 'Строка';
    public $type               = 'text';
    public $length             = 5000;
	public $data               = 'Text';
	public $system             = false;
	public $required           = false;
	public $events             = [];
	public $validation_rules   = '';
	public $convertation_rules = [];
}