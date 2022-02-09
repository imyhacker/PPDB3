<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendaftar</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pendaftaran</th>
                            <th>Nama Pendaftar</th>
                            <th>Gelombang Pendaftar</th>
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
                                <td>{{$p->rekomendasi}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i></a>
                                    <a href="" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-outline-info btn-sm"><i class="fas fa-download"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>