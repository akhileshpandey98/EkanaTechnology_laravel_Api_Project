@extends('admin.layout.app')
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6  bg-white shadow py-4 mb-5">
                            <p class="text-center text-success display-4">Training Video</p>
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
                                    <input type="file" class="custom-file-input" name="video" id="fileInput"
                                        aria-describedby="fileHelp" accept="video/*">
                                    <label class="custom-file-label" for="fileInput">Choose a video file.</label>
                                    @error('video')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Video Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter video title.">

                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Video Description</label>
                                <textarea class="form-control" name="videodesc" id="exampleTextarea" rows="4" placeholder="Enter video description."></textarea>
                                @error('videodesc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary text-white fw-bold">Upload Video</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
