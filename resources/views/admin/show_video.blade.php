@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container mt-1">
                <div class="row">
                    {{-- <div class="col-lg-1"></div> --}}
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped bg-light table-hover table-sm">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <td>Id</td>
                                        <td>Video</td>
                                        <td>Video Title</td>
                                        <td>Video Description</td>
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
                                @foreach ($videos as $videoes)
                                    <tbody>
                                        <tr>
                                            <td>{{ $videoes->id}}</td>
                                            <td> {{-- <img src="{{ asset('/storage/' .$videoes->video) }}" alt=""
                                                    class="img-fluid" style="height:300px;width:300px;"> --}}
                                                {{-- <source src="{{ asset('/storage/' .$videoes->video) }}" class="img-fluid" poster="{{asset('ekimage/image1/DBMS1.avif')}}"> --}}
                                                {{-- <video src="{{ asset('/storage/' .$videoes->video) }}" class="img-fluid" style="height:300px;width:300px;" autoplay="autoplay" poster="{{asset('ekimage/image/3.jpg')}}"></video> --}}
                                                <video width="300px" height="300px" controls
                                                    poster="{{ asset('ekimage/image1/DBMS1.avif') }}"
                                                    src="{{ asset('/storage/' . $videoes->video) }}" class="img-fluid">

                                                </video>
                                            </td>
                                            <td>{{ $videoes->title }}</td>
                                            <td>{{ $videoes->videodesc }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ 'deletevideo/' . $videoes->id }}"
                                                        class="btn btn-danger text-white ">Delete</a>
                                                    <a href="{{route('admin.update_video',$videoes->id)}}" class="btn btn-success text-white mx-2">Update</a>
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
            </div>
        </div>
    </section>
    
@endsection
