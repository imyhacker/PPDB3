<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>

</head>

<body>

    <img src="{{public_path().'/dash/kop.png'}}" alt="">
    <table>
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>Data Pendaftar</b>
            </td>

        </tr>
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td>{{$data->kode_pendaftaran}}</td>
        </tr>
        <tr>
            <td>Jurusan Yang Diambil</td>
            <td>:</td>
            <td>{{$data->jurusan}}</td>
        </tr>
        <tr>
            <td>Gelombang</td>
            <td>:</td>
            <td>{{$data->gelombang}}</td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>{{$data->asal_sekolah}}</td>
        </tr>
        <tr>
            <td>Rekomendasi</td>
            <td>:</td>
            <td>{{$data->rekomendasi ?? '-'}}</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>Identitas Pribadi</b>
            </td>

        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{$data->nama_lengkap}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$data->jenis_kelamin}}</td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>{{$data->nisn}}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
        </tr>
    
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>Gabung Grup Whatsapp</b>
            </td>

        </tr>
        <tr>
            <td>Gabung Grup Whatsapp</td>
            <td>:</td>
            <td><a href="https://youtube.com" target="_blank">Klik Disini</a></td>
        </tr>
       
    
    </table>


</div>
</body>
</html>
