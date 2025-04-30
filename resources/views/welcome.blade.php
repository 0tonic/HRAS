<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>GLASS Framework - Kkoze</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --glass-bg: rgba(255, 255, 255, 0.4);   /* Softer glass effect */
      --glass-border: rgba(255, 255, 255, 0.6); /* Light border */
      --btn-bg: #f0f0f0;                          /* Light silver button */
      --btn-hover: #e0e0e0;                       /* Slightly darker on hover */
      --text-light: #333333;  
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Space Mono', monospace;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, #a8e063, #56ab2f, #79c779, #4caf50, #2e7d32); /* Gradient background */
      background-size: 400% 400%;
      animation: gradientMove 12s ease-in-out infinite; /* Background gradient animation */
      color: var(--text-light);
      margin: 0;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      25% { background-position: 50% 50%; }
      50% { background-position: 100% 50%; }
      75% { background-position: 50% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 2rem;
      opacity: 0;
      animation: fadeIn 1s ease forwards;
      width: 100%;
    }

    .glass {
      background: var(--glass-bg);
      backdrop-filter: blur(6px);    /* Soft blur effect */
      -webkit-backdrop-filter: blur(6px);
      border: 1px solid var(--glass-border);
      border-radius: 10px;
      padding: 2rem;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Light shadow */
      opacity: 0;
      animation: fadeInUp 1.2s ease forwards; /* Fade-in and slide-up effect */
    }

    h1 {
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: #333;  /* Solid color for minimalism */
      animation: slideIn 1s ease-out forwards; /* Slide-in effect */
    }

    p {
      font-size: 1rem;
      color: #666;  /* Subtle text color */
      margin-bottom: 2rem;
    }

    @keyframes slideIn {
      0% { transform: translateY(-20px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .btn {
      display: block;
      padding: 1rem 3rem;
      background-color: var(--btn-bg);
      color: var(--text-light);
      border: none;
      border-radius: 6px;
      font-weight: 600;
      font-size: 1.1rem;
      text-decoration: none;
      margin-bottom: 1rem;      /* Adds space between buttons */
      transition: background-color 0.3s ease;
      opacity: 0;
      animation: fadeInUp 1.5s ease forwards; /* Fade-in and slide-up for buttons */
      animation-delay: 0.5s;  /* Delay for buttons to appear after the container */
      width: 100%;
      max-width: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .btn:hover {
      background-color: var(--btn-hover);
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 1rem;
      font-size: 0.8rem;
      color: #888;
      background: rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(4px);
      opacity: 0;
      animation: fadeInUp 1.5s ease forwards;
      animation-delay: 1s; /* Delay footer animation */
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 1.8rem;
      }

      .glass {
        width: 95%; /* Make the glass effect container slightly larger on mobile */
        padding: 1.5rem;
      }

      .btn {
        padding: 0.8rem 2rem; /* Slightly smaller buttons for mobile */
        font-size: 1rem;
      }

      footer {
        font-size: 0.7rem; /* Slightly smaller footer text */
      }
    }
  </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
      <!-- Responsive Column Setup -->
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="glass">
          <img src="https://i1.wp.com/phmc.com.ph/wp-content/uploads/2020/05/uphmc-logo.png" alt="Logo" style="max-width: 25%; margin-bottom: 1rem;">
          <h1>Attendance System</h1>
          <a href="{{ route('UserCheckIn') }}" class="btn ms-3">EMPLOYEE CHECK IN</a>
          <a href="{{ route('login') }}" class="btn me-3">ADMIN LOGIN</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; {{ date('Y') }} by Ed Cezar Lampitoc | Powered by Laravel 12
  </footer>

</body>
</html>

