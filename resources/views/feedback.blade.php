@extends('layout.mainpages')
@section('main-contant')
    <style>
        .place {
            height: 3rem;
            width: 100%;
            border: 2px solid #767676;
            padding-left: 1rem;
            background: white;
            border-radius: 5px;

        }

        .place1 {
            height: 10rem;
            width: 100%;
            border: 2px solid #767676;
            padding-left: 1rem;
            background: white;
            border-radius: 5px;

        }

        #btnContactUs {
            height: 3.12rem;
            width: 40%;
            background-color: #da3023;
            color: white;
            border: none;
            border-radius: 3px;
            margin-top: 0.7rem;
        }
    </style>
    <section class="content-section pt-5" style="background-color: white;">
        <div class="col-lg-12 col-md-12 col-sm- col-12 text-center">
            <h1 class="text-center"><b>Feedback</b></h1>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12-col-12">
                    @if (session('success'))
                        <script>
                            alert("{{ session('success') }}"); // JavaScript alert
                        </script>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                               Your Name</label>
                            <input type="text" class="place" id="name" placeholder="Enter your name.."
                                name="name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Your Image</label>
                            <input type="file" class="place" id="name" placeholder=""
                                name="file" />
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                You're from</label>
                            <input type="text" class="place" id="name" placeholder="Enter your college/institute name"
                                name="college" />
                            @error('college')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Your Feedback</label>
                            <textarea name="feedback" id="message" class="place1" rows="9" cols="25"
                                placeholder="Your feedback!" name="feedback"></textarea>
                            @error('feedback')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Feedback</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12-col-12 contect-img">
                    <img src="{{ asset('ekimage/image/Life time support copy (1).jpg ') }}" alt=""
                        class="img-fluid h-100 w-100">
                </div>
            </div>
        </div>
        
    </section>
@endsection
