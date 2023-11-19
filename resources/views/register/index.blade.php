<form action="{{ route('storeCustomer') }}" method="POST">
    @csrf
    <label for="name">Nama :</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email :</label>
    <input type="text" name="email" id="email">
    <br>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Register</button>
    <h4>Sudah punya akun ?<a href="/">Login</a></h4>
</form>