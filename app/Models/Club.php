<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public $table = 'club';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'name', 'dateCreation', 'nbrAdherents', 'prixAdhesion' 
    ];
    use HasFactory;
}
