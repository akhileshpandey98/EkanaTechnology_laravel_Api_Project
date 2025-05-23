<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekana Technologies</title>
    @include('layout.CDN')
    <style>
        .profile-section {
            display: flex;
            align-content: center;
            justify-content: center;
            height: 100vh auto;
            width: 100vw;
            /* padding-top: 50px;
            padding-bottom: 50px; */
            padding: 50px;
        }
    </style>
</head>

<body>
    <!--The Start of Profile -->
    <section class="profile-section bg-info">
        <div class="container bg-white py-3 pb-3shadow">
            <p class="text-center fs-4">Ekana Technology Private Limited Lucknow</p>
            @if (session('success'))
                <div class="alert alert-success" id="flash-message">
                    {{ session('success') }}
                </div>
                <script>
                    // Use JavaScript to hide the message after 2 seconds
                    setTimeout(function() {
                        document.getElementById('flash-message').style.display = 'none';
                    }, 2000); // 2000ms = 2 seconds
                </script>
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="images">Image</label>
                            <input type="file" name="profile"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark">
                            @error('profile')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Name</label>
                            <input type="text" name="name"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Company Name</label>
                            <input type="text" name="companyname"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark">
                            @error('companyname')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Phone Number</label>
                            <input type="number" name="phone"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark">
                            @error('phone')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Company Email Id</label>
                            <input type="email" name="email"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark">
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Company Location</label>
                            <textarea name="location" id="" cols="5" rows="5"
                                class="form-control py-3 rounded rounded-3 mb-3 border border-info text-dark"></textarea>
                            @error('location')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark bg-dark text-white">Submit</button>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </form>
        </div>
    </section>

    <!--The End of Profile-->
</body>

</html>
