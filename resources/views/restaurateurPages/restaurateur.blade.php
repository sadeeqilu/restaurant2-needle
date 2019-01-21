@extends('layouts.app')

@section('content')

    <div style="width: 400px; margin:0 auto;">

      @if(Session::has('success'))
          <div class="alert alert-success">
              <p> {{ Session::get('success') }} </p>
          </div>
      @endif

      <form method="post" action="{{ route('saveNewRestaurateur') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="firstName" class="form-control" placeholder="first name">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" class="form-control" placeholder="last name">
                </div>

                <div class="form-group">
                    <input type="text" name="phonenumber" class="form-control" placeholder="phonenumber">
                </div>

                <!-- <div class="form-group">
                    <input type="text" name="authorName" class="form-control" placeholder="Enter Name">
                </div> -->

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success"> Register </button>
                </div>
            </form>
    </div>

@endsection
