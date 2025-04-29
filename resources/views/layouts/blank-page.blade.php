@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            text-align: center;
        }
        .table-container {
            width: 80%; /* Adjust the width as needed */
        }
    </style>
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Attendance Table</h1>
        </div>

        <div class="section-body center-content">
            <div class="table-container">
                <h2 class="section-title">Attendance Records</h2>
                <p class="section-lead">
                    This page is an example of an attendance table.
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Time</th>
                                <th>Early/Late</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lewis Hamilton</td>
                                <td>Engineering</td>
                                <td>09:00 AM</td>
                                <td>On Time</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Max Verstappen</td>
                                <td>Marketing</td>
                                <td>09:15 AM</td>
                                <td>Late</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <!-- Page Specific JS File -->
@endpush

