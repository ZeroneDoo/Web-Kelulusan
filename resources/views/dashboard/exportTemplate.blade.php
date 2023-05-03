<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Kelulusan</title>
</head>
<body>
    <div class="container" >
        
    <img src="assets/img/kopSurat.png" style="height:230px;  margin-top:-50px; " alt="">

        <h4 style="text-align: center; margin-top:-2px;"><u>SURAT KETERANGAN LULUS</u></h4> 
        <p style="text-align: center; font-size:12px; margin-top:-18px;">Nomor :  49/421.5-SMK.TB/KS/V/2023</p>
        <div class="content" style="padding-left: 50px; padding-right: 50px;">
            <p style="font-size: 14px">Kepala SMK Taruna Bhakti selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran 2022/2023 berdasarkan : </p>
            <ol>
                <li style="font-size: 14px">Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013;</li>
                <li style="font-size: 14px">Kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang-undangan ;</li>
                <li style="font-size: 14px">Rapat Pleno Dewan Guru tentang Kelulusan pada tanggal 04 Mei 2023.</li>
            </ol>
            <p style="font-size: 14px">Menerangkan bahwa :</p>
            <table>
                <tr>
                    <td style="width:250px; font-size: 14px">Nama</td>
                    <td style="width:50px; font-size: 14px">:</td>
                    <td style="font-size: 14px">{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Tempat Tanggal Lahir</td>
                    <td style="font-size: 14px">:</td>
                    <td style="font-size: 14px">{{ $siswa->tempat_lahir}}, {{  $siswa->tanggal_lahir  }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Nama Orang Tua</td>
                    <td style="font-size: 14px">:</td>
                    <td style="font-size: 14px">{{ $siswa->nama_wali }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Nomor Induk Siswa</td>
                    <td style="font-size: 14px">:</td>
                    <td style="font-size: 14px">{{ $siswa->nipd }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Nomor Induk Siswa Nasional</td>
                    <td style="font-size: 14px">:</td>
                    <td style="font-size: 14px">00{{ $siswa->nisn }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Peminatan / Kompetensi Keahlian</td>
                    <td style="font-size: 14px">:</td>
                    <td style="font-size: 14px">{{ $siswa->jurusan->jurusan }}</td>
                </tr>
                <tr>
                    <td style="font-size: 14px">Dinyatakan</td>
                    <td style="font-size: 14px">:</td>
             
                    <td style="font-size: 14px"><b>L U L U S</b></td>
                </tr>
              
            </table>
            <p style="font-size: 14px;">dengan nilai sebagai berikut :</p>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                  <th style="border: 1px solid black; width: 50px; font-size: 14px">No.</th>
                  <th style="border: 1px solid black; width: 450px; font-size: 14px">Mata Pelajaran</th>
                  <th style="border: 1px solid black; width: 70px;font-size: 14px">Nilai</th>
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 14px; font-size: 11px"><b>Muatan Nasional</b></td>
                    <td></td>
                </tr>
                <!-- Muatan Nasional -->
                <tr>
                    <td style="text-align: center; font-size: 11px"> 1.</td>
                    <td style="padding-left: 10px; font-size: 11px"> Pendidikan Agama dan Budi Pekerti</td>
                    <td style="text-align: center;font-size: 11px">{{ $nilai->pai }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;font-size: 11px"> 2.</td>
                    <td style="padding-left: 10px;font-size: 11px"> Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td style="text-align: center;font-size: 11px">{{ $nilai->pkn }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Bahasa Indonesia</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->bindo }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 4.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Matematika</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->mtk }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 5.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Sejarah Indonesia</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->sindo }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 6.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Bahasa Inggris</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->bing }}</td>
                </tr>

                <!-- Muatan Kewilayahan -->
                <tr>
                    <td colspan="2" style="padding-left: 14px; font-size:11px;"><b>Muatan Kewilayahan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 1.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Seni Budaya</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->senbud }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 2.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Pendidikan Jasmani,Olahraga dan Kesehatan</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->pjok }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Bahasa Sunda</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->basun }}</td>
                </tr>
               
                
                <!-- Muatan Peminatan Kejuruan -->
                <tr>
                    <td colspan="2" style="padding-left: 14px; font-size:11px;"><b>Muatan Peminatan Kejuruan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 1.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Simulasi dan Komunikasi Digital</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->simdig }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 2.</td>
                    <td style="padding-left: 10px; font-size:11px;"> {{ ($siswa->jurusan_id == 4) ? 'Tinjauan Seni' : 'Fisika' }}</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->f_ts }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:11px;">{{ ($siswa->jurusan_id == 4) ? 'Dasar-dasar Kreativitas':'Kimia' }} 	</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->k_ddk }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 4.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Dasar Program Keahlian</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->dpk }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:11px;"> 5.</td>
                    <td style="padding-left: 10px; font-size:11px;"> Kompetensi Keahlian</td>
                    <td style="text-align: center; font-size:11px;">{{ $nilai->kk }}</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center; font-size:11px;"><b>Rata Rata</b></td>
                    <td style="text-align: center; font-size:14px;">
                        <b>{{ $nilai->rata_rata }}</b>
                    </td>
                </tr>
            </table>
            <div class="footer" style="margin-left: 350px;">
                <p style="font-size: 14px">Depok, 05 Mei 2023</p>
                <p style="font-size: 14px"><b>Kepala Sekolah SMK Taruna Bhakti,</b></p>
                <div class="" style="width: 100%; height: 20px; font-size:14px;"></div>
                <p style="font-size: 14px"><b><u>Nursidik, ST</u></b></p>
                {{-- <p style="font-size: 14px">NIP 19790911200411201</p> --}}
            </div>
        </div>  

    </div>
</body>
</html>