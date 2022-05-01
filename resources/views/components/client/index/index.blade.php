<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">
                @if($counter->status == 1)
                Pendaftaran Siswa Baru SMK Telematika Indramayu Telah Dibuka
                @else
                Pendaftaran Siswa Baru SMK Telematika Indramayu Telah Ditutup
                            @endif    
</p>
                <p class="font-weight-500">PPDB SMK Telematika Indramayu Tahun {{date('Y')}} /
                    {{date('Y')+1}}</p>
                </p>
                <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                        <p class="text-muted">Gelombang</p>
                        <h3 class="text-primary fs-30 font-weight-medium">{{$counter->gelombang}}</h3>
                    </div>
                    <div class="mr-5 mt-3">
                        <p class="text-muted">Status Gelombang</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                            @if($counter->status == 1)
                            <span class="badge badge-success">Di Buka</span>
                            @else
                            <span class="badge badge-danger">Di Tutup</span>
                            @endif
                        </h3>
                    </div>
                    <div class="mr-5 mt-3">
                        <p class="text-muted">Sampai Tanggal</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                            {{date('d-m-Y', strtotime($counter->batas_waktu))}}</h3>
                    </div>
                    <div class="mt-3 mb-4">
                        <p class="text-muted">Semua Pendaftar</p>
                        <h3 class="text-primary fs-30 font-weight-medium">{{$pendaftar}} <i class="icon-user"></i></h3>
                    </div>
                    <img src="{{asset('cln/images/gambarku.jpeg')}}" class="img-fluid" style="border-radius: 5px;" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Video Kegiatan</p>
                                        <a href="#" class="text-info">Lihat Semua</a>
                                    </div>
                                    <p class="font-weight-500">Ini adalah beberapa video video kegiatan sekolah yang telah dilakukan oleh seluruh siswa dan guru SMK Telematika Indramayu</p>
                                    </p>
                                    <div class="row">
                @forelse($vid as $v)
                <div class="col-md-12 mt-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$v->id_video}}?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                @empty
                <div class="col-md-12 mt-5 d-flex justify-content-center">
                    <p>"Tidak ada video Terkait SMK Telematika Indramayu"</p>
                </div>
                @endforelse
               
        </div>
                                </div>
                            </div>
                        </div>
</div>
