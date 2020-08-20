@extends('layouts.app')


@section('content')

    <div class="container">

            <form  action="{{ url("headers/$header->id") }}" method="post">

                @csrf
                @method('PUT')
                <div class="row">

                <div class="col-md-4 my-4">
                    <label for="title">عنوان هدر</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $header->title }}" >
                </div>


                <div class="col-md-4 my-4">
                    <label for="btn-name">نام دکمه</label>
                    <input class="form-control" type="text" name="btn_name" id="btn-name" value="{{ $header->btn_name }}" >
                </div>
                <div class="col-md-4 my-4">
                    <label for="btn-link"> لینک دکمه</label>
                    <input class="form-control" type="text" name="btn_link" id="btn-link" value="{{ $header->btn_link }}" >
                </div>

                <div class="col-md-12 my-4">
                    <label for="description">متن هدر</label>
                    <input class="form-control" type="text" name="description" id="description" value="{{ $header->description }}" >
                </div>

                <div class="col-md-6 my-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">اسلایدر موبایل را نمایش بده</label>
                    </div>
                </div>

                <div class="col-md-6 my-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">loading را نمایش بده</label>
                    </div>
                </div>
                <hr class="col-12 my-2">
                <div class="col-md-5 my-4 "></div>
                <div class="col-md-2 my-4">
                    <button type="submit" class="btn btn-primary btn-block" >
                        <i class="ti-check ml-1"></i>
                        تایید
                    </button>
                </div>


                </div>

            </form>

    </div>



    @endsection