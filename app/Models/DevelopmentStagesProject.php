<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentStagesProject extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function stages()
    {
        return $this->belongsTo(Stages::class,'stage_id');
    }
    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
