<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vencimiento extends Model
{
    use HasFactory;

    protected $table = 'vencimientos';

    protected $fillable = [
        'id_obligaciones',
        'fin_cuit',
        'fecha',
    ];
}
