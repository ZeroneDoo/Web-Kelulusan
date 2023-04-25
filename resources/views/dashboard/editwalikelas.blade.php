@extends('dashboard/layout/app')

@section('titles')
Ubah Data Wali Kelas
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Ubah Data Wali Kelas | Nahla Naufan</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form>
                        
                        <div class="form-group">
                            <label for="nipd" class="text-sm">NIPD</label>
                            <input type="text" class="form-control" id="nipd" value="087654321" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-sm">Nama</label>
                            <input type="text" class="form-control" id="nama" value="Nahla Naufan">
                        </div>
                       
                        <div class="form-group">
                            <label for="kelas" class="text-sm">Kelas</label>
                            <select class="form-control form-control" id="kelas">
                                <option value="">Kelas</option>
                                <option>XI PPLG 1</option>
                                <option  selected>XI PPLG 2</option>
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
