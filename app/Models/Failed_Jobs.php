<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_Jobs extends Model
{
    use HasFactory;

    protected $table = 'failed_jobs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'uuid',
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'


    ];

    public $timestamps = false;

}
