<?php

namespace Asdozzz\Essence\Essences;

use DB;

abstract class Essence implements \Asdozzz\Essence\Interfaces\iEssence
{
    public $softDeletes   = false;
    public $deleted_field = '';

	function __construct()
	{
        $this->table = $this->get('table');
        $this->label = $this->get('label');
        $this->primary_key = $this->get('primary_key');
        $this->columns = $this->get('columns');
        $this->permissions = $this->get('permissions');
        $this->forms = $this->get('forms');
        $this->datatables = $this->get('datatables');
	}

    public function get($key)
    {
        switch ($key) 
        {
            case 'table':
                return $this->table;
            break;

            case 'label':
                return $this->label;
            break;

            case 'primary_key':
                return $this->primary_key;
            break;
            
            case 'columns':
                return $this->getColumns();
            break;

            case 'permissions':
                return $this->getPermissions();
            break;

            case 'forms':
                return $this->getForms();
            break;

            case 'datatables':
                return $this->getDatatables();
            break;
        }

        return false;
    }

    public function getRelationships()
    {
        return [];
    }
}