<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productlines extends Model
{
    use HasFactory;

    protected $table = 'productlines';

    protected $primaryKey = 'id';

    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'image'


    ];

    protected $hidden = ['image']; // Sakrivanje atributa 'image' prilikom serijalizacije u JSON


    public $timestamps = false;

}
