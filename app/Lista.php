<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{

     /**
     * 
     * @var string
     */
    protected $name = 'name';

     /**
     *
     * @var string
     */
    protected $price = 'price';

     /**
     *
     * @var string
     */
    protected $number = 'number';

    public $timestamps = false;

    /**
     *
     * @var string
     */
    protected $table = 'lists';
}
