<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
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
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('#') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="color-background opacity-6"
                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                            </path>
                                            <path class="color-background"
                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Page</h6>
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
             
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kelas') ? 'active' : '' }}" href="{{ url('kelas') }}">
              <div
                  class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18">
                      @if (Request::is('kelas'))
                      <g fill="white" fill-rule="evenodd" clip-rule="evenodd"><path d="M3.36 4.984h1.574v2.885h3.673v1.574H4.934v3.672h3.673v1.573h-4.46a.787.787 0 0 1-.786-.786V4.984Z"/><path d="M1 1.836C1 .822 1.822 0 2.836 0h7.869c1.014 0 1.836.822 1.836 1.836v1.836a1.836 1.836 0 0 1-1.836 1.836H2.836A1.836 1.836 0 0 1 1 3.672V1.836Zm1.836-.262a.262.262 0 0 0-.262.262v1.836c0 .145.117.262.262.262h7.869a.262.262 0 0 0 .262-.262V1.836a.262.262 0 0 0-.262-.262H2.836ZM7.82 8.393c0-1.014.822-1.836 1.836-1.836h2.623c1.014 0 1.836.822 1.836 1.836v.525a1.836 1.836 0 0 1-1.836 1.836H9.656A1.836 1.836 0 0 1 7.82 8.918v-.525Zm1.836-.262a.262.262 0 0 0-.263.262v.525c0 .145.118.262.263.262h2.623a.262.262 0 0 0 .262-.262v-.525a.262.262 0 0 0-.262-.262H9.656ZM7.82 13.64c0-1.015.822-1.837 1.836-1.837h2.623c1.014 0 1.836.822 1.836 1.836v.525A1.836 1.836 0 0 1 12.279 16H9.656a1.836 1.836 0 0 1-1.836-1.836v-.525Zm1.836-.263a.262.262 0 0 0-.263.262v.525c0 .145.118.262.263.262h2.623a.262.262 0 0 0 .262-.262v-.525a.262.262 0 0 0-.262-.262H9.656Z"/></g>
                      @else
                      <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M3.36 4.984h1.574v2.885h3.673v1.574H4.934v3.672h3.673v1.573h-4.46a.787.787 0 0 1-.786-.786V4.984Z"/><path d="M1 1.836C1 .822 1.822 0 2.836 0h7.869c1.014 0 1.836.822 1.836 1.836v1.836a1.836 1.836 0 0 1-1.836 1.836H2.836A1.836 1.836 0 0 1 1 3.672V1.836Zm1.836-.262a.262.262 0 0 0-.262.262v1.836c0 .145.117.262.262.262h7.869a.262.262 0 0 0 .262-.262V1.836a.262.262 0 0 0-.262-.262H2.836ZM7.82 8.393c0-1.014.822-1.836 1.836-1.836h2.623c1.014 0 1.836.822 1.836 1.836v.525a1.836 1.836 0 0 1-1.836 1.836H9.656A1.836 1.836 0 0 1 7.82 8.918v-.525Zm1.836-.262a.262.262 0 0 0-.263.262v.525c0 .145.118.262.263.262h2.623a.262.262 0 0 0 .262-.262v-.525a.262.262 0 0 0-.262-.262H9.656ZM7.82 13.64c0-1.015.822-1.837 1.836-1.837h2.623c1.014 0 1.836.822 1.836 1.836v.525A1.836 1.836 0 0 1 12.279 16H9.656a1.836 1.836 0 0 1-1.836-1.836v-.525Zm1.836-.263a.262.262 0 0 0-.263.262v.525c0 .145.118.262.263.262h2.623a.262.262 0 0 0 .262-.262v-.525a.262.262 0 0 0-.262-.262H9.656Z"/></g>
                      @endif
                  </svg>
              </div>
              <span class="nav-link-text ms-1">Kelas</span>
          </a>
      </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('wakel') ? 'active' : '' }}" href="{{ url('wakel') }}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 22 22">
                        @if (Request::is('wakel'))
                        <path fill="white" d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9Zm10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8Zm0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5ZM7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5Z"/>
                        @else
                        <path fill="currentColor" d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9Zm10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8Zm0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5ZM7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5Z"/>
                        @endif
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Wali Kelas</span>
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mapel') ? 'active' : '' }}" href="{{ url('mapel') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
                            @if (Request::is('mapel'))
                            <path fill="white"
                                d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10m0 2h-3v6l-2.5-2.25L11 10V4H9v12h10M3 20a2 2 0 0 0 2 2h12v-2H5V6H3Z" />
                            @else
                            <path fill="currentColor"
                                d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10m0 2h-3v6l-2.5-2.25L11 10V4H9v12h10M3 20a2 2 0 0 0 2 2h12v-2H5V6H3Z" />
                            @endif
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Mata Pelajaran</span>
                </a>
            </li>
          
      


        </ul>
    </div>

</aside>
