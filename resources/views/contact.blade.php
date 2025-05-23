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
            <h1 class="text-center"><b class="h2">Conatct Us</b></h1>
        <div class="line"></div>

        </div>
        <div class="container pt-5 pb-5">
            <div class="row"   data-aos="zoom-in" data-aos-duration="3000">
                <div class="col-lg-6 col-md-6 col-sm-12-col-12">
                    <div class="row"  data-aos="fade-up" data-aos-duration="3000">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <p class="" style="color:#767676;font-size:1.2rem;font-weight:200;"><b>Any Students
                                    free to contact us. We Sloves their issues.</b></p>
                        </div>
                    </div>
                    @if (session('success'))
                        <script>
                            alert("{{ session('success') }}"); // JavaScript alert
                        </script>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Name</label>
                            <input type="text" class="place" id="name" placeholder="Enter your fullname.."
                                name="name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Email Id</label>
                            <input type="email" class="place" id="name" placeholder="Enter your email.."
                                name="email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Phone No.</label>
                            <input type="number" class="place" id="name" placeholder="Enter your contact no."
                                name="phone" />
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Message</label>
                            <textarea name="message" id="message" class="place1" rows="9" cols="25"
                                placeholder="Type your message here!" name="message"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12-col-12 contect-img">
                    <img src="{{ asset('ekimage/image/Life time support copy (1).jpg ') }}" alt=""
                        class="img-fluid h-100 w-100">
                </div>
            </div>
        </div>
        <!-- Address Section Start -->
        <div class="address-section">
            <div class="address-section-bg-color">
                <div class="container">
                    <div class="row"   data-aos="fade-up-right" data-aos-duration="4000">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <div class="card-office-section">
                                <div class="card-icon-rounded-top">
                                    <i class="fa-solid fa-phone fa-spin"></i>
                                </div>
                                <div class="card-contant-top-title text-center" style="position: relative;top:-2rem;">
                                    <p style="color:white;font-size:1.5rem;"><b>Contact Infromation</b></p>
                                    <p>
                                        <li class="mb-1" style="color:white;font-size:1.2rem;list-style:none;">+91
                                            630-651-1436</li>
                                        <li class="mb-1" style="color:white;font-size:1.2rem;list-style:none;">+91
                                            969-692-1427</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <div class="card-office-section">
                                <div class="card-icon-rounded-top">
                                    <i class="fa-solid fa-location-dot fa-spin"></i>
                                </div>
                                <div class="card-contant-top-title text-center" style="position: relative;top:-2rem;">
                                    <p style="color:white;font-size:1.5rem;"><b>Email Address</b></p>
                                    <p style="color:white;font-size:1.2rem;padding:1rem 1rem 0px 1rem;">
                                        info@ekanatechnologies.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <div class="card-office-section">
                                <div class="card-icon-rounded-top">
                                    <i class="fa-solid fa-location-dot fa-spin"></i>
                                </div>
                                <div class="card-contant-top-title text-center" style="position: relative;top:-2rem;">
                                    <p style="color:white;font-size:1.5rem;"><b>Office Address</b></p>
                                    <p style="color:white;font-size:1.2rem;padding:1rem 1rem 0px 1rem;">
                                        Ekana Technologies Pvt Ltd 16/286, Sector-17, Mandi
                                        Road Munsipuliya, Indra nagar, Lucknow, 226016
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="googlemap-section"   data-aos="zoom-in" data-aos-duration="3000">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.4517394576733!2d80.99156357450404!3d26.889154861104313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399959c6fc66a017%3A0xc4fe6d0216cd445d!2sEkana%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1728996800323!5m2!1sen!2sin"
                style="border:0;height:450px;width:100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
@endsection
