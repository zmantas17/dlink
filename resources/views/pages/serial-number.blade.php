@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
    <div class="container text-white">
        <form action="store-serial-number" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @include("_partials/errors")
                <label class="input-group mb-2">Choose file</label>
                <div class="bg-white text-dark mb-3 ">
                    <input type="file" class="form-control py-2 border border-radius-5" id="file" name="file" value="Choose file...">
                </div>
            
            <div class="text-center">
                <button id="form-submit" type="submit" class="btn serial-number-btn mb-3 hidden">Submit</button>
                <button id="modal-submit" class="btn serial-number-btn mb-3">Submit</button>
            </div>
        </form>
    </div>
    <div class="modal  text-black" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">Are you sure you want to upload this file?</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0">
                <p id="modal-file-name"></p>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn text-danger btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="button" id="modal-upload" class="btn btn-outline-success text-success">Upload</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/modal.js') }}"></script>

@endsection