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
                            <p class="text-center text-success display-4">Our Team Form</p>
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
                                    <input type="file" class="custom-file-input" name="file" id="fileInput"
                                        aria-describedby="fileHelp">
                                    <label class="custom-file-label" for="fileInput">Choose a file.</label>
                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter name.">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Developer</label>
                                <input type="text" name="daveloper" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Developer.">

                                @error('daveloper')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Experience</label>
                                <input type="text" name="experience" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Experience.">

                                @error('experience')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Name</label>
                                <input type="text" name="companyname" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Company Name.">

                                @error('companyname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Description</label>
                                <textarea class="form-control" name="description" id="exampleTextarea" rows="4" placeholder="Enter video description."></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary text-white fw-bold">Submit</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
