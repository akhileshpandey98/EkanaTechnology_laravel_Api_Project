@extends('layout.mainpages')
@section('main-contant')
    <style>
        /* Custom styles for the cards */
        .card {
            margin: 15px;
            border: none;
        }

        .card img,
        .card iframe {
            border-radius: 8px;
        }
    </style>

    <!--The Dynamic Video Admin -->
    <div class="container mt-5 "  style=" border-radius: 20px;">
        <div class="row p-2 justify-content-center" data-aos="fade-down" data-aos-duration="3000">
            <div class="col-sm-1"></div>
            @foreach ($videos as $video)
                <div class="col-lg-3 col-md-4 col-sm-12 m-2">
                    <div class="card w-100">
                        <video width="100%" height="315" controls poster="{{ asset('ekimage/image1/DBMS1.avif') }}"
                            src="{{ asset('/storage/' . $video->video) }}" class="img-fluid">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $video->title }}</strong></h5>
                            <p class="card-text" style="color:black;font-weight:600;">
                                {{ $video->videodesc }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!--The Dynamic Video Admin-->

    <!--Our Course section button-->
    <div id="content-section">
        <div class="container-fluid   pt-4 mt-2" id="container-bot">
            {{-- <h2 class="text-center" data-aos="fade-down" data-aos-duration="3000" style="color:white;font-weight:bold;"><b class="h2">Popular Courses</b></h2>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border border-white opacity"> --}}
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="ekimage/image/Frame 1000006663.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Our Course Section Button-->
@endsection
