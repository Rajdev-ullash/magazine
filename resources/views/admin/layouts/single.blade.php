<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.includes.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            @yield('single')
        </div>

    </div>

    @include('admin.includes.scripts')

</body>

</html>
