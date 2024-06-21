@extends('admin.layouts.app')
@section('content')
    <div id="loader" class="loader-container">
        <div class="loader"></div>
    </div>
    <style>
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 9999;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -25px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* In your CSS file or style block */
        .uploaded-image {
            width: 150px;
            /* Set your preferred width */
            height: 150px;
            /* Set your preferred height */
            object-fit: cover;
            /* Preserve aspect ratio while covering the specified dimensions */
        }
    </style>
    <script>
        document.getElementById('loader').style.display = 'block';
        document.getElementById('loader').style.display = 'none';
    </script>
    <!-- Loader -->
    <div id="loader" class="loader-container">
        <div class="loader"></div>
    </div>

    <!-- Your existing content -->

    <!-- After the form -->
    @if (session('updateProfileImage'))
        <script>
            document.getElementById('profileImage').src = "{{ asset('storage/' . auth()->user()->profile_image) }}";
            document.getElementById('loader').style.display = 'none';
        </script>
    @endif

    <main class="content">
        <div class="content">





            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <!-- In your Blade view file, e.g., edit.blade.php -->
                                <div class="card-img mx-auto">
                                    <img id="profileImage" src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                                        alt="user image" class="uploaded-image img-fluid rounded-circle"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                </div>



                                <div class="card-body">
                                    <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                    <p>Albrecht.straub@gmail.com</p>

                                </div>
                            </div>



                            <hr class="w-100">


                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">


                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab"
                                        href="{{ route('profile.index') }}" role="tab" aria-controls="profile"
                                        aria-selected="false">Profile</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings"
                                        role="tab" aria-controls="settings" aria-selected="true">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                <div class="tab-pane fade active show" id="settings" role="tabpanel"
                                    aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        <form method="POST" action="{{ route('profile.update') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <!-- Profile Image -->
                                            <div class="form-group row">
                                                <label for="profile_image"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>
                                                <div class="col-md-6">
                                                    <input id="profile_image" type="file" class="form-control"
                                                        name="profile_image" accept="image/*">
                                                    @error('profile_image')
                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- First Name and Last Name -->
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" id="firstName"
                                                            name="firstname"
                                                            value="{{ old('firstname', auth()->user()->firstname) }}">
                                                        @error('firstname')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" id="lastName"
                                                            name="lastname"
                                                            value="{{ old('lastname', auth()->user()->lastname) }}">
                                                        @error('lastname')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email', auth()->user()->email) }}">
                                                @error('email')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            @if (session('passwordUpdateSuccess'))
                                                <div class="alert alert-success">
                                                    {{ session('passwordUpdateSuccess') }}
                                                </div>
                                            @endif

                                            <!-- Password -->
                                            <div class="form-group mb-4">
                                                <label for="newPassword">Enter password</label>
                                                <input type="password" class="form-control" id="newPassword"
                                                    name="password">
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="form-group mb-4">
                                                <label for="conPassword">Confirm password</label>
                                                <input type="password" class="form-control" id="conPassword"
                                                    name="password_confirmation">
                                                <div class="form-group mb-4">
                                                    <a href="{{ route('profile.password') }}" class="btn btn-link">Change
                                                        Password</a>
                                                </div>
                                            </div>






                                            <!-- Submit Button -->
                                            <div class="d-flex justify-content-end mt-5">
                                                <input type="submit" value="Update Profile"
                                                    class="btn btn-primary mb-2 btn-pill">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
    </main>
    <script>
        // Assuming you have an image element with the id 'profileImage'
        function updateProfileImage() {
            document.getElementById('profileImage').src = "{{ asset('storage/' . auth()->user()->profile_image) }}";
        }
    </script>
    <script>
        @if (session('updateProfileImage'))
            updateProfileImage();
        @endif
    </script>
@endsection
