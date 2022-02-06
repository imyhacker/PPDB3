<div class="row">

    <div class="col-md-12">
        <h2><i><u>Data Gelombang</u></i></h2>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Gelombang *</label>
            <input type="text" value="{{$gelombang->gelombang ?? 'Tidak Ada Gelombang Saat Ini'}}" class="form-control"
                disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status Gelombang</label>
            <input type="text" value="{{$gelombang->status ?? 'Tidak Ada Gelombang Saat Ini'}}" class="form-control"
                disabled>
        </div>
    </div>

    <div class="col-md-12 mt-4">
        <h2><i><u>Data Pendaftaran</u></i></h2>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jurusan Diambil *</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option disabled selected value>== PILIH JURUSAN ==</option>
                @foreach($jurusan as $jr)
                <option value="{{$jr->jurusan}}">{{$jr->jurusan}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Asal Sekolah *</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Nama Asal Sekolah SMP / MTsN">
        </div>
    </div>



    <div class="col-md-12 mt-4">
        <h2><i><u>Data Pribadi</u></i></h2>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Lengkap *</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin *</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option disabled selected value>== PILIH GENDER ==</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>NISN</label>
            <input type="number" class="form-control" name="asal_sekolah"
                placeholder="Nomor Induk Siswa Nasional (NISN)">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Kota / Kabupaten">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control" name="asal_sekolah" placeholder="Tanggal Lahir">
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label>Nomor KK *</label>
            <input type="number" class="form-control" name="asal_sekolah" placeholder="32121**********">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Agama *</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option disabled selected value>== PILIH AGAMA ==</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Protestan">Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Other">Yang Lainnya</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Siswa Berkebutuhan Khusus</label>
            <select class="form-control" name="siswa_berkebutuhan">
                <option value="Tidak" selected="">Tidak</option>
                <option value="Netra">Netra</option>
                <option value="Rungu">Rungu</option>
                <option value="Grahita Ringan">Grahita Ringan</option>
                <option value="Grahita Sedang">Grahita Sedang</option>
                <option value="Daksa Ringan">Daksa Ringan</option>
                <option value="Daksa Sedang">Daksa Sedang</option>
                <option value="Laras">Laras</option>
                <option value="Wicara">Wicara</option>
                <option value="Tuna Ganda">Tuna Ganda</option>
                <option value="Hiper Aktif">Hiper Aktif</option>
                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                <option value="Bakat Istimewa">Bakat Istimewa</option>
                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                <option value="Narkoba">Narkoba</option>
                <option value="Indigo">Indigo</option>
                <option value="Down Sindrome">Down Sindrome</option>
                <option value="Autis">Autis</option>
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>Alamat Siswa *</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Alamat Lengkap Siswa"></textarea>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>RT</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="RT">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>RW</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="RW">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Kelurahan / Desa</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Kelurahan / Desa">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>Kabupaten / Kota</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Kabupaten / Kota">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Kode POS</label>
            <input type="text" class="form-control" name="asal_sekolah" placeholder="Kode Pos">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Tempat Tinggal</label>

            <select class="form-control" name="tempat_tinggal">
                <option disabled selected value>== PILIH TEMPAT TINGGAL ==</option>
                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                <option value="Bersama Wali">Bersama Wali</option>
                <option value="Pesantren">Pesantren</option>
                <option value="Kos">Kos</option>
                <option value="Asrama">Asrama</option>
                <option value="Panti Asuhan">Panti Asuhan</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>


    <div class="col-md-12 mt-3">
        <h2><i><u>Data Ayah Kandung</u></i></h2>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Ayah *</label>
            <input type="text"  class="form-control" disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status Gelombang</label>
            <input type="text" value="{{$gelombang->status ?? 'Tidak Ada Gelombang Saat Ini'}}" class="form-control"
                disabled>
        </div>
    </div>









</div>
