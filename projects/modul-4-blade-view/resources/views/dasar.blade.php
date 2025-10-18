<!DOCTYPE html>
<html>
    <head>
        <title>Data Passing Demo</title>
    </head>
    <body>
        <h1>Passing Data to Blade</h1>
        <h2>String</h2>
        <p>Nama : {{ $name }}</p>

        <h2>Array</h2>
        <ul>
            @foreach ($fruits as $fruit)
                <li>{{ $fruit }}</li>
            @endforeach
        </ul>

        <h2>Associative Array</h2>
        <p>Name: {{ $user['name'] }}</p>
        <p>Email: {{ $user['email'] }}</p>
        <p>Status: {{ $user['is_active'] ? 'Active' : 'Inactive' }}</p>
        <p>Price: Rp{{ number_format($product->price, 0, ',', '.') }}</p>

    </body>
</html>