<?php namespace Alfonso\Dormrentalapp\Models;

use Model;

/**
 * Model
 */
class Unit extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'alfonso_dormrentalapp_units';


    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    // public function scopeListFrontEnd(&query, &options = []){


    //     extract(array_merge([

    //         'page' => 1,
    //         'perPage' => 10,
    //         'sort' => 'created_at desc', //price
    //         'location' => '',
    //         'type' => '',


    //     ], $options));

    //     return $query->paginate($perPage, $page);

    // }
}
