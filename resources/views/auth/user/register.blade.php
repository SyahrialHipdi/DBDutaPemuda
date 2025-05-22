@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">User Register</div>
            <div class="card-body">
                <form method="POST" action="/user/register">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">whatsapp</label>
                        <input type="text" class="form-control" id="whatsapp " name="whatsapp" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir " name="tanggalLahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat " name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="rt_rw" class="form-label">RT/RW</label>
                        <input type="text" class="form-control" id="rt_rw " name="rt_rw" required>
                    </div>
                    <div class="mb-3">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa " name="desa" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan " name="kecamatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten " name="kabupaten" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">provinsi</label>
                        <input type="text" class="form-control" id="provinsi " name="provinsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kodePos " name="kodePos" required>
                    </div>
                    <div class="mb-3">
                        <label for="proposal" class="form-label">Proposal</label>
                        <input type="text" class="form-control" id="proposal " name="proposal" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection