<form method="POST" action="/login">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br><span style="color: red">@error('email'){{ $message }}@enderror</span><br>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <span style="color: red">@error('password'){{ $message }}@enderror</span><br>
    </div>

    <button type="submit">Login</button> <br> <br>
    <a href="/register">Register</a>
</form>
