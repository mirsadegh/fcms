@extends('layouts.app')


@section('content')


        <h3 class="col-12 dinar text-info mb-2">ویرایش فوتر</h3>
        <form action="{{ url("footers/$footer->id") }}" method="post">

            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-4 my-4">
                    <label for="title">عنوان فوتر</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $footer->title }}">
                </div>

                <div class="col-md-8 my-4">
                    <label for="address">آدرس فوتر</label>
                    <input class="form-control" type="text" name="address" id="address" value="{{ $footer->address }}">
                </div>

                <div class="col-md-6 my-4">
                    <label for="description_1">توضیحات اول فوتر</label>
                    <textarea name="description_1" id="description_1"  class="form-control"  rows="4">{{ $footer->description_1 }}</textarea>

                </div>

                <div class="col-md-6 my-4">
                    <label for="description_2">توضیحات دوم فوتر</label>
                    <textarea name="description_2" id="description_2"  class="form-control"  rows="4">{{ $footer->description_2 }}</textarea>

                </div>

                <div class="col-md-6 my-4">
                    <label for="telephones">شماره تلفن ها</label>
                    <textarea name="telephones" id="telephones"  class="form-control"  rows="4">{{ $footer->telephones_with_line_breaks() }}</textarea>

                </div>

                <div class="col-md-6 my-4">
                    <label for="emails">ایمیل ها</label>
                    <textarea name="emails" id="emails"  class="form-control"  rows="4">{{ $footer->emails_with_line_breaks() }}</textarea>

                </div>


                  <div class="col-md-2 my-4">
                    <label class="open-sans"  for="facebook"> Facebook</label>
                    <input class="form-control" type="text" name="facebook" id="facebook" value="{{ $footer->facebook }}">
                </div>

                 <div  class="col-md-2 my-4">
                    <label class="open-sans" for="twitter"> Twitter</label>
                    <input class="form-control" type="text" name="twitter" id="twitter" value="{{ $footer->twitter }}">
                </div>

                 <div  class="col-md-2 my-4">
                    <label class="open-sans" for="google"> Google</label>
                    <input class="form-control" type="text" name="google" id="google" value="{{ $footer->google }}">
                </div>

                 <div  class="col-md-2 my-4">
                    <label class="open-sans" for="linkedin"> LinkedIn</label>
                    <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{ $footer->linkedin }}">
                </div>

                 <div  class="col-md-2 my-4">
                    <label class="open-sans" for="instagram"> Instagram</label>
                    <input class="form-control" type="text" name="instagram" id="instagram" value="{{ $footer->instagram }}">
                </div>

                <div  class="col-md-2 my-4">
                    <label class="open-sans" for="telegram"> Telegram </label>
                    <input class="form-control" type="text" name="telegram" id="telegram" value="{{ $footer->telegram }}">
                </div>


            </div>
            <hr>

            <div class="row">
                <div class="col-md-2 mx-auto py-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="ti-check ml-1"></i>
                        تایید
                    </button>
                </div>
            </div>

        </form>


@endsection