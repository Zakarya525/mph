<h1>Sign Up</h1>
<form action="add" method="POST">
  @csrf
  <input type="text" name="username" id="name" placeholder="Enter name"> <br> <br>
  <input type="email" name="email" id="email" placeholder="Enter email"> <br> <br>
  <input type="password" name="password" id="password" placeholder="Enter password"> <br> <br>
  <button type="submit">Add User</button>
</form>