@extends('layouts.app')

@section('title', 'Employee Time In')

@push('style')
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 30px;
        }
        .table-container {
            width: 80%;
        }
        .employee-photo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
        .search-bar {
            margin-bottom: 20px;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>LIST OF ATTENDEES</h1>
        </div>
        
        <div class="section-body center-content">
            <!-- Search Bar -->
            <input type="text" id="search-bar" class="search-bar form-control mb-4" placeholder="Search Employee.." onkeyup="filterTable()">
            <div class="table-container">
                <table class="table table-bordered" id="employee-table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Time In</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td><img src="{{ asset('storage/' . $item->image) }}" class="employee-photo" alt="Photo" width="100" height="100"></td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->time_in)->format('h:i A') }}</td>
                                <td>{{ $item->date }}</td>
                                <td style="color: {{ $item->status === 'On Time' ? 'green' : 'red' }};">{{ $item->status }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script>
        function filterTable() {
            let searchInput = document.getElementById('search-bar').value.toLowerCase();
            let table = document.getElementById('employee-table');
            let rows = table.getElementsByTagName('tr');

            // Loop through all table rows
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName('td');
                let rowMatches = false;

                // Loop through the columns in each row
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j]) {
                        if (cells[j].textContent.toLowerCase().indexOf(searchInput) > -1) {
                            rowMatches = true;
                            break;
                        }
                    }
                }

                // Show or hide row based on search match
                if (rowMatches) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    </script>
@endpush


