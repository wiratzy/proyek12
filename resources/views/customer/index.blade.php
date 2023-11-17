@extends('layouts.header')
<table class="table">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>alamat</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->CustomerID }}</td>
            <td>{{ $customer->nama }}</td>
            <td>{{ $customer->nomor_hp }}</td>
            <td>{{ $customer->alamat }}</td>
            <td>{{ $customer->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>