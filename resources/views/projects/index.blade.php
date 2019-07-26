@extends('layouts.app')

@section('content')

  <div class="flex items-center">
      <h1 style="margin-right: auto">BirdBoard</h1>
      <a href="/projects/create">New projects</a>
  </div>

  <ul>
    @forelse ($projects as $project)

      <li>
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
      </li>

    @empty
      <p>No projects yet</p>    
    @endforelse
  </ul>

@endsection
