@extends('Layouts.Dashboard_Template')
@section('title', 'ADD NEW USERS PEMOHON')
@section('menu')
<ul class="nav">
    <li>
        <a href="/Dashboard-logistik">
            <i class="fas fa-house-user"></i>
            <p class="text-bold"><b>Dashboard</b></p>
        </a>
    </li>
    <li>
        <a href="/Order-logistik">
            <i class="fas fa-shopping-cart"></i>
            <p><b>Logistics Order</b></p>
        </a>
    </li>
    <li>
        <a href="/Inventaris-logistik">
            <i class="fas fa-box"></i>
            <p><b>Inventory</b></p>
        </a>
    </li>
    {{-- <li class="active">
        <a href="/Create-user">
            <i class="fas fa-users"></i>
            <p><b>Create Users</b></p>
        </a>
    </li> --}}
</ul>
@endsection
@section('pages_title', 'Create Users Pemohon')
@section('contents')
<div class="content">
    <main class="form-signin">
        <form action="/Users-create" method="POST">
            @csrf
            <div class="form-floating">
                <div class="form-floating">
                    <label for="floatingInput">Nama Lengkap User</label>
                    <input type="text" name="nama_user" class="form-control" id="floatingInput" placeholder="Nama Lengkap User" required>
                </div>
                <hr>
                <div class="form-floating">
                    <label for="floatingInput">Jabatan User</label>
                    <select name="role" class="form-control" required>
                        <option value="pemohon" selected>Pemohon</option>
                        <option value="pemasok">Pemasok</option>
                        <option value="logistik">Logistik</option>
                        <option value="rektor">Rektor</option>
                        <option value="wr3">WR3</option>
                        <option value="biro2">Biro2</option>
                    </select>
                </div>
                <hr>
                <label for="floatingInput">New Username</label>
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
            </div>
            <hr>
            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-danger" type="submit">Create User</button>
        </form>
    </main>
</div>
@endsection