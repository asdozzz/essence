<?php
/**
 * Created by PhpStorm.
 * User: asd
 * Date: 28.01.2017
 * Time: 18:34
 */
namespace Asdozzz\Essence\Columns;

class Dateunix extends \Asdozzz\Essence\Columns\Integer
{
    public $html = [
        'type'	=> 'vika-dateunix'
    ];

    public $name               = 'Dateunix';
    public $data               = 'dateunix';
    public $type             = 'integer';

    public $system           = false;
    public $required         = false;
    public $events           = [];
    public $validation_rules = 'integer|nullable';

    public $convertation_rules = array();

    public function __construct()
    {
        parent::__construct();

        $this->convertation_rules[] = function($value)
        {
            return strtotime($value);
        };

        $this->operators[] = \Operator::factory('between')->get();
        $this->operators[] = \Operator::factory('not_between')->get();
    }
}