<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Data Akun Guru</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table" id="table_akun">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($akun as $ak)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$ak->name}}</td>
                                <td>{{$ak->email}}</td>
                                <td>
                                    <a href="{{route('hapus_akun', $ak->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                <h4>Data Informasi</h4>
            </div>
            <div class="card-body table-responsive">
               <table class="table" id="table_info">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($info as $inf)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$inf->judul}}</td>
                            <td>
                                <a href="{{route('edit_info', $inf->id)}}" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{route('hapus_info', $inf->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Tag</h4>
            </div>
            <div class="card-body table-responsive">
               <table class="table" id="table_tag">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tag</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($tag as $tg)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$tg->tag}}</td>
                            <td>
                                <a href="{{route('hapus_info', $tg->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>

</div>
