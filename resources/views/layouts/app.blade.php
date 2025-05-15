<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Auth App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Multi-Auth</a>
            <div class="navbar-nav">
                @auth('web')
                    <a class="nav-link" href="/user/dashboard">User Dashboard</a>
                    <form action="/user/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                @endauth
                
                @auth('admin')
                    <a class="nav-link" href="/admin/dashboard">Admin Dashboard</a>
                    <form action="/admin/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                @endauth
                
                @guest('web')
                    <a class="nav-link" href="/user/login">User Login</a>
                    <a class="nav-link" href="/user/register">User Register</a>
                @endguest
                
                @guest('admin')
                    <a class="nav-link" href="/admin/login">Admin Login</a>
                    <a class="nav-link" href="/admin/register">Admin Register</a>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>