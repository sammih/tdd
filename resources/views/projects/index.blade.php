@extends('layouts.app')

@section('content')

  <header class="flex items-center mb-3">
    <div class="flex justify-between items-center w-full">
        <h1 class="text-grey font-normal text-sm">My projects</h1>
        <a href="/projects/create" class="button">New projects</a>
    </div>
  </header>

  <main class="lg:flex lg:flex-wrap -mx-3">
    @forelse ($projects as $project)
      <div class="lg:w-1/3 px-3 pb-6">
        @include('projects.card')
      </div>
    @empty
      <div>No projects yet</div>    
    @endforelse
  </div>

@endsection
