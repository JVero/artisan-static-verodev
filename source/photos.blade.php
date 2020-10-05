@extends('_layouts.master')

@section('title', 'Photos')

@section('content')
    <h1>Photos</h1>

    <ul>
        @forelse ($photos->sortBy('title') as $photo)
            <li>
                <a href="{{ $photo->getPath() }}">{{ $photo->title }}</a>
                <small>{{ $photo->prettyDate() }}</small>
            </li>
        @empty
            <p>No photos to show.</p>
        @endforelse
    </ul>
@endsection