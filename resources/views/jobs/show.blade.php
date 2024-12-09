<x-layout>
    <x-slot:heading>
        Job Description
    </x-slot:heading>


    <div>

        <h1 class="text-2xl font-bold">Job Provider: {{$job->employer->name}}</h1>
        <p class="text-xl font-semibold">This job pays {{$job['salary']}}</p>

    </div>

</x-layout>
