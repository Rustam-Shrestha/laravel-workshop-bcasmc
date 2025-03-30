<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // fillable represents the model blueprint/schema/template 
    // that will be used to create the database table
    // and the data that will be stored in the database just kind of like placeholder that will get
    //indulged with databae to fill the data inserted in view
    protected $fillable = [
        'pname',
        'description',
        'price',
        'qty',
    ];
}
