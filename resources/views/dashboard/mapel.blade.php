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
            <button class="btn btn-primary active text-capitalize text-sm font-weight-bold" role="button"
                        aria-pressed="true" data-bs-toggle="modal" data-bs-target="#modals">+
                        Tambah Data</button>
                </div>
                <!-- Modal -->
                <div class="modal fade z-index 1050" id="modals" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="1050" aria-labelledby="modalsLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalsLabel">Impor Data </h1>
                                    <button type="button" class="btn-close " data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="drag-area">
                                        <div class="icon">
                                            <i class="fa fa-files-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="fileinfo">
                                            <p></p>
                                        </div>
                                        <span class="header">Tekan & Lepaskan</span>
                                        <span class="header">atau <span class="button">Cari</span></span>
                                        <input type="file" id="file-input" multiple hidden>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-capitalize"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary text-capitalize">Impor</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                          <a href="" class="text-secondary font-weight-bold text-sm text-decoration-none"
                              data-toggle="tooltip" data-original-title="Edit user">
                              Edit
                          </a>
                          <a href="javascript:;" class="text-danger font-weight-bold text-sm text-decoration-none"
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