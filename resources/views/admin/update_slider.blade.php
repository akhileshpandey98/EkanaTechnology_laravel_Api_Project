@extends('admin.layout.app')
<!-- Main content -->
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <form action="{{route('updateslider', $uslider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="_method" value="put/"> --}}
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 bg-white shadow py-2">
                            <h1 class="text-success fw-bold text-center pb-3">Update Slider</h1>
                            {{-- <label for="slideruploads">Slider Upload</label> --}}
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <input type="file" class="form-control" name="slider_image" id="slideruploads">
                            @error('slider_image')
                                <div classs="text-warning">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-success text-white mt-3 fw-blod">Upload</button>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{asset('/storage/'.$uslider->add_slider)}}" alt="" style="height:50px;width:200px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
