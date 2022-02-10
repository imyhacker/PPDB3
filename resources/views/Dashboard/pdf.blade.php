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
    </table>
    <table>
        <tr>
            <td colspan="3" style="text-transform: uppercase;margin-top: 1em;">
                <b>A. Identisa Pribadi</b>
            </td>

        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{$data->nama_siswa}}</td>
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
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{$data->tempat_lahir}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->tanggal_lahir}}</td>
        </tr>
        <tr>
            <td>Berkebutuhan</td>
            <td>:</td>
            <td>{{$data->siswa_berkebutuhan}}</td>
        </tr>
    </table>



    <table>
        <tr>
            <td colspan="3" style="text-transform: uppercase;margin-top: 1em;">
                <b>A. Identitas Pribadi</b>
            </td>

        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>....</td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Berkebutuhan</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>RT</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>RW</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Kelurahan / Desa</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Kabupaten / Kota</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Tempat Tinggal</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Whatsapp</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Rekomendasi</td>
            <td>:</td>
            <td>....</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;"">
            <b>B. Identitas Orang Tua</b> 
        </td>
           
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>No KTP Ayah</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pendidikan Ayah</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>No KTP Ibu</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pendidikan Ibu</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td>....</td>
        </tr>
    </table>
    <table  style=" margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;"">
            <b>c. Identitas wali</b> 
        </td>
           
        </tr>
        <tr>
            <td>Nama Wali</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>No KTP Wali</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pendidikan Wali</td>
            <td>:</td>
            <td>....</td>
        </tr>
        <tr>
            <td>Pekerjaan Wali</td>
            <td>:</td>
            <td>....</td>
        </tr>
        
    </table>
</div>
</body>
</html>
