<?php namespace Pamperme\Gallery\Models;

use Model;

/**
 * Model
 */
class Gallery extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pamperme_gallery_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
}
