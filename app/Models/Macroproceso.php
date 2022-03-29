<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macroproceso extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID', 'IdM', 'Idm_num', 'MacroProceso',
    ];
}
