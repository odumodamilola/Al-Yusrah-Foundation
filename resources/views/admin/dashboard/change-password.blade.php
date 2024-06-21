@extends('admin.layouts.app')

@section('content')
<!-- In your layout or view -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Change Password') }}</div>

                    <div class="card-body">

                        <!-- Old Password -->
                        <form method="POST" action="{{ route('profile.password.update') }}" id="changePasswordForm">
                            @csrf
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPassword" name="old_password">
                                @error('old_password')
                                    <div class="invalid-feedback alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- New Password -->
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="newPassword" name="password">
                                @error('password')
                                    <div class="invalid-feedback alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmPassword" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="changePasswordBtn">Change Password</button>
                            </div>
                        </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Use SweetAlert for confirmation after form validation
        document.getElementById('changePasswordBtn').addEventListener('click', function () {
            // Display validation errors before showing the SweetAlert popup
            if (!document.getElementById('changePasswordForm').checkValidity()) {
                document.getElementById('changePasswordForm').reportValidity();
                return;
            }

            Swal.fire({
                title: 'Are you sure?',
                text: "This action will change your password. Do you want to proceed?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    document.getElementById('changePasswordForm').submit();
                }
            });
        });
    </script>




@endsection
