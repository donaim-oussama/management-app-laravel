<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';
    protected $primaryKey = 'code_apogee';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'cne', 'cin', 'nom', 'prenom', 'date_de_naissance', 'adresse', 'email_institutionnel', 'email_personnel', 'telephone', 'sexe'
    ];
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_student')->withPivot(['mission']);
    }
}