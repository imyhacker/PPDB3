<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Video</h3>
            <p>Beberapa Video Kegiatan Di Sekolah Kami</p>
        </div>
        <div class="row">
                @forelse($vid as $v)
                <div class="col-md-6 mt-4 ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$v->id_video}}?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                @empty
                <div class="col-md-12 d-flex justify-content-center">
                    <h1>Tidak ada video</h1>
                </div>
                @endforelse
                <div class="col-md-12 mt-5 d-flex justify-content-center">
                    {{$vid->links()}}
                </div>
        </div>
    </div>
</section>
