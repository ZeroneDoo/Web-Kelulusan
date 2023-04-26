@extends('dashboard/layout/app')

@section('titles')
Ubah Jurusan
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Ubah Jurusan | {{ $jurusan->jurusan }}</h6>
                </div>

                <div class="card-body px-5 pt-3 pb-2">
                    <form action="{{ route('put.jurusan', ['id'=> $jurusan->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="text-sm">Nama Jurusan</label>
                            <input type="text" class="form-control" id="nama" name="jurusan" value="{{ $jurusan->jurusan }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
