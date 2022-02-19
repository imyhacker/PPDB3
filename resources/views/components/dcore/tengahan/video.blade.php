<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Video</h4>
            </div>
            <div class="card-body table-responsive">
               <table class="table" id="table_video">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Video</th>
                            <th>Channel</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($video as $v)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$v->judul}}</td>
                                <td>{{$v->channel}}</td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v={{$v->id_video}}" target="_blank" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>

</div>
