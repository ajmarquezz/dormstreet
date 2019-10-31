<?php namespace Alfonso\Rent\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class RentalsUser extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
         BackendMenu::setContext('Alfonso.Rent', 'Rentals2', 'RentalsUser');
    }
}
