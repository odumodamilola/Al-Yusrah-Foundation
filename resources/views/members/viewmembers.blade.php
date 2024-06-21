{{-- 
@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="col-md mt-4">
            <div class="container">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registered Members</h5>
                    </div>
                    <div class="table-responsive w-100">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th class="d-none d-xl-table-cell">Name</th>
                                    <th class="d-none d-xl-table-cell">Date Registered</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Business Type</th>
                                    <th class="d-none d-md-table-cell">Years Spent in business</th>
                                    <th class="d-none d-md-table-cell">List of Goods sold</th>
                                    <th class="d-none d-md-table-cell">Working capital needed</th>
                                    <th class="d-none d-md-table-cell">Members weekly profit</th>
                                    <th class="d-none d-md-table-cell">Monthly Expense</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $member->name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $member->created_at->format('d/m/Y') }}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                        <td class="d-none d-md-table-cell">{{ $member->businesstype }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->businessyear }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->goodslist }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->workingcapital }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->weeklyprofit }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->monthlyexpense }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
{{-- @extends('admin.layouts.app')

@section('content') --}}
{{-- <style>
    #mytable{
        margin-bottom:220px ;
        margin-top:20px ;
    }
</style>
    <div class="row" id="mytable">
        <div class="col-md mt-4">
            <div class="container">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registered Members</h5>
                    </div>
                    <div class="table-responsive w-100">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th class="d-none d-xl-table-cell">Name</th>
                                    <th class="d-none d-xl-table-cell">Date Registered</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Business Type</th>
                                    <th class="d-none d-md-table-cell">Years Spent in business</th>
                                    <th class="d-none d-md-table-cell">List of Goods sold</th>
                                    <th class="d-none d-md-table-cell">Working capital needed</th>
                                    <th class="d-none d-md-table-cell">Members weekly profit</th>
                                    <th class="d-none d-md-table-cell">Monthly Expense</th>
                                    <th class="text-center">Update</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $member->name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $member->created_at->format('d/m/Y') }}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                        <td class="d-none d-md-table-cell">{{ $member->businesstype }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->businessyear }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->goodslist }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->workingcapital }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->weeklyprofit }}</td>
                                        <td class="d-none d-md-table-cell">{{ $member->monthlyexpense }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('members.edit', $member->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('members.destroy', $member->id) }}" method="POST"
                                                id="deleteForm{{ $member->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger delete-button"
                                                    data-member-id="{{ $member->id }}">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add a click event listener to all delete buttons
            document.querySelectorAll('.delete-button').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Get the member ID from the data attribute
                    var memberId = this.getAttribute('data-member-id');

                    // Display a SweetAlert confirmation dialog
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Delete'
                    }).then((result) => {
                        // If the user clicks "Yes", submit the delete form
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm' + memberId).submit();
                        }
                    });
                });
            });
        });
    </script> --}}

{{-- @extends('admin.layouts.app')

@section('content')
<style>
    .alusrah{
        font-size: 25px;
    }
</style>
    <div class="row">
        <div class="col-md mt-4">
            <div class="container">
                @foreach ($members as $member)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h1 class="text-center text-dark alusrah">Al Yusrah Foundation Members</h1>
                            <hr>
                            <h5 class="card-title">{{ $member->name }}</h5>
                            <p class="card-text"><strong>Business Type:</strong> {{ $member->businesstype }}</p>
                            <p class="card-text"><strong>Business Year:</strong> {{ $member->businessyear }}</p>
                            <p class="card-text"><strong>Goods List:</strong> {{ $member->goodslist }}</p>
                            <p class="card-text"><strong>Working Capital:</strong> {{ $member->workingcapital }}</p>
                            <p class="card-text"><strong>Weekly Profit:</strong> {{ $member->weeklyprofit }}</p>
                            <p class="card-text"><strong>Monthly Expense:</strong> {{ $member->monthlyexpense }}</p>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-danger delete-button" data-member-id="{{ $member->id }}">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                                <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="d-none"
                                    id="deleteForm{{ $member->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-button').forEach(function(button) {
                button.addEventListener('click', function() {
                    var memberId = this.getAttribute('data-member-id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm' + memberId).submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection --}}

{{-- @endsection --}}


<!-- members/show.blade.php -->

@extends('admin.layouts.app')

@section('content')
<style>
    .alusrah {
        font-size: 25px;
    }
</style>
<div class="row">
    <div class="col-md mt-4">
        <div class="container">
           
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="text-center text-dark alusrah">Al Yusrah Foundation Members</h1>
                    <hr>
                    <!-- ... (existing member details) ... -->
                    <div class="row">
        <div class="col-md mt-4">
            <div class="container">
                @foreach ($members as $member)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h1 class="text-center text-dark alusrah">Al Yusrah Foundation Members</h1>
                            <hr>
                            <h5 class="card-title">{{ $member->name }}</h5>
                            <p class="card-text"><strong>Business Type:</strong> {{ $member->businesstype }}</p>
                            <p class="card-text"><strong>Business Year:</strong> {{ $member->businessyear }}</p>
                            <p class="card-text"><strong>Goods List:</strong> {{ $member->goodslist }}</p>
                            <p class="card-text"><strong>Working Capital:</strong> {{ $member->workingcapital }}</p>
                            <p class="card-text"><strong>Weekly Profit:</strong> {{ $member->weeklyprofit }}</p>
                            <p class="card-text"><strong>Monthly Expense:</strong> {{ $member->monthlyexpense }}</p>

                            <div class="d-flex">
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-danger delete-button" data-member-id="{{ $member->id }}">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                                <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="d-none"
                                    id="deleteForm{{ $member->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button class="btn btn-secondary text-end" onclick="generatePDF('{{ $member->name }}')">
                            <i class="fas fa-file-pdf"></i> Generate PDF
                        </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

                    {{-- <div class="d-flex justify-content-between align-items-center">
                        <!-- Existing buttons -->
                        <div>
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <button class="btn btn-danger delete-button" data-member-id="{{ $member->id }}">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST"
                                class="d-none" id="deleteForm{{ $member->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>

                        <!-- Add PDF button here -->
                        <button class="btn btn-secondary" onclick="generatePDF('{{ $member->name }}')">
                            <i class="fas fa-file-pdf"></i> Generate PDF
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<script>
    function generatePDF(memberName) {
        html2canvas(document.body).then(function (canvas) {
            var imgData = canvas.toDataURL('image/png');
            var pdf = new jsPDF();
            pdf.addImage(imgData, 'PNG', 0, 0, pdf.internal.pageSize.getWidth(), pdf.internal.pageSize.getHeight());
            pdf.save('member_details_' + memberName + '.pdf');
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-button').forEach(function (button) {
            button.addEventListener('click', function () {
                var memberId = this.getAttribute('data-member-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm' + memberId).submit();
                    }
                });
            });
        });
    });
</script>
@endsection

