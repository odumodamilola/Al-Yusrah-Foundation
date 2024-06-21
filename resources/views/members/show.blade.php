<!-- members/show.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <h1>Member Details</h1>

    <table id="member-details-table">
        <tr>
            <th>Name</th>
            <td>{{ $member->name }}</td>
        </tr>
        <tr>
            <th>Business Type</th>
            <td>{{ $member->businesstype }}</td>
        </tr>
        <!-- Add other fields as needed -->
    </table>

    <button onclick="generatePDF()">Generate PDF</button>

    <!-- Include jsPDF and html2canvas libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <script>
        function generatePDF() {
            // Use html2canvas to capture the content of a specific element
            html2canvas(document.getElementById('member-details-table')).then(function(canvas) {
                // Convert the canvas to an image
                var imgData = canvas.toDataURL('image/png');

                // Create a PDF document
                var pdf = new jsPDF();
                pdf.addImage(imgData, 'PNG', 10, 10);

                // Save or open the PDF
                pdf.save('member_details.pdf');
            });
        }
    </script>
@endsection
