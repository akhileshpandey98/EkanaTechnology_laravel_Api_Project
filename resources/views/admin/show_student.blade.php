@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <form action="{{ url('/search_student') }}" method="get">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control py-2"
                                    placeholder="Search for Student Name.." aria-label="Search" value="{{@$search}}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary text-white" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="container mt-1">
                <div class="row">
                    {{-- <div class="col-lg-1"></div> --}}
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped bg-light table-hover table-sm">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <td>Id</td>
                                        <td>Student Image</td>
                                        <td>Student Name</td>
                                        <td>Company Name</td>
                                        <td>College Name</td>
                                        <td>Description</td>
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
                                @foreach ($student as $students)
                                    <tbody>
                                        <tr>
                                            <td>{{ $students->id }}</td>
                                            <td><img src="{{ asset('/storage/' . $students->studentpic) }}" alt=""
                                                    class="img-fluid" style="height:50px;width:50px;border-radius:50%;">
                                            </td>
                                            <td>{{ $students->studentname }}</td>
                                            <td>{{ $students->companyname }}</td>
                                            <td>{{ $students->collegname }}</td>
                                            <td>{{ $students->description }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ 'deletestudent/' . $students->id }}"
                                                        class="btn btn-danger text-white ">Delete</a>
                                                    <a href="{{'updateformshow/'. $students->id}}" class="btn btn-success text-white mx-2">Update</a>
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
