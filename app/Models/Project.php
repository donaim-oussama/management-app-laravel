<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'title', 'description', 'id_category', 'dateLancement', 'dateRealisation'
    ];
    use HasFactory;

    public function events(){
        return $this->belongsToMany(Event::class, 'event_project');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'project_student')->withPivot(['mission']);
    }
}
