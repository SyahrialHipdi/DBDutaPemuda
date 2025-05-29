@extends('layouts.app')
@section('title', 'form')
@section('content')

    <section>
        {{-- start wizard syarat --}}
        <div id="wizard-step-1">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3 class="text-center">Syarat dan Ketentuan</h3>
                        <p class="text-muted mb-4">Pastikan Anda memahami seluruh syarat dan ketentuan yang berlaku.</p>

                        <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                            <div class="card-body py-3">
                                {{-- syarat --}}
                                <ol class="mx-2">
                                    <li>
                                        warga negara indonesia yang bertaqwa kepada tuhan yang maha esa
                                    </li>
                                    <li>KTP Tangerang Selatan</li>
                                    <li>Usia 17-30.</li>
                                    <li>Berpendidikan minimal SMA/SLTA</li>
                                    <li>Belum menikah</li>
                                    <li>Surat keterangan kesehatan jasmani dan rohani dari dokter</li>
                                    <li>Telah melakukan kegiatan pengembangan masyarakat yang dibuktikan dengan laporan
                                        yang terdokumentasi dalam bentuk foto dan liputan media dan lain-lain</li>
                                    <li>Tidak merokok dan terbebas dari Narkoba</li>
                                    <li>Memiliki wawasan kebangsaan dan cinta tanah air serta pengetahuan yang luas mengenai
                                        isu-isu</li>
                                    <li>Mampu berkomunikasi efektif dan mahir menggunakan media sosial seperti : email,
                                        facebook, X dan lain-lain </li>
                                    <li>Mengetahui dan menguasai seni dan budaya terutama kesenian daerah Provinsi Banten
                                    </li>
                                    <li>Tidak Pernah terlibat dalam tindakan kriminal</li>
                                </ol>
                                <div class="form-check text-left ml-3 my-4">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms">
                                    <label class="form-check-label" for="agreeTerms">
                                        Saya menyetujui syarat dan ketentuan pendaftaran Duta Pemuda.
                                    </label>
                                </div>

                                <div id="alert-warning" class="alert alert-danger d-none" role="alert">
                                    Silakan centang kotak persetujuan terlebih dahulu.
                                </div>

                                <button id="btn-lanjut" class="btn" style="width: 100%">Lanjut Pendaftaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- end wizard syarat --}}

        {{-- start form --}}
        <div id="wizard-step-2" style="display: none;">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3 class="text-center">Pendaftaran Pemuda Pelopor Tahun 2025</h3>
                        <p class="text-muted mb-4">Isi formulir ini dengan data yang benar dan lengkap.</p>

                        <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                            <div class="card-body py-3 ">

                                <form id="myForm" class="form-card mt-4 needs-validation" novalidate>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Nama lengkap<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Email<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Email wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Nomor Whatsapp<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="number" id="whatsapp" name="whatsapp"
                                                placeholder="" required>
                                            <div class="invalid-feedback">No whatsapp wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">NIK<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="nik" name="nik"
                                                placeholder="" required>
                                            <div class="invalid-feedback">NIK wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3 mb-1">Tanggal Lahir<span
                                                    class="text-danger"> *</span></label>
                                            <div class="d-flex flex-sm-row gap-2">
                                                <div class="flex-fill mr-3">
                                                    <select class="form-control w-100" id="tgl_lahir_dd" name="tgl_lahir_dd"
                                                        required>
                                                        <option value="">dd</option>
                                                        @for ($i = 1; $i <= 31; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>

                                                <div class="flex-fill mr-3">
                                                    <select class="form-control w-100" id="tgl_lahir_mm" name="tgl_lahir_mm"
                                                        required>
                                                        <option value="">mm</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>

                                                <div class="flex-fill">
                                                    <select class="form-control w-100" id="tgl_lahir_yyyy"
                                                        name="tgl_lahir_yyyy" required>
                                                        <option value="">yyyy</option>
                                                        @php
                                                            foreach (range(1990, 2010) as $year) {
                                                                echo "<option value='$year'>$year</option>";
                                                            }
                                                        @endphp
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label class="text-left px-3">Alamat<span class="text-danger"> *</span></label> --}}
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Provinsi<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="provinsi" name="provinsi"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Kabupaten/Kota<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="kabupaten" name="kabupaten"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Kecamatan<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="kecamatan" name="kecamatan"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Desa/Kelurahan<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="desa_kelurahan"
                                                name="desa_kelurahan" placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">RW<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="rw" name="rw"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">RT<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="rt" name="rt"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Proposal kepeloporan
                                                <small>(link
                                                    gdrive)</small><span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" id="link_proposal"
                                                name="link_proposal" placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Upload foto KTP <small>(max
                                                    200kb)</small><span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="file" id="foto_ktp" name="foto_ktp"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib upload foto KTP.</div>
                                        </div>
                                    </div>

                                    <div class="form-group text-left ml-5">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="invalidCheck" required>
                                            <label class="form-check-label">Saya menyatakan bahwa seluruh data yang saya
                                                isi
                                                adalah benar.</label>
                                        </div>
                                    </div>
                            </div>
                            <div id="alert-warning-2" class="alert alert-danger d-none" role="alert">
                                Silakan lengkapi data anda.
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-12 button">
                                    <button type="submit" class="btn" style="width: 100%">Kirim</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end form --}}
    </section>

@endsection
