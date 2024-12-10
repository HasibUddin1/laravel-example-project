<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('home');
});

// Show all jobs
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->paginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//  Create a job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store a job
Route::post('/jobs', function(){

    request() -> validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Show a single job
Route::get('/jobs/{id}', function ($id) {


    $job = Job::find($id);


    return view('jobs.show', ['job' => $job]);
});

// Edit a job
Route::get('/jobs/{id}/edit', function ($id) {


    $job = Job::find($id);


    return view('jobs.edit', ['job' => $job]);
});

// Update a job
Route::patch('/jobs/{id}', function ($id) {

    // validate
    request() -> validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize (on hold.....)

    // update the job
    $job = Job::findOrFail($id);

    $job -> update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    // and persist

    // redirect to job specific page
    return redirect('/jobs/' . $job->id);
});

// Delete a job
Route::delete('/jobs/{id}', function ($id) {
    // authorize (on hold.......)

    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');

    
});

Route::get('/contact', function () {
    return view('contact');
});
