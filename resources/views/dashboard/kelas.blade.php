@extends('dashboard/layout/app')

@section('titles')
Kelas
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Data Kelas</h6>
                    <button class="btn btn-primary active" role="button" aria-pressed="true" id="myBtn"
                        class="modal">+ Tambah Data</button>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama
                                        Kelas</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Jurusan</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-4">
                                        <h6 class="mb-0 text-sm">X PPLG 1</h6>
                                    </td>
                                    <td class="p-4">
                                        <h6 class="mb-0 text-sm">PPLG</h6>
                                    </td>

                                    <td class="align-middle">
                                        <div class="d-flex justify-content-center p-3 gap-3">
                                            <a href="/editkelas" class="text-secondary font-weight-bold text-sm"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="javascript:;" class="text-danger font-weight-bold text-sm"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Hapus
                                            </a>
                                        </div>

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
