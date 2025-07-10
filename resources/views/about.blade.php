@extends('layouts.app')

@section('title', $title)

@section('content')
    <p class="mt-4 text-gray-600">
        This is the about page of our simple blog application. Here you can find information about our team and the purpose
        of this blog.
    </p>
    <ul class="mt-6 space-y-2">
        <li><strong>Team:</strong> Ziyad Alwafie</li>
        <li><strong>Purpose:</strong> To share knowledge and insights on various topics.</li>
    </ul>
@endsection
