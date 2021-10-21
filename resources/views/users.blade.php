<h1>User Login</h1>

{{$errors}}
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user"><br><br>
    <input type="password" name="userpassword" placeholder="enter user password"><br><br>
    <button type="submit">Login</button>
</form>