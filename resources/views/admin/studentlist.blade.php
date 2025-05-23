@extends('admin.layout.app')
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <form action="{{url('/search_register_student')}}" method="get">
                            <div class="input-group">
                                <input type="text" placeholder="Search name..." class="form-control py-2" name="search" value={{@$search}}>
                                <div class="input-group-append">
                                    <button class="btn btn-secondary text-white" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-12"></div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        @if (session('success'))
                            <script>
                                alert("{{ session('success') }}")
                            </script>
                        @endif
                        <table class="table table-responsive table-striped table-hover">
                            <thead class="bg-info shadow text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>TrainingName</th>
                                    <th>Technology</th>
                                    <th>CourseName</th>
                                    <th>Year</th>
                                    <th>FatherName</th>
                                    <th>Email</th>
                                    <th>CollegeName</th>
                                    <th>TransactionHistory</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $students)
                                    <tr>
                                        <td>{{ $students->id }}</td>
                                        <td>{{ $students->name }}</td>
                                        <td>{{ $students->phone }}</td>
                                        <td>{{ $students->subject }}</td>
                                        <td>{{ $students->technologies }}</td>
                                        <td>{{ $students->coursename }}</td>
                                        <td>{{ $students->optionsession }}</td>
                                        <td>{{ $students->fathername }}</td>
                                        <td>{{ $students->email }}</td>
                                        <td>{{ $students->college }}</td>
                                        <td>{{ $students->amount }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ url('delstudent/' . $students->id) }}"
                                                    class="btn btn-danger text-white">Delete</a>
                                                <a href="{{url('editstudent/'. $students->id)}}" class="btn btn-success mx-2 text-white">Update</a>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-12"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
