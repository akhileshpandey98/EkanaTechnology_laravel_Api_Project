@extends('layout.mainpages')
@section('main-contant')
    <style>
        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        }

        .card-body {
            text-align: center;
        }
    </style>
    <div class="placement-hero-banner">
        <div class="placement-hero-desc">
            <div class="container">
                <div class="row" data-aos="fade-down" data-aos-duration="3000">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <div class="placement-top-banner-title">
                            <p class="display-1 fw-bold ">Our Top Placements</p>
                            {{-- <div class="line bg-light"></div> --}}

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12" data-aos="fade-right" data-aos-duration="3000">
                        {{-- <div class="placement-desc">
                            <p style="color:white;font-size:1rem;text-align:justify;">
                                Our internship program at Ekana Technology has provided hands-on experience to students
                                from various fields, helping them bridge the gap between academic learning and industry
                                demands.
                            </p>
                        </div> --}}
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Hero top section End -->

    <!-- our plcaement Page top section End -->
    <div id="container-placement">
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <h2><b class="h2">Our Top Placement</b></h2>
                    <div class="line"></div>
                </div>
            </div>
            {{-- row1 --}}
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-12 col-md-6 col-lg-3 m-3">
                    <div class="card2"> <img src="ekimage/image/khurshedalam.jpg" alt="">
                        <div class="child-div" style="border-radius: 10px;">
                            <p>Khurshed Alam <br>Govt. Polytechnic Aadampur Gonda</p>
                            <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                            <h7>Web Developer</h7>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                    <div class="card2"> <img src="ekimage/image/seemapatel.jpg" alt="">
                        <div class="child-div" style="border-radius: 10px;">
                            <p>Seema Patel <br>Govt. Girls Polytechnic Gorakhpur</p>
                            <h6>Quess Crop Pvt. Ltd. Bangalore</h6>
                            <h7>Web Developer</h7>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                    <div class="card2"> <img src="ekimage/image/akhilesh.jpg" alt="" class="img-fluid">
                        <div class="child-div" style="border-radius: 10px;">
                            <p>Akhilesh Panday <br>Govt. Polytechnic Aadampur Gonda</p>
                            <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                            <h7>Web Developer</h7>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- row2 --}}
        <div class="container mt-1 mb-4">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                    <div class="card2"> <img src="ekimage/image/piyushpanday.jpg" alt="">
                        <div class="child-div" style="border-radius: 10px;">
                            <p>Piyush Panday <br>Mahamaya Polytechnic of I.T, Chandauli</p>
                            <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                            <h7>Data Analytics</i></h7>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                    <div class="card2">
                        <img src="ekimage/image/shivam.jpg" alt="">
                        <div class="child-div" style="border-radius: 10px;">
                            <p>Shivam Singh <br>Govt. Polytechnic Kanpur</p>
                            <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                            <h7>Wordpress Developer</h7>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2">
                    <img src="ekimage/image/suchita.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;">
                        <p>Suchita <br>Govt. Polytechnic Kanpur</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                        <h7>Web Developer</h7>

                    </div>
                </div>
            </div>
        </div>

        {{-- row3 --}}
        {{-- <div class="container mb-4">
        <div class="row justify-content-center"  data-aos="fade-up" data-aos-duration="3000">
            <div class="col-sm-12 col-md-6 col-lg-3 m-3">
                <div class="card2"> <img src="ekimage/image/rahul.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;">
                        <p>Rahul Singh <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                        <h7>Web Developer</h7>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/shakir.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;">
                        <p>Shakir <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                        <h7>Web Developer</h7>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/madhu.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;" >
                        <p>Madhu Verma <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                        <h7>Graphics Designer</h7>

                    </div>
                </div>
            </div>
        </div>
     </div> --}}


        {{-- row4 --}}
        {{-- <div class="container mt-1 mb-4">
        <div class="row justify-content-center"  data-aos="fade-up" data-aos-duration="3000">
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2">
                    <img src="ekimage/image/khurshedalam.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;">
                        <p>Khurshed Alam <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/khurshedalam.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;">
                        <p>Khurshed Alam <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3  m-3">
                <div class="card2"> <img src="ekimage/image/khurshedalam.jpg" alt="">
                    <div class="child-div"  style="border-radius: 10px;" >
                        <p>Khurshed Alam <br>Govt. Polytechnic Aadampur Gonda</p>
                        <h6>Ekana Technology Pvt. Ltd. Lucknow</h6>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ url('#') }}" class="btn btn-primary bsb-btn-2xl d-flex align-items-center gap-2 px-4 mb-4">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </a>
        </div>


    </div>
    {{-- ===========end startic placement page=========== --}}


    <!--Dynamic Data placement Records start-->
    {{-- <div class="container pt-4">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="3000">
                @foreach ($student as $students)
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <div class="card2 mb-3" style="border-radius: 15px; box-shadow: 2px 1px 6px 0px red;">
                            <img src="{{ asset('/storage/' . $students->studentpic) }}" alt="" 
                                class="img-fluid img-responsive rounded-4">
                            <div class="child-div" style="border-radius: 15px;">
                                <p>{{ $students->studentname }}
                                    <br>{{ $students->collegname }}
                                </p>
                                <h6>{{ $students->companyname }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
    <!--Dynamic Data Placement Records ends-->
    {{-- </div> --}}

    <!-- our placement Page Section end -->

    <!--The Our Placement Requirement partner-->
    {{-- <div class="recruiter-section">
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <h2><b>Our Recruiters Partner </b></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mt-4">
                    <div class="card-1" style="background: #DC3024;height:5rem;width:100%;">

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mt-3">
                    <div class="card-1" style="background: #DC3024;height:6.5rem;width:100%;">

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mt-4">
                    <div class="card-1" style="background: #DC3024;height:5rem;width:100%;">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--The Our Placement Requirement Partner-->
@endsection
