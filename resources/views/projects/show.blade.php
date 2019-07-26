@extends('layouts.app')

@section('content')

  <div>
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <a href="/projects">Go back</a>
  </div>

@endsection