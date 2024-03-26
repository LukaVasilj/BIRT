<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $primaryKey = 'employeeNumber';

    protected $fillable = [
        'employeeNumber',
        'lastName',
        'firstName',
        'extension',
        'email',
        'officeCode',
        'reportsTo',
        'jobTitle'

    ];

    public $timestamps = false;

    public function office()
    {
        return $this->belongsTo(offices::class, 'officeCode', 'officeCode');
    }

}
