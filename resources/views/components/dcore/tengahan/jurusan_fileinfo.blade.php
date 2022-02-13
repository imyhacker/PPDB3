<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Data Jurusan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table" id="table_jurusan">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Jurusan</td>
                            <td>Opt</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($jurusan as $jj)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$jj->jurusan}}</td>
                            <td>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Data File Informasi</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table" id="table_file">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($finfo as $ff)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$ff->jinfo}}</td>
                            <td>
                                <a href="{{route('download', $ff->id)}}" class="btn btn-outline-info btn-sm"><i class="fas fa-download"></i></a>

                                <a href="{{route('hapus_file', $ff->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
