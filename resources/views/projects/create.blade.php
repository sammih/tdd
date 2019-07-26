@extends('layouts.app')

@section('content')

  <div class="row">
      <div class="col-8 pt-5">

        <form method="POST" action="/projects">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
            </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/projects" class="btn btn-danger">Cancel</a>
              </div>
            </div>
        </form>

      </div>
    </div>

@endsection