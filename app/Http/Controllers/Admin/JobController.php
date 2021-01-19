<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Job,Type};

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.jobs.create',compact('types'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = Job::create($request->all());
        if (!$job) {
            return back()->withInput();
        }
        return redirect()->route('admin.jobs.index')->withMessage('Работа успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $types = Type::all();
        return view('admin.jobs.show', compact('job',$types));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $types = Type::all();
        return view('admin.jobs.edit', compact('job','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
        return redirect()->route('admin.jobs.index')->withMessage('Работа успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function trashed()
    {
        $jobs = Job::onlyTrashed()->get();
        return view('admin.jobs.trashed',
            compact('jobs')
        );
    }

    public function restore($id)
    {
        Job::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.jobs.trashed');
    }

    public function force($id)
    {
        $job = Job::withTrashed()->where('id', $id)->first();
        $job->forceDelete();
        return redirect()->route('admin.jobs.trashed');
    }
}
