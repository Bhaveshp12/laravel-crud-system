<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class management extends Model
{
    use HasFactory;

    protected $table = 'management';
    protected $fillable = [
        'carname',
        'carcompany',
        'carmodel',
        'carimage',
        
    ] ;
}
