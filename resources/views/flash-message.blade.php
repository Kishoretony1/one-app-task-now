<!DOCTYPE html>
<html>
<head>
    <title>Flash Message</title>
</head>
<body>
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h1>Welcome to Flash Message</h1>
        <a href="{{ route('flash-message') }}">Show Flash Message</a>
    </div>
</body>
</html>
