<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PHMC - Attendance System</title>

  <!-- Professional Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-bg: #e8f5e9;
      --green1: #66bb6a;
      --green2: #388e3c;
      --btn-bg: #ffffff;
      --btn-hover: #f1f8e9;
      --text-dark: #2e7d32;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, #a5d6a7, #66bb6a, #81c784, #388e3c);
      background-size: 300% 300%;
      animation: animateBG 12s ease infinite;
      color: var(--text-dark);
      margin: 0;
    }

    @keyframes animateBG {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 2rem;
      animation: fadeIn 1s ease-in-out forwards;
    }

    .glass {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 2rem;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      animation: slideUp 1.2s ease-in-out forwards;
    }

    h1 {
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      color: #444;
    }

    .btn {
      display: block;
      padding: 0.9rem 2rem;
      background-color: var(--btn-bg);
      color: var(--text-dark);
      border: 2px solid var(--text-dark);
      border-radius: 8px;
      font-weight: 500;
      font-size: 1rem;
      text-decoration: none;
      margin: 0.5rem auto;
      transition: all 0.3s ease;
      width: 100%;
      max-width: 280px;
    }

    .btn:hover {
      background-color: var(--btn-hover);
      transform: scale(1.03);
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      font-size: 0.8rem;
      color: #666;
      padding: 1rem;
      background: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(6px);
      animation: fadeIn 2s ease-in forwards;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes slideUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 1.6rem;
      }

      .glass {
        padding: 1.5rem;
      }

      .btn {
        padding: 0.8rem 1.5rem;
        font-size: 0.95rem;
      }

      footer {
        font-size: 0.7rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="glass">
      <img src="https://i1.wp.com/phmc.com.ph/wp-content/uploads/2020/05/uphmc-logo.png" alt="Logo" style="max-width: 80px; margin-bottom: 1rem;">
      <h1>Attendance System</h1>
      <a href="{{ route('UserCheckIn') }}" class="btn">EMPLOYEE CHECK IN</a>
      <a href="{{ route('login') }}" class="btn">ADMIN LOGIN</a>
    </div>
  </div>

  <footer>
    &copy; {{ date('Y') }} by Ed Cezar Lampitoc | Powered by Laravel 12
  </footer>

</body>
</html>
