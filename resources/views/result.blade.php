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
        <div class="searchs-wrapper">
            <form action="">
                <input type="search" class="searchs" id="search" value="{{ auth()->user()->nisn }}"placeholder="Nomor Induk Siswa Nasional...">
                <button type="submit">Cari</button>
            </form>
        </div>
        <div class="announce">
            <p>Selamat anda dinyatakan <span>LULUS !</span> dengan nilai Ujian Sekolah sebagai berikut
            </p>
        </div>
        <div class="scores">
            <div class="headers">
                <p>Nilai Ujian Sekolah</p>
                <div class="date">
                    <iconify-icon style="font-size: 22px" icon="material-symbols:calendar-month"></iconify-icon>
                    <p>3 - 8 April 2023</p>
                </div>
            </div>
            <div class="bodys">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>90</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="buttons">
            <a href="">
                <button >
                    <iconify-icon style="font-size: 25px" icon="material-symbols:open-in-new-down"></iconify-icon>
                    <p>Lihat Surat Kelulusan</p>
                </button>
            </a>
            <a href="">
                <button >
                    <iconify-icon style="font-size: 25px" icon="material-symbols:download-rounded"></iconify-icon>
                    <p>Unduh Surat Kelulusan</p>
                </button>
            </a>
            <a href="">
                <button >
                    <iconify-icon style="font-size: 25px" icon="material-symbols:download-rounded"></iconify-icon>
                    <p>Unduh Transkrip nilai</p>
                </button>
            </a>
        </div>
    </div>

    <div class="rights">
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
            <p>{{ $jurusan->jurusan->jurusan }}</p>
        </div>
    </div>

    @endsection
