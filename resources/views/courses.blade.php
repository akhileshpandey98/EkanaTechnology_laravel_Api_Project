@extends('layout.mainpages')
@section('main-contant')
    <!--Our Populor Course Section Start -->
    <section class="course-section pb-2 pt-4">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center pb-3"  >
                <h2><b class="h2">Populor Courses</b></h2>
               <div class="line"></div>
            </div>
            <div class="row"  data-aos="fade-up-right" data-aos-duration="5000">
               
                <!--The Course Image Start-->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3" >
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/pythonc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{ url('/python') }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Python</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/javac.jpg') }}" alt="" class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{url('/java')}}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Java</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/wordpressc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                {{-- <a href="{{ url('/wordpressdetails') }}">View</a> --}}
                                <a href="{{url('/wordpress')}}">View</a>

                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Wordpress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/andaroidc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{ url('/android') }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Android</p>
                        </div>
                    </div>
                </div>
                <!--The Second col-->

                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/clanguagec.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{url('/clanguage')}}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">C language</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/csharphc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">C#</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/reactnativec.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">React Native</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/bootstrapc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{url('/bootstrap')}}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Bootstrap</p>
                        </div>
                    </div>
                </div>
                <!--The third col-->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/phpc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{ url('/php') }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Php</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/netc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{ url('/netdetails') }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">ASP.Net</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/mernc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="{{ url('/merndetails') }}">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Mern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/jquery.png') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">jquery</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/nodejsc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Node Js</p>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-course-hover">
                            <img src="{{ asset('ekimage/image/flutterc.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="card-back-hover">
                                <i class="bi bi-search"></i>
                                <a href="">View</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:rgba(0,0,0,0.7);">Flutter</p>
                        </div>
                    </div>
                </div>
                <!--The Course Image ends-->
            </div>
        </div>
    </section>
    <!--Our Populor Course Section Ends -->
@endsection
