@extends('layouts.app')

@section('content')
          <form action="{{ url("contents/$section->id") }}" method="post" enctype="multipart/form-data">
              @csrf
              <div id="clone-box">

                  @foreach($contents as $content)
                      <div class="clone-row">
                          <div class="row">

                             @include('fragments.clone_trash',['row_counts' => count($contents) ])
                              <div class="col-md-2 my-2">
                                  <label for="position">ترتیب</label>
                                  <input type="number" name="position[]" id="position" value="{{ $content->position }}" class="form-control" required>
                              </div>
                              @foreach($section->inputs() as $input)
                                  @include("contents.partials.$input")
                              @endforeach
                          </div>
                          <hr>

                      </div>
                   @endforeach

              </div>

            @include('fragments.cloner')

          </form>



@endsection