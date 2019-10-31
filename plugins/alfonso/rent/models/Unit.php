<?php namespace Alfonso\Rent\Models;

use Model;

/**
 * Model
 */
class Unit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'alfonso_rent_units';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
}
