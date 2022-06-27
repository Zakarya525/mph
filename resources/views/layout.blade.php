<ul>
    @auth
        <li>
            <h1>Welcome Dear {{ auth()->user()->username }}</h1>
        </li>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
    @endauth
</ul>
