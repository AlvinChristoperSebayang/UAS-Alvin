@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 pl-10">
            {{ __('Something went wrong bro lol ......') }}
        </div>
    </div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600 pl-10">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    
@endif