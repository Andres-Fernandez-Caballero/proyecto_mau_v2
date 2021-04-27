<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pintura extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color_name',
        'color_hex',
        'color_number',
        'marca_id',
        'categoria_id'
    ];

    public function marca(){
        return $this->hasOne('App\Models\Marca');
    }
}
