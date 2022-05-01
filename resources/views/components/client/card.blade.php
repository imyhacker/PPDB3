<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card" style="background-color: transparent; ">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                    @forelse($slider as $sl)


                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="$sl->id+1" class="active">
                        </li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('gambar_slider/'.$sl->gambar_slider)}}" style="border-radius: 5%; filter:blur(2px)" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block" >
                                <h5>{{ $sl->judul_slider}}</h5>
                                <p>{!! $sl->isi_slider !!}</p>
                            </div>
                        </div>

                    </div>
                     @empty
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                        </li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('default/guru.jpg')}}" class="d-block w-100" alt="..." style="border-radius: 5%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>PPDB SMK Telematika Indramayu</h5>
                                <p>Pembukaan PPDB SMK Telematika Indramayu Tahun {{date('Y')}} / {{date('Y')+1}}</p>
                            </div>
                        </div>

                    </div>
                    @endforelse
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Pendaftar Hari Ini</p>
                        <p class="fs-30 mb-2">4006</p>
                        <p>Total Pendaftar Hari Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Semua Pendaftar</p>
                        <p class="fs-30 mb-2">61344</p>
                        <p>Total Semua Pendaftar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Informasi Hari Ini</p>
                        <p class="fs-30 mb-2">34040</p>
                        <p>Total Upload Infor Hari Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Semua Informasi Di Upload</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>Total Semua Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
