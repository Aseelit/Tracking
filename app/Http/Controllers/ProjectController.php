<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\DevelopmentStagesProject;
use App\Models\Project;
use App\Models\Stages;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project=Project::with(['user'])->get();
        return view('Project.project',compact('project'));
    }

    public function show($id)
    {
        $project=Project::with(['user'])->whereId($id);
        return view('Project.project',compact('project'));
    }
    public function store(ProjectRequest $request)
    {

        // return $request;
        $project=new Project();
        if($request->file('photo'))
        {
            $file=$request->file('photo');
            $file_name=time().'_'.$request->photo->getClientOriginalName();
            $path=$file->storeAs('project/',$file->getClientOriginalName(),'public');
            $project->path=$path;
        }
       $project->name=$request->name;
       $project->descrbation=$request->descrbation;
       $project->user_id=$request->user_id;
        $project->status=$request->status;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->address=$request->address;
        $project->save();
        $satges=Stages::all();
        foreach($satges as $satge)
        {
            $dev=new DevelopmentStagesProject();
             $dev->project_id=$project->id;
             $dev->stage_id=$satge->id;
             $dev->save();
        }
       
        notify()->success('Laravel Notify is awesome!');

        return redirect()->route('project.index');
    }
    public function create()
    {
        $user=User::all();
        return view('Project.create',compact('user'));
    }
 
    public function destroy($id)
    {
        $project=Project::find($id);
        if($project)
        {
            $project->delete();
               return redirect()->route('project.index');
        }
        else
        {
            return redirect()->route('project.index');
        }
    }
}
