@extends('layouts.app')

@section('content')

  <div class="flex items-center mb-3">
      <a href="/projects/create">New projects</a>
  </div>

  <div class="flex">
    @forelse ($projects as $project)
      <div class="bg-white mr-4 rounded p-5 shadow w-1/3">
        <h3 class="foont-normal text-xl py-4">{{ $project->title }}</h3>

        <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
      </div>
    @empty
      <div>No projects yet</div>    
    @endforelse
  </div>

@endsection
