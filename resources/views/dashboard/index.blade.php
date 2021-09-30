<h1>Welcome Atika</h1>
@auth
Welcome back, {{auth()->user()->name}}
<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
<!-- <a href="">logout</a> -->
@else
<a href="/login"></a>
@endauth