<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <header class="d-flex justify-content-center align-items-center">
        <nav class="w-100">
            <div class="container-fluid">
                <ul class="w-100 d-flex justify-content-around align-items-center p-0 m-0">
                    <li>
                        <a href="{{route('comics.index')}}">Comics List</a>
                    </li>
                    <li>
                        <a href="{{route('comics.create')}}">Create new</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="d-flex justify-content-center align-items-center">

        @yield('main_content')

    </main>
    
    <footer class="d-flex justify-content-center align-items-center">
        <h2 class="mb-0">DC Comics</h2>
    </footer>

</body>
</html>