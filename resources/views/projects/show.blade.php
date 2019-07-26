@extends('layouts.app')

@section('content')
<header class="flex items-center mb-3">
    <div class="flex justify-between items-center w-full">
        <p class="text-grey font-normal text-sm">
          <a href="/projects" class="text-grey text-sm font-normal no-underline">My projects</a> / {{ $project->title }}
        </p>
        <a href="/projects/create" class="button">New projects</a>
    </div>
  </header>
  <main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">
          <div class="mb-8">
            <h2 class="text-lg text-grey text-sm mb-3">Task</h2>
            {{-- tasks --}}

            <div class="card mb-3">Lorem Ipsum</div>
          </div>
          <div>
            <h2 class="text-lg text-grey text-sm mb-3">General Notes</h2>
          
            {{-- general notes --}}
            <textarea class="w-full card" style="height:200px"></textarea>
          </div>
          
        </div>

        <div class="lg:w-1/4 px-3">
          @include('projects.card')
        </div>
    </div>
  </main>
  

@endsection