<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'event';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nom_event', 'lieu', 'date', 'prix', 'montant_prix', 'nom_entreprise'
    ];
    use HasFactory;

    public function projects(){
        return $this->belongsToMany(Project::class, 'event_project');
    }
}
