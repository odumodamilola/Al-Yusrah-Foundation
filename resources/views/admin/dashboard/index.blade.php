@extends('admin.layouts.app')
@section('content')
    <main class="content">
        <div class="content">
            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto">
                                    <img id="profileImage" src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                                        alt="user image" class="uploaded-image img-fluid rounded-circle"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                </div>

                                <div class="card-body">
                                    <h4 class="py-2 text-dark">{{ Auth::user()->full_name }}</h4>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>

                            <hr class="w-100">
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="timeline-tab" data-toggle="tab" hidden href="#timeline"
                                        role="tab" aria-controls="timeline" aria-selected="false">Timeline</a>
                                </li>

                                <li class="nav-item text-center">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab"
                                        href="{{ route('profile.index') }}" role="tab" aria-controls="profile"
                                        aria-selected="false">Admin Profile</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings"
                                        role="tab" aria-controls="settings" hidden aria-selected="true">Admin
                                        Profile</a>
                                </li>
                            </ul>

                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                <!-- Other tab content... -->

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="tab-widget mt-5">
                                        <!-- Other profile details... -->
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                    aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        <form>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">First Name</label>
                                                        <p type="text" id="firstName" value="Albrecht">
                                                            {{ Auth::user()->firstname }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Last name</label>
                                                        <p type="text" id="lastName" value="Straub">
                                                            {{ Auth::user()->lastname }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">username</label>
                                                <p type="text" id="userName" value="Straub">
                                                    {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</p>

                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <p type="email" id="email" value="albrecht.straub@gmail.com">
                                                    {{ Auth::user()->email }}</p>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="oldPassword">Password</label>
                                                <p type="password" value="" id="oldPassword">************</p>
                                            </div>


                                            <div class="d-flex justify-content-end mt-5">
                                                <form action="">
                                                    <a type="submit" href="{{ route('profile.edit') }}"
                                                        class="btn btn-primary mb-2 btn-pill"><i class='fas fa-edit'></i>
                                                        Edit
                                                        Profile</a>
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
    </main>
@endsection
