<?php namespace Pamperme\PampermeReview\Models;

use Model;

/**
 * Model
 */
class Review extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pamperme_pampermereview_rate';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /*relations*/
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
}
