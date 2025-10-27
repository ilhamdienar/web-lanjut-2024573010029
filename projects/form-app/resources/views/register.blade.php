<!DOCTYPE html>
<html>
<head>
    <title>Form Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Contoh Validasi Custom</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form  method="POST" action="{{ route('register.handle')}}">
        @csrf
        <div class="mb-3">
            <label for="name">Nama lengkap</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Alamat Email</label>
            <input name="email" class="form-control" value="{{ old('email')}}">
            @error('email') 
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username">Username</label>
            <input name="username" class="form-control" value="{{ old('username')}}">
            @error('username') 
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control">
            @error('password') 
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</body>
</html>