<form action="{{ route('register.storeCustomer') }}" method="post">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>
    <br>
    <label for="nomor_hp">Nomor HP:</label>
    <input type="tel" id="nomor_hp" name="nomor_hp"  required>
    <br>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Register</button>
</form>
