<x-layout>
    <x-slot:heading>
        Job Description
    </x-slot:heading>


    <div>

        <h1 class="text-xl font-semibold">Job Provider: {{ $job->employer->name }}</h1>
        <h1 class="text-4xl font-bold">Job Title: {{ $job->title }}</h1>
        <p class=" font-semibold mt-3">This job pays {{ $job['salary'] }}</p>

    </div>

    @can('edit', $job)
        <div class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </div>
    @endcan


</x-layout>
