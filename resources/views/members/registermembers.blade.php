@extends('admin.layouts.app')
@section('content')
    <style>
        .applicationinfomain {
            font-size: 22px;
            font-family: sans-serif;

        }

        .applicationinfoheader {
            font-size: 20px;
            font-family: sans-serif;
            font-weight: 40;
            border-radius: 2px;
            font-family: sans-serif;
        }
    </style>
    <section>


        <h1 class="text-center py-4 text-light bg-primary applicationinfomain">
            <b>AL-YUSRAH FOUNDATION MEMBERSHIP
                REGISTRATION</b>
        </h1>
        <div class="container text-center">
            {{-- @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('success') }}
                </div>
            @endif
            <!-- success.blade.php --> --}}

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i>
                    <strong class="me-3">Success</strong>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
        <section class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5">
                    <form action="{{ route('admin.storemembers') }}" method="POST" class="card my-4 px-4">
                        @csrf
                        <h1 class="text-center bg-danger text-light  py-2 applicationinfoheader">
                            <b>APPLICATION INFORMATION FORM</b>
                        </h1>
                        <div class="container my-3">
                            <div class="mb-4">
                                <label for=""> Full Name</label>
                                <div>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        autocomplete="name" autofocus class="form-control">
                                    <div>
                                        @error('name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">Business Type<span><i class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="businesstype" name="businesstype"
                                        value="{{ old('businesstype') }}" autocomplete="businesstype" autofocus
                                        class="form-control">
                                    <div>
                                        @error('businesstype')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">Years Spent in Business<span><i
                                            class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="businessyear" name="businessyear"
                                        value="{{ old('businessyear') }}" autocomplete="businessyear" autofocus
                                        class="form-control">
                                    <div>
                                        @error('businessyear')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">List of goods sold<span><i class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="goodslist" name="goodslist" value="{{ old('goodslist') }}"
                                        autocomplete="goodslist" autofocus class="form-control">
                                    <div>
                                        @error('goodslist')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">How much working capital do you need?<span><i
                                            class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="workingcapital" name="workingcapital"
                                        value="{{ old('workingcapital') }}" autocomplete="workingcapital" autofocus
                                        class="form-control">
                                    <div>
                                        @error('workingcapital')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">What is your weekly profit?<span><i
                                            class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="weeklyprofit" name="weeklyprofit"
                                        value="{{ old('weeklyprofit') }}" autocomplete="weeklyprofit" autofocus
                                        class="form-control">
                                    <div>
                                        @error('weeklyprofit')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="">What is your monthly expenses?<span><i
                                            class="fas fa-goods"></i></span></label>
                                <div>
                                    <input type="text" id="monthlyexpense" name="monthlyexpense"
                                        value="{{ old('monthlyexpense') }}" autocomplete="monthlyexpense" autofocus
                                        class="form-control">
                                    <div>
                                        @error('monthlyexpense')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Register">

                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>

        </section>
    </section>
@endsection
