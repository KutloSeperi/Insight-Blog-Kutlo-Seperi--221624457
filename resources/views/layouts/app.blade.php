<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles for Blog -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #dcf7f0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color:#29B1D6;
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
       .main-content {
    display: grid;
    grid-template-columns: 1fr 3fr; /* 1/4 for sidebar, 3/4 for content */
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
    gap: 2rem; /* gap between content and sidebar */
}

.content {
    background-color: #fff;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.sidebar {
    background-color: #fff;
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

        
        .footer {
            background-color: #29B1D6;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
        .sidebar h2 {
            border-bottom: 2px solid #eee;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 0.5rem;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007BFF;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
    

        <!-- Page Heading -->
        @isset($header)
       
            <header>
            
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}


                   
                </div>
             
            </header>
        @endisset


    
        <!-- Page Content -->
      
        <aside class="sidebar">
        @include('layouts.navigation')


        
            <h2>Blog</h2>


            <p>Discovering the True Essence of Blue: More Than Just a Color

Hello, everyone!

Today, let’s dive into the world of blue, a color that is much more than what meets the eye. Blue is not just a shade on the color wheel – it’s a symbol, an emotion, and an experience. From its calming effects to its power to inspire creativity, blue has a profound impact on our lives.

The Calming Effect of Blue
Ever wonder why gazing at the ocean or the sky feels so soothing? Blue has been scientifically proven to reduce stress and induce calmness. It’s like a breath of fresh air for your soul.

Tip: Create a blue haven in your workspace. Add a splash of blue with accessories like cushions, lamps, or even a blue mug. Feel the stress melt away!

Blue: The Color of Creativity
Feeling stuck in a creative rut? Surround yourself with blue! This color is known to enhance creative thinking and problem-solving. There’s a reason why so many artists and thinkers are drawn to blue.

Tip: Try using blue-colored stationery or set your desktop background to a blue theme. Watch as new ideas start flowing!
<p>
The Depth of Blue
Blue symbolizes depth, wisdom, and stability. It encourages introspection and a deeper understanding of oneself. Whether it’s the deep blue sea or the vast sky, blue pushes us to explore and discover.

Tip: Spend some time near water or under the open sky. Reflect on your thoughts and feelings. This simple practice can lead to profound insights and personal growth.</p>
</p>      
<img src="/images/hello.jpg" alt="" width = "400" height = "200">
            <div class="content">

                {{ $slot }}
                </div>
                </div>
  
          
       
            </aside>

            <div class="main-content">
     
     <!-- Main Blog Content -->

   
      <!-- Sidebar -->
   
</div>
        <!-- Footer -->
        <footer class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}.</p>
        </footer>
    </div>
</body>
</html>
