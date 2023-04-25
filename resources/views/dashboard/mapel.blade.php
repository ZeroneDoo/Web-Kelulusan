@extends('dashboard/layout/app')

@section('titles')
    Mata Pelajaran
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Data Mata Pelajaran</h6>
            <a href="#" class="btn btn-primary active" role="button" aria-pressed="true">+ Tambah Data</a>
          </div>
          
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr class="">
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Pelajaran</th>
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KKM</th>
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jurusan</th>
                    <th class=" text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>
                      <h6 class="p-3 mb-0 text-sm ">Matematika</h6>
                    </td>
                    <td>
                      <h6 class="p-3 mb-0 text-sm">90</h6>
                    </td>
                    <td>
                      <h6 class="p-3 mb-0 text-sm">---</h6>
                    </td>
                    
                   
                    <td class="align-middle">
                      <div class="d-flex justify-content-center p-3 gap-3">
                        <a href="/editmapel" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="javascript:;" class="text-danger font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
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