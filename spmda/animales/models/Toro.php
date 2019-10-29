<?php namespace Spmda\Animales\Models;

use Model;

/**
 * Model
 */
class Toro extends Model
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
    public $table = 'spmda_animales_toro';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
