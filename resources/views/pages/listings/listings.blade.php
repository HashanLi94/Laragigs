
@extends('layout/wrapper')

@section('content')
    @include('partials/_hero')
    @include('partials/_searchform')
    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
    @if(count($listings) > 0)
        @foreach($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    @else
        <p>No data to show</p>
    @endif
</div>

@endsection
