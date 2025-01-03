<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>


    <div>

        <form method="POST" action="/register">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-label for="first_name">First Name</x-form-label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <x-form-input type="text" name="first_name" id="first_name" placeholder="John"
                                        required />

                                    <x-form-error name="first_name" />
                                </div>

                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <x-form-label for="last_name">Last Name</x-form-label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <x-form-input type="text" name="last_name" id="last_name" placeholder="Doe"
                                        required />

                                    <x-form-error name="last_name" />
                                </div>

                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <x-form-input type="email" name="email" id="email"
                                        placeholder="example@gmail.com" required />

                                    <x-form-error name="email" />
                                </div>

                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <x-form-input type="password" name="password" id="password" placeholder="Password"
                                        required />

                                    <x-form-error name="password" />
                                </div>

                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <x-form-input type="password" name="password_confirmation"
                                        id="password_confirmation" placeholder="Confirm Password" required />
                                </div>

                            </div>
                        </div>

                    </div>


                    {{-- @if ($errors->any())
                        <ul class="mt-10">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 italic">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>
        </form>



    </div>

</x-layout>
