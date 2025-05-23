@extends('layout.mainpages')
@section('main-contant')
    <div class="section-python-detailes pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 text-center" data-aos="fade-up" data-aos-dratation="3000">
                    <div class="card1 shadow p-3" style="max-width:25rem;">
                        <img src="{{ asset('ekimage/image/bootstrapc.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12"  data-aos="zoom-in" data-aos-dratation="3000">
                    <h2  data-aos="fade-down" data-aos-dratation="3000"><b class="h2">BootStrap Training</b></h2>
   <div class="line"></div>

                    <p style="text-align: justify;font-size:1.1rem;padding:5px;">
                        Welcome to Ekana Technology’s Bootstrap Training program! If you’re looking to become proficient in
                        building modern and scalable web applications, then you’re in the right place. Our comprehensive
                        course covers the MEAN stack – MongoDB, Express.js, Angular, and Node.js – providing you with the
                        skills and knowledge needed to excel in full-stack web development. <br>
                        In this training, you’ll dive deep into each component of the MEAN stack, learning how to leverage
                        their strengths to create dynamic and feature-rich applications.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-3 mt-3 text-center">
                    <h2  data-aos="fade-up" data-aos-dratation="3000"><b class="h2">Course Description</b></h2>
   <div class="line"></div>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12"  data-aos="zoom-in" data-aos-dratation="3000">
                    <img src="{{ asset('ekimage/image/bootstrapdetails.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    {{-- <p style="text-align: justify;font-size:1.1rem;padding:5px;">
                        Ready to embark on your journey to becoming a proficient full stack developer? Enroll now with
                        Ekana Technology and take the first step towards a rewarding career in web development!
                    </p> --}}
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
            </div>
        </div>
    </div>
    <!--Python Ends-->
@endsection
