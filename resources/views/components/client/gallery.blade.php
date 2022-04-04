<div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gallery-item gi-big set-bg" data-setbg="{{asset('gambar_galeri/g1.JPG')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g1.JPG')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="{{asset('gambar_galeri/g2.JPG')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g2.JPG')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="{{asset('gambar_galeri/g6.jpeg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g6.jpg')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="{{asset('gambar_galeri/g7.jpeg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g7.jpg')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-big set-bg" data-setbg="{{asset('gambar_galeri/g8.jpeg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g8.jpg')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="{{asset('gambar_galeri/g9.jpeg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g9.jpg')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="{{asset('gambar_galeri/g10.jpeg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g10.jpg')}}"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="{{asset('gambar_galeri/g12.jpg')}}">
            <a class="img-popup" href="{{asset('gambar_galeri/g12.jpg')}}"><i class="ti-plus"></i></a>
        </div>

    </div>

</div>
<div class="container">
    <div class="row mt-5 mb-5">
        @forelse($vid as $v)
        <div class="col-md-6 mt-4 ">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$v->id_video}}?rel=0"
                    allowfullscreen></iframe>
            </div>
        </div>
        @empty
        <div class="col-md-12 d-flex justify-content-center">
            <h4>Tidak ada video</h4>
        </div>
        @endforelse
    </div>
</div>
