@props(['name'])

@error($name)
    <p class="text-red-500 font-bold">{{ $message }}</p>
@enderror
