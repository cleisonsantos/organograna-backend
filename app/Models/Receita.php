<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;

    protected $table = 'receitas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'renda',
        'valor',
        'data_recebimento'
    ];

}
