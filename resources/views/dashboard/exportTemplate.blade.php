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
        
    <img src="assets/img/kopSurat.jpg" style="height:205px;  margin-top:-50px; padding-left: 30px; " alt="">

        <h4 style="text-align: center;"><u>SURAT KETERANGAN LULUS</u></h4> 
        <p style="text-align: center; font-size:12px; margin-top:-18px;">Nomor :  49/421.5-SMK.TB/KS/V/2023</p>
        <div class="content" style="padding-left: 70px; padding-right: 50px;">
            <p style="font-size: 12px">Kepala SMK Taruna Bhakti selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran 2022/2023 berdasarkan : </p>
            <ol>
                <li style="font-size: 12px">Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013;</li>
                <li style="font-size: 12px">Kriteria kelulusan dari satuan pendidikan sesuai dengan peraturan perundang-undangan ;</li>
                <li style="font-size: 12px">Rapat Pleno Dewan Guru tentang Kelulusan pada tanggal 04 Mei 2023.</li>
            </ol>
            <p style="font-size: 12px">Menerangkan bahwa :</p>
            <table>
                <tr>
                    <td style="width:250px; font-size: 12px">Nama</td>
                    <td style="width:30px; font-size: 12px">:</td>
                    <td style="font-size: 12px">{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Tempat Tanggal Lahir</td>
                    <td style="font-size: 12px">:</td>
                    <td style="font-size: 12px">{{ $siswa->tempat_lahir}}, {{  $siswa->tanggal_lahir  }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Nama Orang Tua</td>
                    <td style="font-size: 12px">:</td>
                    <td style="font-size: 12px">{{ $siswa->nama_wali }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Nomor Induk Siswa</td>
                    <td style="font-size: 12px">:</td>
                    <td style="font-size: 12px">{{ $siswa->nipd }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Nomor Induk Siswa Nasional</td>
                    <td style="font-size: 12px">:</td>
                    <td style="font-size: 12px">00{{ $siswa->nisn }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Peminatan / Kompetensi Keahlian</td>
                    <td style="font-size: 12px">:</td>
                    <td style="font-size: 12px">{{ $siswa->jurusan->jurusan }}</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">Dinyatakan</td>
                    <td style="font-size: 12px">:</td>
             
                    <td style="font-size: 12px;"><b>L U L U S</b></td>
                </tr>
              
            </table>
            <p style="font-size: 12px;">dengan nilai sebagai berikut :</p>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                  <th style="border: 1px solid black; width: 50px; font-size: 12px">No.</th>
                  <th style="border: 1px solid black; width: 450px; font-size: 12px">Mata Pelajaran</th>
                  <th style="border: 1px solid black; width: 70px;font-size: 12px">Nilai</th>
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 12px; font-size: 12px"><b>Muatan Nasional</b></td>
                    <td></td>
                </tr>
                <!-- Muatan Nasional -->
                <tr>
                    <td style="text-align: center; font-size: 12px"> 1.</td>
                    <td style="padding-left: 10px; font-size: 12px"> Pendidikan Agama dan Budi Pekerti</td>
                    <td style="text-align: center;font-size: 12px">{{ str_replace('.',',',$nilai->pai) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;font-size: 12px"> 2.</td>
                    <td style="padding-left: 10px;font-size: 12px"> Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td style="text-align: center;font-size: 12px">{{ str_replace('.',',',$nilai->pkn) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Bahasa Indonesia</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->bindo) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 4.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Matematika</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->mtk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 5.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Sejarah Indonesia</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->sindo) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 6.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Bahasa Inggris</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->bing) }}</td>
                </tr>

                <!-- Muatan Kewilayahan -->
                <tr>
                    <td colspan="2" style="padding-left: 12px; font-size:12px;"><b>Muatan Kewilayahan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 1.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Seni Budaya</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->senbud) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 2.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Pendidikan Jasmani,Olahraga dan Kesehatan</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->pjok) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Bahasa Sunda</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->basun) }}</td>
                </tr>
               
                
                <!-- Muatan Peminatan Kejuruan -->
                <tr>
                    <td colspan="2" style="padding-left: 12px; font-size:12px;"><b>Muatan Peminatan Kejuruan</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 1.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Simulasi dan Komunikasi Digital</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->simdig) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 2.</td>
                    <td style="padding-left: 10px; font-size:12px;"> {{ ($siswa->jurusan_id == 5) ? 'Tinjauan Seni' : 'Fisika' }}</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->f_ts) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 3.</td>
                    <td style="padding-left: 10px; font-size:12px;">{{ ($siswa->jurusan_id == 5) ? 'Dasar-dasar Kreativitas':'Kimia' }} 	</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->k_ddk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 4.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Dasar Program Keahlian</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->dpk) }}</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size:12px;"> 5.</td>
                    <td style="padding-left: 10px; font-size:12px;"> Kompetensi Keahlian</td>
                    <td style="text-align: center; font-size:12px;">{{ str_replace('.',',',$nilai->kk) }}</td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center; font-size:12px;"><b>Rata Rata</b></td>
                    <td style="text-align: center; font-size:12px;">
                        <b>{{ str_replace('.',',',$nilai->rata_rata) }}</b>
                    </td>
                </tr>
            </table>
            <div class="footer" style="margin-left: 400px;">
                <p style="font-size: 12px">Depok, 05 Mei 2023</p>
                <p style="font-size: 12px; margin-top:-10px;"><b>Kepala SMK Taruna Bhakti</b></p>
               
                <img src="assets/img/ttd-stempel.png" style="width: 130px; margin-top:-5px;" alt="">
                <p style="font-size: 12px; margin-top:-5px;"><b><u>Nursidik, ST</u></b></p>
                {{-- <p style="font-size: 12px">NIP 19790911200411201</p> --}}
            </div>
        </div>  

    </div>
</body>
</html>