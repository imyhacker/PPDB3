<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Slider</h4>
            </div>
            <div class="card-body table-responsive">
               <table class="table" id="table_slider">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Slider</th>
                            <th>Status Penampil</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($slider as $sld)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$sld->judul_slider}}</td>
                                <td style="text-transform: capitalize">{{$sld->status_slider ?? 'off'}}</td>
                                <td>
                                    <a href="{{route('aktifkan_slider', $sld->id)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
                                    <a href="{{route('nonaktifkan_slider', $sld->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-window-close"></i></a>

                                    <a href="" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>
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
