<?php

namespace Asdozzz\Essence\Columns;

class Textarea extends \Asdozzz\Essence\Columns\Text
{
	public $html = [
		'type'	=> 'vika-textarea'
	];

    public $type               = 'text';
    public $length             = 5000;
	public $name               = 'Текстареа';
    public $data = 'Textarea';
}