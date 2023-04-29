@extends('layout/main')

@section('content')
<div class="header">
    <a href="/">
        <div class="logo">
            <img src="assets/img/logoTb.png" alt="">
            <p>Starbhak <span>Kelulusan</span></p>
        </div>
    </a>
    <div class="sosmed">
        <ul>
            <li><a href="https://www.instagram.com/starbhak.official/">
                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                </a></li>
            <li><a href="https://www.facebook.com/smktarunabhaktidepok">
                    <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                </a></li>
            <li><a href="https://www.youtube.com/@SMKTarunaBhaktiDepok">
                    <iconify-icon icon="carbon:logo-youtube"></iconify-icon>
                </a></li>
            <li><a href="https://smktarunabhakti.net
                ">
                    <iconify-icon icon="mdi:web"></iconify-icon>
                </a></li>
        </ul>
    </div>
</div>
<div class="content">

    <div class="lefts">
        <div class="announce">
            <p>Selamat <span>{{ auth()->user()->nama_siswa }}</span> anda dinyatakan <span>LULUS !</span>
            </p>
        </div>
        <div class="scores">
            
            <div class="bodys">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                    @for ($i = 0; $i < count($nilais['mapel']); $i++)
                        <tr>
                            <td>{{ $i+1 }}.</td>
                            <td>{{ $nilais['mapel'][$i] }}</td>
                            <td>{{ $nilais['nilai'][$i] }}</td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
        <div class="note">
            <h5>Catatan Tambahan ! untuk bisa mengunduh surat kelulusan berikut beberapa <span>Syarat Kelulusan</span> yang harus dipenuhi : </h5>
            <div class="syarat">
                <p>- Siswa telah melaksanakan UKK internal dan eksternal</p>
                <p>- Siswa telah melaksanakan US praktek teori dan Praktek</p>
                <p>- Siswa telah mengumpulkan laporan dan jurnal prakerin</p>
            </div>
        </div>
    </div>

    <div class="rights">
        <div class="rights-top">
            <div class="data-diri">

                <div class="nisn">
                    <p>NISN</p>
                    <p>{{ auth()->user()->nisn }}</p>
                </div>
                <div class="nipd">
                    <p>NIPD</p>
                    <p>{{ auth()->user()->nipd }}</p>
                </div>
                <div class="nama">
                    <p>Nama</p>
                    <p>{{ auth()->user()->nama_siswa }}</p>
                </div>
                <div class="tempat-lahir">
                    <p>Tempat Lahir</p>
                    <p>{{ auth()->user()->tempat_lahir }}</p>
                </div>
                <div class="tgl-lahir">
                    <p>Tanggal Lahir</p>
                    <p>{{ auth()->user()->tanggal_lahir }}</p>
                </div>
                <div class="kompetensi">
                    <p>Kompetensi</p>
                    <p>{{ $user->jurusan->jurusan }}</p>
                </div>
            </div>
        </div>
        
        <div class="buttons">
           
            @if (auth()->user()->ukk == 0 && auth()->user()->us == 0 && auth()->user()->laporan == 0)
                <a href="/generatepdf">
                    <button >
                        <iconify-icon style="font-size: 25px" icon="material-symbols:download-rounded"></iconify-icon>
                        <p>Unduh Surat Kelulusan</p>
                    </button>
                </a>
            @else
                <a href="/">
                    <button >
                        <iconify-icon style="font-size: 25px" icon="material-symbols:download-rounded"></iconify-icon>
                        <p>Unduh Surat Kelulusan</p>
                    </button>
                </a>
            @endif

            <a href="">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="logout">
                        <iconify-icon icon="solar:logout-2-bold" style="color: white; font-size:25px;"></iconify-icon>
                        <p>Keluar</p>
                    </button>
                </form>
            </a>
           
        </div>
    </div>

    @endsection
