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
      --glass-bg: rgba(255, 255, 255, 0.08);
      --glass-border: rgba(255, 255, 255, 0.15);
      --btn-bg: #5b5b5b;
      --btn-hover: #2c2c2c;
      --text-light: #dddddd;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Space Mono', monospace;
      height: 100vh;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, #1b1b1b, #333333, #555555, #222222, #444444);
      background-size: 400% 400%;
      animation: brutalistMove 12s ease-in-out infinite;
      color: var(--text-light);
    }

    @keyframes brutalistMove {
      0% { background-position: 0% 50%; }
      25% { background-position: 50% 50%; }
      50% { background-position: 100% 50%; }
      75% { background-position: 50% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      text-align: center;
      padding: 2rem;
    }

    .glass {
      background: var(--glass-bg);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border: 1px solid var(--glass-border);
      border-radius: 15px;
      padding: 3rem 2rem;
      width: 90%;
      max-width: 480px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.5);
      animation: fadeIn 2s ease;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      background: linear-gradient(90deg, #666, #bbb);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: 2px;
    }

    p {
      font-size: 1.2rem;
      color: #bbbbbb;
      margin-bottom: 2rem;
    }

    .btn {
      padding: 1rem 3rem;
      background-color: var(--btn-bg);
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 1.1rem;
      text-decoration: none;
      transition: background-color 0.4s ease;
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
      background: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(4px);
    }

    @keyframes fadeIn {
      0% {opacity: 0; transform: scale(0.9);}
      100% {opacity: 1; transform: scale(1);}
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="glass">
      <h1>GLASS</h1>
      <p>Secure. Brutal. Transparent. Built by Kkoze.</p>
      <a href="{{ route('login') }}" class="btn">Enter Framework</a>
    </div>
  </div>

  <footer>
    &copy; {{ date('Y') }} by Ed Cezar Lampitoc | Powered by Laravel 12
  </footer>

</body>
</html>
