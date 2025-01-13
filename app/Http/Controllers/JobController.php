<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // Check if the logged-in user is already an employer
        $user = auth()->user();
        $employer = Employer::where('user_id', $user->id)->first();

        // If the user is not an employer, create an employer record
        if (!$employer) {
            $employer = Employer::create([
                'user_id' => $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
            ]);
        }

        // Create the job listing associated with the employer
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => $employer->id
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {


        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // authorize (on hold.....)

        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // update the job

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        // and persist

        // redirect to job specific page
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        // authorize (on hold.......)
        $job->delete();

        return redirect('/jobs');
    }
}
