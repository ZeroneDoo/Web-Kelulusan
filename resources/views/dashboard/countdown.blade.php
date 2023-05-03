@extends('dashboard/layout/app')

@section('titles')
Hitung Mundur
@endsection
@section('content')
<div class="container-fluid py-4 px-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card pb-0 d-flex justify-content-between px-3 pt-3">
                    <h5>Atur Jadwal Hitung Mundur</h5>
                    <p class="text-sm" style="opacity:0.6;">Jadwal hitung mundur ini digunakan untuk mengatur hitung mundur yang terdapat pada halaman utama, anda dapat mengatur waktu yang dituju disini.</p>
                    <form action="{{ route('post.countdown') }}" method="POST">
                        @csrf
                        <input type="datetime-local" name="time" style="width: 70vw; margin-top:5px; padding: 10px; border-radius:10px; border:0.5px solid rgba(0, 0, 0, 0.435);">
                       
                        <br>
                        <button type="submit" class="btn text-capitalize" style="margin-top:15px; width:150px;">Atur Jadwal</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
