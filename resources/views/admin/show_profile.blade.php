@extends('admin.layout.app')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="container bg-white shadow pb-5">
                <div class="card-img   pt-3 pb-3">
                    @foreach ($profiles as $profile)
                        <img src="{{ asset('/storage/' . $profile->profile) }}" alt=""
                            style="height:200px;width:200px;float:end;" class="img-fluid">
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        @foreach ($profiles as $profile)
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Name</label>
                                        <input class="form-control" name="name" id="exampleTextarea" value="{{ $profile->name }}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Company Name</label>
                                        <input class="form-control" name="name" id="exampleTextarea" value="{{ $profile->companyname }}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Email Id</label>
                                        <input class="form-control" name="email" id="exampleTextarea" value="{{ $profile->email }}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Phone Number</label>
                                        <input class="form-control" name="name" id="exampleTextarea" value="{{ $profile->phone}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Location</label>
                                        <input class="form-control" name="name" id="exampleTextarea" value="{{ $profile->location }}"/>
                                    </div>
                                </div>
                                
                            </div>
                                  <button class="btn btn-success text-white">Submit</button>
                            <div class="d-flex float-end mt-3">
                                <button class="btn btn-success text-white">Update</button>
                                <button class="btn btn-danger text-white mx-2">Delete</button>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
