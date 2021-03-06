@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
    <div class="container">
        <form action="store-demo-device" method="POST" class="mt-2">
            @csrf
            @include("_partials/errors")
            <h5 class="text-center mb-4" style="font-size:200%">Add demo device</h5>

            <div class="mb-3">
                <label for="deviceProductNumber" class="form-label">Device P/N</label>
                <input type="text" class="form-control" name="deviceProductNumber" id="deviceProductNumber">
            </div>

            <div class="mb-3">
                <label for="deviceSerialNumber" class="form-label">Device S/N</label>
                <input type="text" class="form-control" name="deviceSerialNumber" id="deviceSerialNumber">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn add-demo-device-button mb-3">Submit</button>
            </div>
            
        </form>
    </div>
    <div class="mb-5"></div>
@endsection