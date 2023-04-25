@extends('dashboard/layout/app')

@section('titles')
Ubah Data Siswa
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Ubah Data Siswa | Sheyla Aulya</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form>
                        <div class="form-group">
                            <label for="nisn" class="text-sm">NISN</label>
                            <input type="text" class="form-control" id="nisn" value="087654321" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nipd" class="text-sm">NIPD</label>
                            <input type="text" class="form-control" id="nipd" value="087654321" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-sm">Nama</label>
                            <input type="text" class="form-control" id="nama" value="Sheyla Aulya">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="text-sm">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir"value="Jakarta">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="text-sm">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" value="">
                        </div>
                        <div class="form-group">
                            <label for="kompetensi" class="text-sm">Kompetensi</label>
                            <select class="form-control form-control" id="kompetensi">
                                <option value="" selected>Kompetensi</option>
                                <option>PPLG</option>
                                <option>Animasi</option>
                                <option>TJKT</option>
                                <option>TE</option>
                                <option>BRF</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
