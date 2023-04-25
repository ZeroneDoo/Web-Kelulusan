@extends('dashboard/layout/app')

@section('titles')
Ubah Mata Pelajaran
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Ubah Mata Pelajaran | Matematika</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form>
                        <div class="form-group">
                            <label for="nama" class="text-sm">Nama</label>
                            <input type="text" class="form-control" id="nama" value="Matematika">
                        </div>
                        
                        <div class="form-group">
                            <label for="kkm" class="text-sm">KKM</label>
                            <input type="number" class="form-control" id="kkm"value="90">
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class="text-sm">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" value="Pengetahuan">
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
