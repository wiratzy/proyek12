<form action="{{ route('register.storeCustomer') }}" method="POST">
    @csrf
    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="nomor_hp">Nomor Hp :</label>
    <input type="tel" name="nomor_hp" id="nomor_hp">
    <br>
    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" id="alamat">
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