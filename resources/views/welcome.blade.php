<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>myPassportFramework - Kkoze</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: white;
            overflow: hidden;
        }
        .container {
            text-align: center;
            margin-top: auto;
            animation: fadeIn 2s ease-in;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }
        p {
            font-size: 1.2rem;
            margin-top: 0;
            color: #ddd;
        }
        .btn {
            margin-top: 2rem;
            padding: 0.8rem 2rem;
            background-color: #00c6ff;
            border: none;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background-color: #0072ff;
        }
        footer {
            width: 100%;
            text-align: center;
            padding: 1rem 0;
            font-size: 0.9rem;
            background-color: rgba(0, 0, 0, 0.3);
            color: #aaa;
            margin-top: auto;
        }
        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to myPassportFramework</h1>
        <p>Secure. Scalable. Simple. Built by Kkoze.</p>
        <a href="{{ route('login') }}" class="btn">Get Started</a>
    </div>

    <footer>
        &copy; {{ date('Y') }} by Ed Cezar Lampitoc | Powered by Laravel 12
    </footer>

</body>
</html>
