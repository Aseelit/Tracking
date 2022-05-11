<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function img()
    {
        return $this->hasMany(ImageTracking::class);
    }

    public function development()
    {
        return $this->belongsTo(DevelopmentStagesProject::class,'development_stages_project_id');
    }

    

}
