@extends('admin.layout.app')
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <form action="{{url('/serach_contact')}}" method="get">
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
                        <table class="table table-responsive table-striped table-hover">
                            <thead class="bg-info shadow text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactlist as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <a href="{{ 'delcontact/' . $contact->id }}"
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
