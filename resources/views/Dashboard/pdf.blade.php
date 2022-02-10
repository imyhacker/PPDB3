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
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>A. Identitas Pribadi</b>
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
        <tr>
            <td>Berkebutuhan</td>
            <td>:</td>
            <td>{{$data->kebutuhan_khusus}}</td>
        </tr>
    </table>



    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>B. Identitas Orang Tua</b>
            </td>

        </tr>

        <tr style="margin-top: 1em;">
            <td colspan="3" style="text-transform: uppercase;">
                <b>1. Ayah</b>
            </td>

        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
            <td>{{$data->no_kk}}</td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td>{{$data->nama_ayah}}</td>
        </tr>
        <tr>
            <td>Nomor KTP Ayah</td>
            <td>:</td>
            <td>{{$data->ktp_ayah}}</td>
        </tr>
        <tr>
            <td>Status Ayah</td>
            <td>:</td>
            <td>{{$data->status_ayah}}</td>
        </tr>
        <tr>
            <td>Pendidikan Ayah</td>
            <td>:</td>
            <td>{{$data->pendidikan_ayah}}</td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td>{{$data->pekerjaan_ayah}}</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>2. Identitas Ibu</b>
            </td>

        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td>{{$data->nama_ibu}}</td>
        </tr>
        <tr>
            <td>Nomor KTP Ibu</td>
            <td>:</td>
            <td>{{$data->ktp_ibu}}</td>
        </tr>
        <tr>
            <td>Status Ibu</td>
            <td>:</td>
            <td>{{$data->status_ibu}}</td>
        </tr>
        <tr>
            <td>Pendidikan Ibu</td>
            <td>:</td>
            <td>{{$data->pendidikan_ibu}}</td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td>{{$data->pekerjaan_ibu}}</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>3. Identitas Wali</b>
            </td>

        </tr>
        <tr>
            <td>Nama Wali</td>
            <td>:</td>
            <td>{{$data->nama_wali}}</td>
        </tr>
        <tr>
            <td>Nomor KTP Wali</td>
            <td>:</td>
            <td>{{$data->ktp_wali}}</td>
        </tr>
      
        <tr>
            <td>Pendidikan Wali</td>
            <td>:</td>
            <td>{{$data->pendidikan_wali}}</td>
        </tr>
        <tr>
            <td>Pekerjaan Wali</td>
            <td>:</td>
            <td>{{$data->pekerjaan_wali}}</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>C. Identitas Tempat Tinggal</b>
            </td>
        </tr>
        <tr>
            <td>Desa, RT / RW</td>
            <td>:</td>
            <td>{{$data->desa ?? '-'}}, {{$data->rt ?? '-'}} / {{$data->rw ?? '-'}}</td>
        </tr>
        <tr>
            <td>Kota, Kode POS</td>
            <td>:</td>
            <td>{{$data->kota}}, {{$data->kode_pos}}</td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td>:</td>
            <td>{{$data->alamat}}</td>
        </tr>
    </table>
    <table style="margin-top: 1em;">
        <tr>
            <td colspan="3" style="text-transform: uppercase;">
                <b>D. Identitas Kontak</b>
            </td>
        </tr>
        <tr>
            <td>Nomor HP / Whatsapp</td>
            <td>:</td>
            <td>{{$data->no_hp ?? '-'}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$data->email}}</td>
        </tr>
        <tr>
            <td>Rekomendasi, Nomor Hp Rekomendasi</td>
            <td>:</td>
            <td>{{$data->rekomendasi}}, {{$data->no_rekomendasi}}</td>
        </tr>
    </table>
</div>
</body>
</html>
