<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Kelulusan</title>

    <style>
        *{
            padding-bottom: 0;
            padding-top: 0;
        }
        body{
            margin-bottom:0; 
        }
    </style>
</head>


<body>
    <div class="container" >
        
    <img src="assets/img/kopSurat.jpg" style="height:200px;  margin-top:-70px; padding-left: 30px; margin-bottom:-13px;" alt="">
        <h4 style="text-align: center;"><u>SURAT KETERANGAN LULUS</u></h4> 
        <p style="text-align: center; font-size:12pt; margin-top:-18px;">Nomor :  49/421.5-SMK.TB/KS/V/2023</p>
        <div class="content" style="padding-left: 70px; padding-right: 50px;">
            <p style="font-size: 12pt; margin-top:-10px;">Kepala SMK Taruna Bhakti selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran 2022/2023 berdasarkan : </p>
            <ol style="margin-top:-20px;">
                <li style="font-size: 12pt">Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013;</li>
                <li style="font-size: 12pt">Kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang-undangan ;</li>
                <li style="font-size: 12pt">Rapat Pleno Dewan Guru tentang Kelulusan pada tanggal 04 Mei 2023.</li>
            </ol>
            <p style="font-size: 12pt; margin-top:-15px;">Menerangkan bahwa :</p>
            <table style="margin-top:-15px;">
                <tr>
                    <td style="width:250px; font-size: 12pt">Nama</td>
                    <td style="width:30px; font-size: 12pt">:</td>
                    <td style="font-size: 12pt">{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Tempat Tanggal Lahir</td>
                    <td style="font-size: 12pt">:</td>
                    <td style="font-size: 12pt">{{ $siswa->tempat_lahir}}, {{  $siswa->tanggal_lahir  }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Nama Orang Tua</td>
                    <td style="font-size: 12pt">:</td>
                    <td style="font-size: 12pt">{{ $siswa->nama_wali }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Nomor Induk Siswa</td>
                    <td style="font-size: 12pt">:</td>
                    <td style="font-size: 12pt">{{ $siswa->nipd }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Nomor Induk Siswa Nasional</td>
                    <td style="font-size: 12pt">:</td>
                    <td style="font-size: 12pt">00{{ $siswa->nisn }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Peminatan / Kompetensi Keahlian</td>
                    <td style="font-size: 12pt">:</td>
                    <td style="font-size: 12pt">{{ $siswa->jurusan->jurusan }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12pt">Dinyatakan</td>
                    <td style="font-size: 12pt">:</td>
             
                    <td style="font-size: 12pt;"><b>L U L U S</b></td>
                </tr>
              
            </table>
            <p style="font-size: 12pt; margin-top:-2px;">dengan nilai sebagai berikut :</p>
            <table border="1" cellpading="0" style="border-collapse: collapse; margin-top:-10px;">
                <tr>
                  <th style=" width: 50px; font-size: 12pt">No.</th>
                  <th style=" width: 450px; font-size: 12pt">Mata Pelajaran</th>
                  <th style=" width: 70px;font-size: 12pt">Nilai</th>
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 12px; font-size: 12pt"><b>Muatan Nasional</b></td>
                    <td></td>
                </tr>
                <!-- Muatan Nasional -->
                <tr>
                    <td style="text-align: center; font-size: 12pt"> 1.</td>
                    <td style="padding-left: 10px; font-size: 12pt"> Pendidikan Agama dan Budi Pekerti</td>
                    <td style="text-align: center;font-size: 12pt">{{ str_replace('.',',',$nilai->pai) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;font-size: 12pt"> 2.</td>
                    <td style="padding-left: 10px;font-size: 12pt"> Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td style="text-align: center;font-size: 12pt">{{ str_replace('.',',',$nilai->pkn) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Bahasa Indonesia</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->bindo) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 4.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Matematika</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->mtk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 5.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Sejarah Indonesia</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->sindo) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 6.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Bahasa Inggris</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->bing) }}</td>
                </tr>

                <!-- Muatan Kewilayahan -->
                <tr>
                    <td colspan="2" style="padding-left: 12pt; font-size:12pt;"><b>Muatan Kewilayahan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 1.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Seni Budaya</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->senbud) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 2.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Pendidikan Jasmani,Olahraga dan Kesehatan</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->pjok) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Bahasa Sunda</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->basun) }}</td>
                </tr>
               
                
                <!-- Muatan Peminatan Kejuruan -->
                <tr>
                    <td colspan="2" style="padding-left: 12pt; font-size:12pt;"><b>Muatan Peminatan Kejuruan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 1.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Simulasi dan Komunikasi Digital</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->simdig) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 2.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> {{ ($siswa->jurusan_id == 5) ? 'Tinjauan Seni' : 'Fisika' }}</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->f_ts) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12pt;">{{ ($siswa->jurusan_id == 5) ? 'Dasar-dasar Kreativitas':'Kimia' }} 	</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->k_ddk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 4.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Dasar Program Keahlian</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->dpk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12pt;"> 5.</td>
                    <td style="padding-left: 10px; font-size:12pt;"> Kompetensi Keahlian</td>
                    <td style="text-align: center; font-size:12pt;">{{ str_replace('.',',',$nilai->kk) }}</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center; font-size:12pt;"><b>Rata Rata</b></td>
                    <td style="text-align: center; font-size:12pt;">
                        <b>{{ str_replace('.',',',$nilai->rata_rata) }}</b>
                    </td>
                </tr>
            </table>
            <div class="footer" style="margin-left: 380px;">
                <p style="font-size: 12pt; margin-top:-1px;">Depok, 05 Mei 2023</p>
                <p style="font-size: 12pt; margin-top:-15px;"><b>Kepala SMK Taruna Bhakti</b></p>
               
                <img src="assets/img/ttd-stempel.png" style="width: 131px; margin-top:-15px; margin-left:-25px;" alt="">
                <p style="font-size: 12pt; margin-top:-15px;"><b><u>Nursidik, ST</u></b></p>
                {{-- <p style="font-size: 12pt">NIP 19790911200411201</p> --}}
            </div>
        </div>  

    </div>
</body>
</html>