@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 bg-white shadow py-2">
                            <h1 class="text-success fw-bold text-center pb-3">Upload Slider</h1>
                            {{-- <label for="slideruploads">Slider Upload</label> --}}
                            @if (session('success'))
                                <div class="alert alert-success" id="flash-message">
                                    {{ session('success') }}
                                </div>
                                <script>
                                    // Use JavaScript to hide the message after 2 seconds
                                    setTimeout(function() {
                                        document.getElementById('flash-message').style.display = 'none';
                                    }, 2000); // 2000ms = 2 seconds
                                </script>
                            @endif
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="slider_image" id="fileInput"
                                        aria-describedby="fileHelp">
                                    <label class="custom-file-label" for="fileInput">Choose file...</label>
                                </div>
                            </div>
                            @error('slider_image')
                                <div classs="text-warning">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-success text-white mt-3 fw-blod">Upload</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
