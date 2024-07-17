<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <div class="px-4 py-6 border rounded-lg border-gray-300">
                <div>
                    <p class="text-blue-500">{{ $job->employer->name }}</p>
                </div>
                <a href="jobs/{{ $job['id'] }}">
                    <strong class="text-xl">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
