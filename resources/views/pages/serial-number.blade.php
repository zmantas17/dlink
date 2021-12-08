@extends('main')
@section('content')
    <div class="container text-white">
        <form action="store-serial-number" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @include("_partials/errors")
                <label class="input-group  mb-2">Choose file</label>
                <div class="bg-white text-dark mb-3 ">
                    <input type="file" class="form-control py-2 border border-radius" id="file" name="file">
                </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
@endsection