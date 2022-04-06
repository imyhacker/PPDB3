<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Cek Datamu Disini</h3>
            <p>Cek Datamu Jika Sudah Mendaftarkan Diri Lewat Online</p>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                
                <a href="{{$wa->whatsapp ?? ''}}" target="_blank" class="btn btn-success btn-block" style="border-radius: 50px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.8);">Gabung Grup WhatsApp</a>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table" id="table_pendaftar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Gelombang</th>

                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Asal Sekolah</th>
                            <th>Rek</th>
                            <th>Status</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                            @foreach($data as $dt)
                        <tr>
                            
                            <td>{{$no++}}</td>
                            <td>{{$dt->kode_pendaftaran}}</td>
                            <td>{{$dt->gelombang}}</td>

                            <td style="text-transform: uppercase;">{{$dt->nama_lengkap}}</td>
                            <td>{{$dt->jurusan}}</td>
                            <td style="text-transform: uppercase;">{{$dt->asal_sekolah}}</td>
                            <td>{{$dt->rekomendasi ?? '-'}}</td>
                            <td>
                                @if($dt->status_diterima == 0) Diproses @endif
                                @if($dt->status_diterima == 1) Diterima @endif
                                @if($dt->status_diterima == 2) Ditolak @endif

                            </td>
                            <td>
                                <a href="{{route('download_datamu', $dt->kode_pendaftaran)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-download"></i> Download Datamu</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
