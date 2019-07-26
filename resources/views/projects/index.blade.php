@extends('layouts.app')

@section('content')

  <header class="flex items-center mb-3">
    <div class="flex justify-between items-center w-full">
        <h1 class="text-grey font-normal text-sm">My projects</h1>
        <a href="/projects/create" class="button">New projects</a>
    </div>
  </header>

  <main class="flex flex-wrap -mx-3">
    @forelse ($projects as $project)
    <div class="w-1/3 px-3 pb-6">
      <div class="bg-white rounded p-5 shadow" style="height:200px">
        <h3 class="foont-normal text-xl py-4">{{ $project->title }}</h3>
        <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
      </div>
    </div>
    @empty
      <div>No projects yet</div>    
    @endforelse
  </div>

@endsection
