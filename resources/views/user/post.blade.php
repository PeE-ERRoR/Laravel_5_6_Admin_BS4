@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                  <form method="POST" action="/post">
                      @csrf
                      {{-- @method('PUT')
                      @method('DELETE') --}}

                      <div class="form-row form-group">
                        <div class="col-6">
                          <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                      </div>
                      <div class="form-row form-group">
                        <div class="col-6">
                          <textarea name="body" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-row form-group">
                        <div class="col-6">
                          <input type="file" name="file_name" class="form-control">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <button type="submit" class="btn" name="button">submit</button>
                        </div>
                        <div class="col">

                        </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
