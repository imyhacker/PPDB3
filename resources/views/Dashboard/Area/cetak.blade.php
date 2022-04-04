<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">  
        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Area Cetak Data</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="table_cetak" style="text-transform: capitalize;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Ujian</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>NISN</th>
                                <th>Nomor HP</th>
                                <th>Minat</th>
                                <th>Gelombang</th>
                                <th>Rek</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; $antrean = 1;@endphp
                            @foreach($data as $dt)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ date('Y').'000'.$antrean++ }}</td>
                                    <td>{{$dt->nama_lengkap ?? '-'}}</td>
                                    <td>{{$dt->asal_sekolah ?? '-'}}</td>
                                    <td>{{$dt->nisn ?? '-'}}</td>
                                    <td>{{$dt->nomor_hp ?? '-'}}</td>
                                    <td>{{$dt->jurusan ?? '-'}}</td>
                                    <td>{{$dt->gelombang ?? '-'}}</td>
                                    <td>{{$dt->rekomendasi ?? '-'}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
        <section class="section">  
        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Area Cetak Kartu Ujian</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="table_cetak_kartu" style="text-transform: capitalize;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>K. Sklh</th>
                                <th>Rombel</th>
                                <th>K.Level</th>
                                <th>K.Kelas</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Minat</th>
                                <th>Gelombang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; $antrean = 1; $antrean2 = 1; @endphp
                            @foreach($data as $dt)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ date('Y').'000'.$antrean++ }}</td>
                                    <td>{{ $dt->kode_pendaftaran }}</td>

                                    <td>{{20215946}}</td>
                                    <td>{{'2143 TKJ'}}</td>
                                    <td>{{'C-X'}}</td>
                                    <td>{{'C-X'}}</td>
                                    <td>{{$dt->nama_lengkap ?? '-'}}</td>
                                    <td>{{$dt->jenis_kelamin ?? '-'}}</td>
                                    <td>{{$dt->jurusan ?? '-'}}</td>
                                    <td>{{$dt->gelombang ?? '-'}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.modal :tag="$tag"/>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />