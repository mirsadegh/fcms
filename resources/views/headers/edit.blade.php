@extends('layouts.app')


@section('content')


        <h3 class="col-12 dinar text-info mb-2">ویرایش هدر</h3>
        <form action="{{ url("headers/$header->id") }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-3 my-4">
                    <label for="title">عنوان هدر</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $header->title }}">
                </div>


                <div class="col-md-3 my-4">
                    <label for="btn-name">نام دکمه</label>
                    <input class="form-control" type="text" name="btn_name" id="btn-name"
                           value="{{ $header->btn_name }}">
                </div>


                <div class="col-md-3 my-4">
                    <label for="btn-link"> لینک دکمه</label>
                    <input class="form-control" type="text" name="btn_link" id="btn-link"
                           value="{{ $header->btn_link }}">
                </div>


                <div class="col-md-3 my-4">
                    <label for="bg_path">تصویر پس زمینه</label>
                    <input class="form-control" type="file" name="bg_path" id="bg_path">
                </div>

                <div class="col-md-12 my-4">
                    <label for="description">متن هدر</label>
                    <input class="form-control" type="text" name="description" id="description"
                           value="{{ $header->description }}">
                </div>

                <div class="col-md-6 my-4">
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="mobile_visible" value="0">
                        <input value="1" type="checkbox" name="mobile_visible" class="custom-control-input" id="mobile"
                               @if($header->mobile_visible) checked @endif>
                        <label class="custom-control-label" for="mobile">اسلایدر موبایل را نمایش بده</label>
                    </div>
                </div>

                <div class="col-md-6 my-4">
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" name="preloader" value="0">
                        <input value="1" type="checkbox" name="preloader" class="custom-control-input" id="preloader"
                               @if($header->preloader) checked @endif >
                        <label class="custom-control-label" for="preloader">loading را نمایش بده</label>
                    </div>
                </div>
                <hr class="col-12 my-2">
                <h3 class="col-12 dinar text-info my-4">عکس های اسلایدر</h3>

                @foreach($header->photes as $photo)
                    <div class="col-md-3 my-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($photo->path) }}" class="img-fluid"
                                     style="width: 200px;height: 300px">
                            </div>
                            <div class="card-footer text-center">
                                <a href="javascript:void" class="delete-photo" data-photo-id="{{ $photo->id }}"><i
                                            class="ti-trash text-danger s-2x"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
                <hr class="col-12">
                <div class="col-md-3 mx-auto my-4">
                    <label for="slider">آپلود عکس جدید برای اسلایدر</label>
                    <input class="form-control" type="file" name="slider[]" id="slider" multiple>
                </div>

            </div>
            <hr>
            <div id="photos-to-be-deleted">
                {{--this div will be filled via jquery--}}
            </div>

            <div class="row">
                <div class="col-md-2 mx-auto my-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="ti-check ml-1"></i>
                        تایید
                    </button>
                </div>
            </div>

        </form>


@endsection