@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>
    <p>I graduated with a Bachelor in Science of Biomedical Engineering with honors, and attended NYU Tandon School of Engineering and Rutgers Graduate School</p>

    <p>I'll fill more of this out later, but feel free to reach out at <a href="mailto:joe@vero.dev">joe@vero.dev</a></p>
    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
