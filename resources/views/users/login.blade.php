<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="main">
        <h1>opulencedigitech</h1>
        <h3>Enter your login credentials</h3>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="first">
                Username:
            </label>
            <input type="text" id="first" name="UserEmail" placeholder="Enter your Username" required>

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="UserPassword" placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
        <p>Not registered?
            <a href="{{ route('registerform') }}" style="text-decoration: none;">
                Create an account
            </a>
        </p>
    </div>
</body>

</html>
