@extends('layouts.app')

@section('title', 'User Check-In')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Employee Check-In</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #a5d6a7, #66bb6a, #81c784, #388e3c);
      background-size: 300% 300%;
      animation: animateBG 12s ease infinite;
      min-height: 100vh;
      margin: 0;
    }

    @keyframes animateBG {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: none;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      animation: slideUp 0.8s ease-out;
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .card-header {
      border-bottom: none;
      padding: 2rem 1.5rem 1rem;
      background: transparent;
    }

    .card-body {
      padding: 2rem;
    }

    h3 {
      font-weight: 600;
      color: #2e7d32;
    }

    .form-control {
      border-radius: 8px;
      padding: 0.75rem;
      border: 1px solid #ccc;
    }

    .form-label {
      font-weight: 500;
      color: #2e7d32;
    }

    .btn-success {
      background-color: #2e7d32;
      border: none;
      padding: 0.75rem;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .btn-success:hover {
      background-color: #388e3c;
    }

    @media (max-width: 768px) {
      .card {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100 justify-content-center px-3">
      <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6">
        <div class="card shadow-sm">
          <div class="card-header d-flex justify-content-center align-items-center">
            <a href="{{ url('/') }}">
              <img src="https://i1.wp.com/phmc.com.ph/wp-content/uploads/2020/05/uphmc-logo.png" alt="Logo" class="img-fluid" style="max-height: 80px;">
            </a>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('checkin.store') }}" enctype="multipart/form-data" id="checkin-form">
              @csrf
              <h3 class="text-center mb-4">Employee Check-In</h3>

              <div class="mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID" required>
                  <label for="user_id">Employee ID</label>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  <label for="name">Full Name</label>
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

  <!-- Enable/disable submit button based on form inputs -->
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

</body>
</html>


@endsection


