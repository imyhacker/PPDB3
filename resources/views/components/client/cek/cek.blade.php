<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table" id="table_id">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Lengkap</th>
                            <th>Asal Sekolah</th>
                            <th>Rekomendasi</th>
                            <th>Status</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->kode_pendaftaran}}</td>
                            <td>{{$d->nama_lengkap}}</td>
                            <td>{{$d->asal_sekolah}}</td>
                            <td>{{$d->rekomendasi ?? "-"}}</td>
                            <td>
                                @if($d->status_diterima == 0)
                                <span class="badge badge-warning">Sedang Di Proses</span>
                                @elseif($d->status_diterima == 1)
                                <span class="badge badge-info">Lulus</span>
                                @elseif($d->status_diterima == 2)
                                <span class="badge badge-success">Sudah Daftar Ulang</span>
                                @elseif($d->status_diterima == 3)
                                <span class="badge badge-danger">Tidak Lulus</span>
                                @endif
                            </td>
                            <td>
                            @if($d->status_diterima == 0)
                                <span class="badge badge-warning">Sedang Di Proses</span>
                                @elseif($d->status_diterima == 1 || $d->status_diterima == 2)
                                <a href="{{route('download_datamu', $d->kode_pendaftaran)}}" class="btn btn-outline-success"><i class="ti-download"></i> Download</a>
                                @elseif($d->status_diterima == 3)
                                <span class="badge badge-danger">Tidak Lulus</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
