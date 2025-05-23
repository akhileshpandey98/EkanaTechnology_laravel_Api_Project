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

        .register-banner-form-right {
            background-image: url('/ekimage/image/register-banner.png');
            height: 1060px;
            width: 100%;
            object-fit: cover;
            background-size: cover;
            position: relative;
        }

        .register-banner-form-right .register-right-desc {
            height: 1060px;
            width: 100%;
            background-color: rgba(220, 48, 36, 0.75);
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
        <div class="col-lg-12 col-md-12 col-sm- col-12 text-center">
            <h1 class="text-center"><b>Update Now</b></h1>
            <p style="font-size:1.3rem;margin-top:1rem;">A COMPANY WORKING WITH YOUNG ENGINEERS, ENTREPRENEURS AND
                INNOVATIVE TEAM</p>
        </div>
        <div class="container mt-2 pb-5">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12-col-12">
                    @if (session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                    <form action="{{ route('updatestudent1', $students->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Student Name</label>
                            <input type="text" name="name" class=" place" id="name"
                                placeholder="Enter your name." value="{{ old('name',$students->name) }}" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Student Mobile Number</label>
                            <input type="number" name="phone" class=" place" id="name"
                                placeholder="Enter your Phone No." value="{{ old('phone', $students->phone) }}" />
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
                                    {{ old('subject', $students->subject) == 'Summer Training' ? 'selected' : '' }}
                                    {{ old('subject') == 'Summer Training' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Summer Training</option>
                                <option value="Vocational Training"
                                    {{ old('subject', $students->subject) == 'Vocational Training' ? 'selected' : '' }}
                                    {{ old('subject') == 'Vocational Training' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Vocational Training</option>
                                <option value="Winter Training"
                                    {{ old('subject', $students->subject) == 'Winter Training' ? 'selected' : '' }}
                                    {{ old('subject') == 'Winter Training' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Winter Training</option>
                                <option value="Industrial Training"
                                    {{ old('subject', $students->subject) == 'Industrial Training' ? 'selected' : '' }}
                                    {{ old('subject') == 'Industrial Training' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Industrial Training</option>
                                <option value="Apprenticeship Training"
                                    {{ old('subject', $students->subject) == 'Apprenticeship Training' ? 'selected' : '' }}
                                    {{ old('subject') == 'Apprenticeship Training' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Apprenticeship Training
                                </option>
                                <option value="Project Training"
                                    {{ old('subject', $students->subject) == 'Project Training' ? 'selected' : '' }}
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
                                <option value="PHP"
                                    {{ old('technologies', $students->technologies) == 'PHP' ? 'selected' : '' }}
                                    {{ old('technologies') == 'PHP' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">PHP
                                </option>
                                <option value="ASP.Net"
                                    {{ old('technologies', $students->technologies) == 'ASP.Net' ? 'selected' : '' }}
                                    {{ old('technologies') == 'ASP.Net' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    ASP.Net</option>
                                <option value="Python"
                                    {{ old('technologies', $students->technologies) == 'Python' ? 'selected' : '' }}
                                    {{ old('technologies') == 'Python' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Python
                                </option>
                                <option value="JAVA"
                                    {{ old('technologies', $students->technologies) == 'JAVA' ? 'selected' : '' }}
                                    {{ old('technologies') == 'JAVA' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">JAVA
                                </option>
                                <option value="Android"
                                    {{ old('technologies', $students->technologies) == 'Android' ? 'selected' : '' }}
                                    {{ old('technologies') == 'Android' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Android
                                </option>
                                <option value="MERN"
                                    {{ old('technologies', $students->technologies) == 'MERN' ? 'selected' : '' }}
                                    {{ old('technologies') == 'MERN' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">MERN
                                </option>
                                <option value="React.Native"
                                    {{ old('technologies', $students->technologies) == 'React.Native' ? 'selected' : '' }}
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
                                <option value="B.Tech(CS)"
                                {{ old('coursename', $students->coursename) == 'B.Tech(CS)' ? 'selected' : '' }}
                                 {{ old('coursename') == 'B.Tech(CS)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    B.Tech(CS)</option>
                                <option value="B.Tech(IT)"
                                {{ old('coursename', $students->coursename) == 'B.Tech(IT)' ? 'selected' : '' }}
                                 {{ old('coursename') == 'B.Tech(IT)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    B.Tech(IT)</option>
                                <option value="MCA"
                                {{ old('coursename', $students->coursename) == 'MCA' ? 'selected' : '' }}
                                 {{ old('coursename') == 'MCA' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">MCA
                                </option>
                                <option value="BCA"
                                {{ old('coursename', $students->coursename) == 'BCA' ? 'selected' : '' }}
                                 {{ old('coursename') == 'BCA' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">BCA
                                </option>
                                <option value="Diploma(I.T)"
                                {{ old('coursename', $students->coursename) == 'Diploma(I.T)' ? 'selected' : '' }}
                                 {{ old('coursename') == 'Diploma(I.T)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Diploma(I.T)</option>
                                <option value="Diploma(CS)"
                                {{ old('coursename', $students->coursename) == 'Diploma(CS)' ? 'selected' : '' }}
                                 {{ old('coursename') == 'Diploma(CS)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Diploma(CS)</option>
                                <option value="Diploma(PGDCA)"
                                {{ old('coursename', $students->coursename) == 'Diploma(PGDCA)' ? 'selected' : '' }}
                                    {{ old('coursename') == 'Diploma(PGDCA)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Diploma(PGDCA)</option>
                                <option value="Other"
                                {{ old('coursename', $students->coursename) == 'Other' ? 'selected' : '' }}
                                 {{ old('coursename') == 'Other' ? 'selected' : '' }}
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
                                {{ old('optionsession', $students->optionsession) == 'First Year(1st)' ? 'selected' : '' }}
                                    {{ old('optionsession') == 'First Year(1st)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">First Year(1st)</option>
                                <option value="Second Year(2nd)"
                                {{ old('optionsession', $students->optionsession) == 'Second Year(2nd)' ? 'selected' : '' }}
                                    {{ old('optionsession') == 'Second Year(2nd)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Second Year(2nd)</option>
                                <option value="Third Year(3rd)"
                                {{ old('optionsession', $students->optionsession) == 'Third Year(3rd)' ? 'selected' : '' }}
                                    {{ old('optionsession') == 'Third Year(3rd)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Third Year(3rd)</option>
                                <option value="Forth Year(4th)"
                                {{ old('optionsession', $students->optionsession) == 'Forth Year(4th)' ? 'selected' : '' }}
                                    {{ old('optionsession') == 'Forth Year(4th)' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">Forth Year(4th)</option>
                                <option value="Completed"
                                {{ old('optionsession', $students->optionsession) == 'Completed' ? 'selected' : '' }}
                                 {{ old('optionsession') == 'Completed' ? 'selected' : '' }}
                                    style="color:#767676;font-weight:200;font-size:1.2rem;">
                                    Completed</option>
                                <option value="Other"
                                {{ old('optionsession', $students->optionsession) == 'Other' ? 'selected' : '' }}
                                 {{ old('optionsession') == 'Other' ? 'selected' : '' }}
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
                                value="{{ old('fathername', $students->fathername) }}"
                                placeholder="Enter your fathername" />
                            {{-- @error('fathername')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Student Email ID (Optional)</label>
                            <input type="email" name="email" class="place" id="name"
                                value="{{ old('fathername', $students->email) }}" placeholder="Enter Email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Student College Name</label>
                            <input type="text" class="place" name="college" id="name"
                                value="{{ old('fathername', $students->college) }}"
                                placeholder="Enter your college name." />
                            @error('college')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" style="color:#767676;font-weight:200;font-size:1.2rem;">
                                Amount To Pay Now</label>
                            <input type="text" name="amount" class=" place" id="name" placeholder="1000"
                                value="{{ old('fathername', $students->amount) }}" style="background-color: lightgray;" />
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
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Update Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12-col-12">
                    {{-- <img src="{{ asset('ekimage/image/register-banner.png ') }}" alt=""
                    class="img-fluid h-100 w-100"> --}}
                    <div class="register-banner-form-right">
                        <div class="register-right-desc">
                            <p>Hello, Friends</p>
                            <h6>enter your personal details
                                and start journey with us</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--The Registeration From Ends-->
@endsection
