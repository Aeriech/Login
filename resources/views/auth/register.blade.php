<form method="POST" action="/register">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br><span style="color: red">@error('name'){{ $message }}@enderror</span><br>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br><span style="color: red">@error('email'){{ $message }}@enderror</span><br>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        <br><span style="color: red">@error('password'){{ $message }}@enderror</span><br>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
    </div>
    <br>
    <button type="submit">Register</button> <br> <br>
    <a href="login">Login</a>
</form>
