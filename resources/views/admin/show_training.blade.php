@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            {{-- <div class="container">
                <form action="{{ url('/search_student') }}" method="get">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control py-2"
                                    placeholder="Search for Student Name.." aria-label="Search" value="{{ @$search }}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary text-white" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div> --}}
            <div class="container mt-1">
                <div class="row">
                    {{-- <div class="col-lg-1"></div> --}}
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped bg-light table-hover table-sm">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <td>Id</td>
                                        <td>Training Image</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
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
                                @foreach ($trainigs as $trainig)
                                    <tbody>
                                        <tr>
                                            <td>{{ $trainig->id }}</td>
                                            <td><img src="{{ asset('/storage/' . $trainig->traingpic) }}" alt=""
                                                    class="img-fluid" style="height:300px;width:3000px;">
                                            </td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ 'deletetraining/' . $trainig->id }}"
                                                        class="btn btn-danger text-white ">Delete</a>
                                                    <a href="{{'editimage/'. $trainig->id }}" class="btn btn-success text-white mx-2">Update</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    {{-- <div class="col-lg-1"></div> --}}
                </div>
                <!--Show Update Forms Section start-->
                <form action="{{route('updateimage',$trainig->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6  bg-white shadow py-4 mb-5">
                            <p class="text-center text-success display-4">Update Image</p>
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
                                    <input type="file" class="custom-file-input" name="traingpic" id="fileInput"
                                        aria-describedby="fileHelp">
                                    <label class="custom-file-label" for="fileInput">Choose file...</label>
                                    @error('traingpic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary text-white fw-bold">Upload</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
                <!--Show Update forms Section Ends-->
            </div>
        </div>
    </section>
@endsection
