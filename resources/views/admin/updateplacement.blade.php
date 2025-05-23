@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <form action="{{route('updateplacement1',$students->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6  bg-white shadow py-4 mb-5">
                            <p class="text-center text-success display-4">Placement Student</p>
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
                                    <input type="file" class="custom-file-input" name="studentpic" id="fileInput"
                                        aria-describedby="fileHelp">
                                    <label class="custom-file-label" for="fileInput">Choose file...</label>
                                    @error('studentpic')
                                        <span class="text-danger">{{($message)}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Name.</label>
                                <input type="text" name="studentname" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name..." value="{{old('studentname',$students->studentname)}}">
                                    @error('studentname')
                                        <span class="text-danger">{{($message)}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Company Name.</label>
                                <input type="text" name="companyname" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter Company Name..." value="{{old('companyname',$students->companyname)}}">
                                    @error('companyname')
                                        <span class="text-danger">{{($message)}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">College Name.</label>
                                <input type="text" name="collegname" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter College Name..." value="{{old('collegname',$students->collegname)}}">
                                    @error('collegname')
                                        <span class="text-danger">{{($message)}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Description</label>
                                <textarea class="form-control" name="description"  id="exampleTextarea" rows="4" placeholder="Enter Message here">{{old('description',$students->description ?? '')}}</textarea>
                                @error('description')
                                        <span class="text-danger">{{($message)}}</span>
                                    @enderror
                            </div>
                            <button type="submit" class="btn btn-primary text-white fw-bold">Update</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
