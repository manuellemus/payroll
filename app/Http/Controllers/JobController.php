<?php

namespace App\Http\Controllers;

use App\Department;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->get();

        return view('job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        return view('job.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        

        $post = Job::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        $post->save();

        return redirect('jobs-employee')->with('status', 'Creado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        $departments = Department::all();

        return view('job.edit', compact('departments', 'job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request)
    {
        //dd($request->all());
        $job = Job::find($request->id);

        $job->update($request->all());
        $job->save();
        return redirect('jobs-employee')->with('status', 'Editado con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect('jobs-employee')->with('status', 'Eliminado con exito');
        
    }
}
