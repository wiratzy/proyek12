<form action="{{ route('customer.update', $customer->CustomerID) }}" method="post">
    @csrf
    @method('PATCH')
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required value="{{ $customer->CustomerID }}">
    <br>
    <label for="nomor_hp">Nomor HP:</label>
    <input type="tel" id="nomor_hp" name="nomor_hp" required value="{{ $customer->nama }}">
    <br>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required value="{{ $customer->alamat }}">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="{{ $customer->email }}">
    <br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Ubah</button>
</form>
