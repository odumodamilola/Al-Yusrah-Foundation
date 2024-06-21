@extends('admin.layouts.app')
@section('content')
    {{-- <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md mt-4">
            <div class="container">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Member</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('members.update', $member->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Add your form fields here -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $member->name) }}">
                            </div>

                            <div class="mb-3">
                                <label for="businesstype" class="form-label">Business Type</label>
                                <input type="text" class="form-control" id="businesstype" name="businesstype"
                                    value="{{ old('businesstype', $member->businesstype) }}">
                            </div>

                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md mt-4">
            <div class="container">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Member</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('members.update', $member->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $member->name) }}">
                            </div>

                            <div class="mb-3">
                                <label for="businesstype" class="form-label">Business Type</label>
                                <input type="text" class="form-control" id="businesstype" name="businesstype" value="{{ old('businesstype', $member->businesstype) }}">
                            </div>

                            <div class="mb-3">
                                <label for="businessyear" class="form-label">Business Year</label>
                                <input type="number" class="form-control" id="businessyear" name="businessyear" value="{{ old('businessyear', $member->businessyear) }}">
                            </div>

                            <div class="mb-3">
                                <label for="goodslist" class="form-label">Goods List</label>
                                <input type="text" class="form-control" id="goodslist" name="goodslist" value="{{ old('goodslist', $member->goodslist) }}">
                            </div>

                            <div class="mb-3">
                                <label for="workingcapital" class="form-label">Working Capital</label>
                                <input type="number" class="form-control" id="workingcapital" name="workingcapital" value="{{ old('workingcapital', $member->workingcapital) }}">
                            </div>

                            <div class="mb-3">
                                <label for="weeklyprofit" class="form-label">Weekly Profit</label>
                                <input type="number" class="form-control" id="weeklyprofit" name="weeklyprofit" value="{{ old('weeklyprofit', $member->weeklyprofit) }}">
                            </div>

                            <div class="mb-3">
                                <label for="monthlyexpense" class="form-label">Monthly Expense</label>
                                <input type="number" class="form-control" id="monthlyexpense" name="monthlyexpense" value="{{ old('monthlyexpense', $member->monthlyexpense) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
