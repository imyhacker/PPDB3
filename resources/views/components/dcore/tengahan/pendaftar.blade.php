<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendaftar</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table" id="table_pendaftar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pendaftaran</th>
                            <th>Nama Pendaftar</th>
                            <th>Gelombang Pendaftar</th>
                            <th>Status</th>
                            <th>Rekomendasi</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($pendaftar as $p)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$p->kode_pendaftaran}}</td>
                                <td>{{$p->nama_lengkap}}</td>
                                <td>{{$p->gelombang}}</td>
                                <td>
                                @if($p->status_diterima == 0)
                                <span class="badge badge-warning">Sedang Di Proses</span>
                                @elseif($p->status_diterima == 1)
                                <span class="badge badge-info">Lulus</span>
                                @elseif($p->status_diterima == 2)
                                <span class="badge badge-success">Sudah Daftar Ulang</span>
                                @elseif($p->status_diterima == 3)
                                <span class="badge badge-danger">Tidak Lulus</span>
                                @endif
                                </td>
                                <td>{{$p->rekomendasi ?? '-'}}</td>
                                <td>
                                <div class="btn-group dropleft">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu">
  <a href="{{route('terima', $p->kode_pendaftaran)}}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-check"></i></a>
                                    <a href="{{route('daftar_ulang', $p->kode_pendaftaran)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-dollar-sign"></i></a>

                                    <a href="{{route('ditolak', $p->kode_pendaftaran)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i></a>
                                    <a href="{{route('edit', $p->kode_pendaftaran)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('lihat', $p->kode_pendaftaran)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('stream', $p->kode_pendaftaran)}}" class="btn btn-outline-info btn-sm"><i class="fas fa-download"></i></a>
  </div>
</div>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
