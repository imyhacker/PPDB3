<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>{{$data->judul}}</h3>
            <p>Tag : {{$data->tag ?? '-'}}</p>
            <p>Uploaded At : {{$data->created_at->diffForHumans() ?? '-'}}</p>

        </div>
        <div class="row">
            <div class="col-md-8 mt-5">
                {!! $data->isi !!}
            </div>
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h4> <i>Tag</i></h4>
                        <ul class="list-group list-group-flush mt-3">
                            @foreach($tag as $tg)
                            <li class="list-group-item"><a href="" class="text-danger">{{$tg->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h4> <i>Daftar Informasi Terbaru</i></h4>
                        <ul class="list-group list-group-flush mt-3">
                            @foreach($terbaru as $trb)
                            <li class="list-group-item" style="text-transform: capitalize;"><a href="" class="text-default">{{Str::limit($trb->judul, 60)}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h4> <i>Daftar Informasi Acak</i></h4>
                        <ul class="list-group list-group-flush mt-3">
                            @foreach($acak as $ac)
                            <li class="list-group-item" style="text-transform: capitalize;"><a href="" class="text-default">{{Str::limit($ac->judul, 60)}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
