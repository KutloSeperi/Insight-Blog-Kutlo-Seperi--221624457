<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Blog') }} - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #dcf7f0;
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;


            }
            header {
                background-color: #29B1D6;
                color: #fff;
                padding: 1rem 2rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            header a {
                color: #fff;
                text-decoration: none;
                padding: 0 15px;
                font-weight: 500;
            }
            header a:hover {
                text-decoration: underline;
            }
            .content {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 2rem;
            }
            .footer {
                background-color: #29B1D6;
                color: #fff;
                text-align: center;
                padding: 1rem 0;
            }
            .button-group {
                margin-top: 2rem;
            }
            .button-group a {
                text-decoration: none;
                color: #fff;
                background-color: #007bff;
                padding: 0.5rem 1rem;
                border-radius: 5px;
                margin: 0 0.5rem;
                transition: background-color 0.3s;
            }
            .button-group a:hover {
                background-color: #0056b3;
            }
            .form-container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 2rem;
                width: 100%;
                max-width: 400px;
                margin: 2rem;
            }
            .form-input {
                width: 100%;
                padding: 0.5rem;
                margin-top: 0.5rem;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
            .form-input:focus {
                border-color: #007bff;
                outline: none;
            }
            .form-checkbox {
                margin-top: 10px;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
  

        <div class="content">
            <div class="form-container">
                <div class="flex justify-center mb-4">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
               
                {{ $slot }}
            </div>
        </div>

        <footer class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}</p>
        </footer>

        <!-- Custom Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                console.log('Login page custom JS loaded!');
            });
        </script>
    </body>
</html>
