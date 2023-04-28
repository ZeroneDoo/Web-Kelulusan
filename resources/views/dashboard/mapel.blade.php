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
            <button class="btn active text-capitalize text-sm font-weight-bold d-flex gap-2 text-light" style="background-color: #3C6255" role="button"
            aria-pressed="true" data-bs-toggle="modal" data-bs-target="#modals">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="white" d="M14 2H6a2 2 0 0 0-2 2v16c0 1.11.89 2 2 2h12c1.11 0 2-.89 2-2V8l-6-6m4 18H6V4h7v5h5v11m-3-8.07V19H7.93l2.12-2.12l-2.83-2.83l2.83-2.83l2.83 2.83L15 11.93Z"/></svg>
            
            Impor Data</button>
                </div>
                <!-- Modal -->
                <div class="modal fade z-index 1050" id="modals" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="1050" aria-labelledby="modalsLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('importExcelMapel') }}" method="POST" enctype="multipart/form-data">
                          @csrf
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
                                        <input type="file" id="file-input" name="file" multiple hidden>

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
            <div class="table-responsive p-0" style="max-height: 460px; overflow-y: scroll;">
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
                  @foreach ($mapels as $mapel)
                    <tr class="">
                      <td>
                        <h6 class="p-3 mb-0 text-sm ">{{ $mapel->mata_pelajaran }}</h6>
                      </td>
                      <td>
                        <h6 class="p-3 mb-0 text-sm">{{ $mapel->created_at->diffForHumans() }}</h6>
                      </td>
                      <td>
                        <h6 class="p-3 mb-0 text-sm">{{ $mapel->updated_at->diffForHumans() }}</h6>
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
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection