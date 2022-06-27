<h1>Login</h1>
<form action="/users/authenticate" method="POST">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="email" name="email" id="email" placeholder="Enter email" value={{ old('email') }}> <br> <br>
    <input type="password" name="password" id="password" placeholder="Enter password" value={{ old('password') }}> <br>
    <br>
    <button type="submit">Login</button>
</form>
