@extends('main')
@section('content')
    <div class="container">
        <form action="/client/{{ $client->id }}/edit" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            {{ method_field("PATCH") }}
            @include("_partials/errors")
            <h5 class="text-center" style="font-size:200%">Fill out the form!</h5>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$client->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{$client->address}}">
            </div>
                <label for="phone" class="form-label">Phone</label>
            <div class="input-group mb-3">
                <span class="input-group-text" style="border: 1px solid #6b7280;"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" class="form-control" placeholder="(+370)000-000-00" name="phone" id="phone" value="{{$client->phone}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{$client->email}}">
            </div>
            <div class="mb-3">
                <label for="contactName" class="form-label">Contact Name</label>
                <input type="text" class="form-control" name="contactName" id="contactName" value="{{$client->contactName}}">
            </div>
                <label for="contactPhone" class="form-label">Contact Phone</label>
            <div class="input-group mb-3">
                <span class="input-group-text" style="border: 1px solid #6b7280;"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" class="form-control" placeholder="(+370)000-000-00" name="contactPhone" id="contactPhone" value="{{$client->contactPhone}}">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Note</label>
                <textarea class="form-control" id="notes" name="notes" rows="4">{{$client->notes}}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
    <div class="mb-5"></div>
@endsection