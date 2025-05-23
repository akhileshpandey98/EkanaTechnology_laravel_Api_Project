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
/* register banner */
    .register-banner-form-right {
        background-image: url('ekimage/image1/hello_friends.jpg');
        min-height: 1060px;
        width: 100%;
        object-fit: cover;
        background-size: cover;
        position: relative;
     
    }

    .register-banner-form-right .register-right-desc {
        height: 1060px;
        width: 100%;
    }

    .register-right-desc p {
        position: relative;
        top: 10rem;
        text-align: center;
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
    }

    .register-right-desc h6 {
        position: relative;
        top: 10.5rem;
        text-align: center;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }
</style>

<!--The Register Form Section Start-->
<section class="content-section pt-5" style="background-color: white;">
    <div class="col-lg-12 col-md-12 col-sm- col-12 text-center" >
        <h1 class="text-center"><b class="h2">Register Now</b></h1>
        <div class="line"></div>
        <p style="font-size:1.3rem;margin-top:1rem;">A COMPANY WORKING WITH YOUNG ENGINEERS, ENTREPRENEURS AND
            INNOVATIVE TEAM</p>
    </div>
    <div class="container mt-2 pb-5">
        <div class="row"  data-aos="fade-right" data-aos-duration="3000">
            <div class="col-lg-7 col-md-7 col-sm-12-col-12">
                @if (session('success'))
                    <script>
                        alert("{{session('success')}}");
                    </script>
                @endif 
                <form action="{{('register') }}" method="POST">
                    @csrf
                    
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Student Name</label>
                        <input type="text" name="name" class=" place" id="name"
                            placeholder="Enter your name."  />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Student Mobile Number</label>
                        <input type="number" name="phone" class=" place" id="name"
                            placeholder="Enter your Phone No." />
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Choose Training</label>
                        <select id="subject" name="subject" class="place">
                            <option value="na" selected=""
                                style="color:#767676;font-weight:200;font-size:1.2rem;">---Choose Training---
                            </option>
                            <option value="Summer Training"
                                {{ old('subject') == 'Summer Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Summer Training</option>
                            <option value="Vocational Training"
                                {{ old('subject') == 'Vocational Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Vocational Training</option>
                            <option value="Winter Training"
                                {{ old('subject') == 'Winter Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Winter Training</option>
                            <option value="Industrial Training"
                                {{ old('subject') == 'Industrial Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Industrial Training</option>
                            <option value="Apprenticeship Training"
                                {{ old('subject') == 'Apprenticeship Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Apprenticeship Training
                            </option>
                            <option value="Project Training"
                                {{ old('subject') == 'Project Training' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Project Training</option>

                        </select>
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="subject" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Choose Technology</label>
                        <select id="subject" name="technologies" class="place">
                            <option value="na" selected=""
                                style="color:#767676;font-weight:200;font-size:1.2rem;">---Choose Technology---
                            </option>
                            <option value="PHP" {{ old('technologies') == 'PHP' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">PHP
                            </option>
                            <option value="ASP.Net" {{ old('technologies') == 'ASP.Net' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                ASP.Net</option>
                            <option value="Python" {{ old('technologies') == 'Python' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Python
                            </option>
                            <option value="JAVA" {{ old('technologies') == 'JAVA' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">JAVA
                            </option>
                            <option value="Android" {{ old('technologies') == 'Android' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Android
                            </option>
                            <option value="MERN" {{ old('technologies') == 'MERN' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">MERN
                            </option>
                            <option value="React.Native"
                                {{ old('technologies') == 'React.Native' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                React.Native</option>
                        </select>
                        @error('technologies')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="subject" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Select Your Education</label>
                        <select id="subject" name="coursename" class="place" required="required">
                            <option value="na" selected=""
                                style="color:#767676;font-weight:200;font-size:1.2rem;">---Select Your Education---
                            </option>
                            <option value="B.Tech(CS)" {{ old('coursename') == 'B.Tech(CS)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                B.Tech(CS)</option>
                            <option value="B.Tech(IT)" {{ old('coursename') == 'B.Tech(IT)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                B.Tech(IT)</option>
                            <option value="MCA" {{ old('coursename') == 'MCA' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">MCA
                            </option>
                            <option value="BCA" {{ old('coursename') == 'BCA' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">BCA
                            </option>
                            <option value="Diploma(I.T)"
                                {{ old('coursename') == 'Diploma(I.T)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Diploma(I.T)</option>
                            <option value="Diploma(CS)" {{ old('coursename') == 'Diploma(CS)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Diploma(CS)</option>
                            <option value="Diploma(PGDCA)"
                                {{ old('coursename') == 'Diploma(PGDCA)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Diploma(PGDCA)</option>
                            <option value="Other" {{ old('coursename') == 'Other' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Other
                            </option>
                        </select>
                        @error('coursename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="subject" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Select Year</label>
                        <select id="subject" name="optionsession" class="place" required="required">
                            <option value="na" selected=""
                                style="color:#767676;font-weight:200;font-size:1.2rem;">---Select Year---</option>
                            <option value="First Year(1st)"
                                {{ old('optionsession') == 'First Year(1st)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">First Year(1st)</option>
                            <option value="Second Year(2nd)"
                                {{ old('optionsession') == 'Second Year(2nd)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Second Year(2nd)</option>
                            <option value="Third Year(3rd)"
                                {{ old('optionsession') == 'Third Year(3rd)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Third Year(3rd)</option>
                            <option value="Forth Year(4th)"
                                {{ old('optionsession') == 'Forth Year(4th)' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Forth Year(4th)</option>
                            <option value="Completed" {{ old('optionsession') == 'Completed' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Completed</option>
                            <option value="Other" {{ old('optionsession') == 'Other' ? 'selected' : '' }}
                                style="color:#767676;font-weight:200;font-size:1.2rem;">Other
                            </option>
                        </select>
                        @error('optionsession')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Student Father's Name</label>
                        <input type="text" class="place" name="fathername" id="name"
                            placeholder="Enter your fathername" />
                        {{-- @error('fathername')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                             Email ID</label>
                        <input type="email" name="email" class="place" id="name"
                            placeholder="Enter Email" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Student College Name</label>
                        <input type="text" class="place" name="college" id="name"
                            placeholder="Enter your college name." />
                        @error('college')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Amount To Pay Now</label>
                        <input type="text" name="amount" class=" place" id="name" 
                             />
                        @error('amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="subject" style="color:#767676;font-weight:200;font-size:1.2rem;">
                            Payment Type</label>
                        <select id="subject" name="subject" class="place mb-4" required="required">
                            <option value="na" selected=""
                                style="color:#767676;font-weight:200;font-size:1.2rem;">----Payment Type----</option>
                            <option value="Online" style="color:#767676;font-weight:200;font-size:1.2rem;">Online</option>
                            <option value="Offline" style="color:#767676;font-weight:200;font-size:1.2rem;">Offline</option>
                            
                        </select>
                    </div> --}}

                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary pull-right " id="btnContactUs">
                            Register Now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12-col-12" >
                {{-- <img src="{{ asset('ekimage/image/register-banner.png ') }}" alt=""
                    class="img-fluid h-100 w-100"> --}}
                <div class="register-banner-form-right"  data-aos="fade-down" data-aos-duration="3000">
                    <div class="register-right-desc">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--The Registeration From Ends-->


@endsection
    