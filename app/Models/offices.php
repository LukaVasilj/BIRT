<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offices extends Model
{
    use HasFactory;

    protected $table = 'offices';

    protected $primaryKey = 'officeCode';

    protected $fillable = [
        'officeCode',
        'city',
        'phone',
        'addressLine1',
        'addressLine2',
        'state',
        'country',
        'postalCode',
        'territory'

    ];

    public $timestamps = false;

    public function employees()
    {
        return $this->hasMany(employees::class, 'officeCode', 'officeCode');
    }

}
