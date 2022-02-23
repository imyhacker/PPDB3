<section class="mt-5 d-flex align-items-center">

    <div class="container">
        <div class="row">

            <div class="section-title">
                <h2 style="text-transform: capitalize;">Semua Informasi</h2>

            </div>

            <div class="col-md-12 mt-5">
                <div class="row">
                    @foreach($data as $d)
                    <div class="col-md-4 mt-3">
                        <div class="card" >
                            <div class="card-body shadow-sm">
                                <h5 class="card-title">{{$d->judul}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Added At : {{$d->created_at->diffForHumans()}}</h6>
                                <a href="{{route('baca_info', $d->slug_info)}}" class="card-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->
