@extends('layouts.app')

@section('title', 'User Check-In')

@section('content')
<div class="container">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card shadow-sm position-relative">
                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                    <a href="{{ url('/') }}">
                        <img src="https://i1.wp.com/phmc.com.ph/wp-content/uploads/2020/05/uphmc-logo.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="#" enctype="multipart/form-data" id="checkin-form">
                        @csrf
                        <h3 class="text-center mb-4">Employee Check-In</h3>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID" required>
                                <label for="user_id">ID</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <label for="name">Name</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="department" name="department" list="department-options" placeholder="Department" required>
                                <label for="department">Department</label>
                                <datalist id="department-options">
                                    <option value="HR">
                                    <option value="IT">
                                    <option value="Finance">
                                    <option value="Marketing">
                                </datalist>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-100" id="submit-btn" disabled>
                                Check In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const form = document.getElementById('checkin-form');
    const submitBtn = document.getElementById('submit-btn');

    form.addEventListener('input', () => {
        const userId = document.getElementById('user_id').value.trim();
        const name = document.getElementById('name').value.trim();
        const department = document.getElementById('department').value.trim();
        const imageUploaded = document.getElementById('image').files.length > 0;

        submitBtn.disabled = !(userId && name && department && imageUploaded);
    });
</script>
@endsection


