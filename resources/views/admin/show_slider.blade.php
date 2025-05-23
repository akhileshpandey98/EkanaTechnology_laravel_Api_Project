@extends('admin.deshboard')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <table class="table table-responsive table-striped table-hover">
                            <thead class="bg-info shadow text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Image Slider</th>
                                    <th>Action</th>
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
                            @foreach ($shows as $show)
                                <tbody>
                                    <tr>
                                        <td>{{ $show->id }}</td>
                                        <td><img src="{{ asset('/storage/' . $show->add_slider) }}" class="img-fluid"
                                                alt="" style="height:50px;width:200px;"></td>
                                        <td>
                                            <a href="{{('deleteslider/' . $show->id) }}"
                                                class="btn btn-danger text-white">Delete</a>
                                            <a href="{{route('admin.update_slider' , $show->id) }}"
                                                class="btn btn-success text-white">Update</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
