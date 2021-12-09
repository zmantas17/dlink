@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
    <div class="container">
        <form action="store-rma-base" method="POST" class="mt-5">
            @csrf
            @include("_partials/errors")
            <h5 class="text-center" style="font-size:200%">RMA Register</h5>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <label for="phone" class="form-label">Phone</label>
            <div class="input-group mb-3">
                <span class="input-group-text" style="border: 1px solid #6b7280;"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" class="form-control" placeholder="(+370)000-000-00" name="phone" id="phone">
            </div>

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
                <button type="submit" class="btn rma-base-form-btn mb-3">Submit</button>
            </div>
            
        </form>
    </div>
    <div class="mb-5"></div>
@endsection