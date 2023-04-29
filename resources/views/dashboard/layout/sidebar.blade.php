<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " style="z-index: 0"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#"
            target="_blank">
            <span class="ms-1 font-weight-bold">Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
           
            
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Data</h6>
          </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('siswa') ? 'active' : '' }}" href="{{ url('siswa') }}">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
                          @if (Request::is('siswa'))
                          <path fill="white" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4l.11-.94L5 5.5L12 2l7 3.5v5h-1V6l-2.11 1.06L16 8m-4 6c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/><
                          @else
                          <path fill="currentColor" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4l.11-.94L5 5.5L12 2l7 3.5v5h-1V6l-2.11 1.06L16 8m-4 6c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/>
                          @endif
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Siswa</span>
              </a>
          </li>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('jurusan') ? 'active' : '' }}" href="{{ url('jurusan') }}">
          <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 22 22">
                  @if (Request::is('jurusan'))
                  <path fill="white"
                  d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10m0 2h-3v6l-2.5-2.25L11 10V4H9v12h10M3 20a2 2 0 0 0 2 2h12v-2H5V6H3Z" />
              @else
              <path fill="currentColor"
                  d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10m0 2h-3v6l-2.5-2.25L11 10V4H9v12h10M3 20a2 2 0 0 0 2 2h12v-2H5V6H3Z" />
              @endif
              </svg>
          </div>
          <span class="nav-link-text ms-1">Jurusan</span>
      </a>
  </li>
            
      
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Nilai</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('inputnilai') ? 'active' : '' }}" href="{{ url('inputnilai') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 22 22">
                            @if (Request::is('inputnilai'))
                            <path fill="white" d="M11 11.825V21q0 .425.288.713T12 22q.425 0 .713-.288T13 21v-9.175l1.9 1.875q.275.275.688.288t.712-.288q.275-.275.275-.7t-.275-.7l-3.6-3.6q-.3-.3-.7-.3t-.7.3l-3.6 3.6q-.275.275-.288.688t.288.712q.275.275.7.275t.7-.275l1.9-1.875ZM12 4Q8.65 4 6.325 6.325T4 12q0 .825.162 1.625t.488 1.55q.175.425.112.85t-.387.75q-.3.3-.738.138t-.662-.638Q2.5 15.25 2.25 14.188T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 1.125-.238 2.212t-.737 2.113q-
                                d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10m0 2h-3v6l-2.5-2.25L11 10V4H9v12h10M3 20a2 2 0 0 0 2 2h12v-2H5V6H3Z" />
                            @else
                            <path fill="currentColor" d="M11 11.825V21q0 .425.288.713T12 22q.425 0 .713-.288T13 21v-9.175l1.9 1.875q.275.275.688.288t.712-.288q.275-.275.275-.7t-.275-.7l-3.6-3.6q-.3-.3-.7-.3t-.7.3l-3.6 3.6q-.275.275-.288.688t.288.712q.275.275.7.275t.7-.275l1.9-1.875ZM12 4Q8.65 4 6.325 6.325T4 12q0 .825.162 1.625t.488 1.55q.175.425.112.85t-.387.75q-.3.3-.738.138t-.662-.638Q2.5 15.25 2.25 14.188T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 1.125-.238 2.212t-.737 2.113q-.225.45-.662.6t-.738-.15q-.3-.3-.388-.725t.088-.825q.35-.775.513-1.587T20 12q0-3.35-2.325-5.675T12 4Z"/>
                            @endif
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Nilai Siswa</span>
                </a>
            </li>
          

        </ul>
    </div>

</aside>
