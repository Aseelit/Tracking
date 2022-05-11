<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Http\Requests\StoreTrackingRequest;
use App\Http\Requests\UpdateTrackingRequest;
use App\Models\DevelopmentStagesProject;
use App\Models\ImageTracking;
use App\Models\Project;
use App\Models\Stages;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackingController extends Controller
{
    
    public function getstages($project_id)
    {
        $data = DevelopmentStagesProject::with('stages')->where('project_id', $project_id)->get();
        return $data;
    }
    public function index()
    {
        $tracking = Tracking::with('development')->get();
        $stages = Stages::all();
        return view('Pages.Tracking.list_tracking', compact('tracking', 'stages'));
    }

    
    public function create()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        $stages = Stages::all();
        return view('Pages.Tracking.create_tracking', compact('stages', 'projects'));
    }

  
    public function store(Request $request)
    {
        // dd($request);
        try
        {
            $tracking=new Tracking();
          
            if($request->file('photo'))
            {
                $file=$request->file('photo');
                $file_name=time().'_'.$request->photo->getClientOriginalName();
                $path=$file->storeAs('report',$request->photo->getClientOriginalName(),'public');
                $tracking->report=$path;
            }
            $tracking->address = $request->address;
            $tracking->date = Carbon::now();
            $tracking->development_stages_project_id = $request->development_stages_project_id;
            $tracking->save();
              
            if($request->file('img'))
            {
                if($request->img > 1)
                {
                 foreach($request->img as $images)
                 {
                        $img=new ImageTracking();
                        $file_name=time().'_'.$images->getClientOriginalName();
                        $path=$file->storeAs('imgtracking',$file_name,'public');
                        $img->path=$path;
                        $img->tracking_id=$tracking->id;
                        $img->save();

                 }
                }
            }
        
            toastr()->success('successfly created the tracking');
             return redirect()->route('project.index');
        }catch(Exception $e)
        {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show($report)
    {
        $path=Tracking::find($report);
            return response()->download(public_path('storage/'.$path->report));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrackingRequest  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrackingRequest $request, Tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        $tracking->delete();
        return redirect()->route('tracking.index');
    }
}
