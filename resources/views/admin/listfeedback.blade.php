@extends('admin.layout.app')
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <form action="{{url('/search_name')}}" method="get">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search...." class="py-2 form-control" value="{{@$search}}">
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        @if (session('success'))
                            <script>
                                alert("{{(session('success'))}}");
                            </script>
                        @endif
                        <table class="table table-responsive table-striped table-hover">
                            <thead class="bg-info shadow text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>File</th>
                                    <th>College Name</th>
                                    <th>Feedback Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($showdatafeeds as $feedbackdata)
                                    <tr>
                                        <td>{{ $feedbackdata->id }}</td>
                                        <td>{{ $feedbackdata->name }}</td>
                                        <td>
                                            <img src="{{asset('/storage/'.$feedbackdata->file)}}" alt="" style="height:50px;width:50px;border-radius:50px;">
                                        </td>
                                        <td>{{ $feedbackdata->college }}</td>
                                        <td>{{ $feedbackdata->feedback }}</td>
                                        <td>
                                            <a href="{{ 'delfeedata/' . $feedbackdata->id }}"
                                                class="btn btn-danger text-white">Delete</a>
                                            <a href="" class="btn btn-success text-white">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
