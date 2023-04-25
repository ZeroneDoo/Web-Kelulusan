@extends('layout/main')

@section('content')
<div class="header">
    <a href="">
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
    
    <div id="left-count", class="left">
        <div class="top">
            <p>PENGUMUMAN</p>
            <P><span>KELULUSAN</span> DALAM</P>
        </div>
        <div class="bottom">
            <div class="time">
                <div class="hari">
                    <p>Hari</p>
                    <p id="days">00</p>
                </div>
                <div class="jam">
                    <p>Jam</p>
                    <p id="hours">00</p>
                </div>
                <div class="menit">
                    <p>Menit</p>
                    <p id="minutes">00</p>
                </div>
                <div class="menit">
                    <p>Detik</p>
                    <p id="seconds">00</p>
                </div>
            </div>
        </div>
    </div>

    <div id="left" class="leftafter">
        <div class="top">
            <p>LIHAT DATA</p>
            <P><span>KELULUSAN</span> DISINI</P>
        </div>
        <div class="bottom">
            <p>Masukkan NISN untuk melihat data kelulusan mu !</p>
            <div class="search-wrapper">
                <form action="{{ route('home.post') }}" method="POST">
                    @csrf
                <input type="search" class="search" id="search" name="nisn" autocomplete="off" placeholder="Nomor Induk Siswa Nasional...">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    </div>

    <div class="right">
        <div class="back1">
            <div class="back2">
                <img src="assets/img/main.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
