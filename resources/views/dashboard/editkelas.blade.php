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
                    <h6>Ubah Data Kelas | {{ $kelas->kelas }}</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form action="{{ route('put.kelas', ['id' => $kelas->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kelas" class="text-sm">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="nama_kelas" value="{{ $kelas->kelas }}">
                          </div>
                          <div class="form-group">
                            <label for="jurusan" class="text-sm">Jurusan</label>
                            <select class="form-control form-control" id="jurusan" name="jurusan_id">
                                <option value="" selected hidden>Jurusan</option>
                                @foreach ($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}" {{ $kelas->jurusan_id == $jurusan->id ? 'selected' : ''}}>{{ $jurusan->jurusan }}</option>
                                @endforeach
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
