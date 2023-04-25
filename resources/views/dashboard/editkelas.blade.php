@extends('dashboard/layout/app')

@section('titles')
Ubah Data Kelas
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Ubah Data Kelas | X PPLG 1</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form>
                        <div class="form-group">
                            <label for="nama_kelas" class="text-sm">Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" value="X PPLG 1">
                          </div>
                          <div class="form-group">
                            <label for="jurusan" class="text-sm">Jurusan</label>
                            <select class="form-control form-control" id="jurusan">
                                <option value="" selected>Jurusan</option>
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
