<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo-light.png" alt="">
						<p>{!! $tentang->tentang_sekolah ?? 'Belum Ada Tentang Sekolah' !!}</p>
						<div class="social pt-1">
							<a href="{{$set->youtube ?? 'https://youtube.com'}}"><i class="fa fa-youtube-square"></i></a>
							<a href="{{$set->facebook ?? 'https://facebook.com'}}"><i class="fa fa-facebook-square"></i></a>
							<a href="{{'mailto:'.$set->email_sekolah ?? 'https://gmail.com'}}"><i class="fa fa-envelope"></i></a>
							<a href="{{$set->instagram ?? 'https://gmail.com'}}"><i class="fa fa-instagram"></i></a>
							
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Link Singkat</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="{{route('index')}}">Beranda</a></li>
							<li><a href="{{route('daftar_yuk')}}">Daftar</a></li>
							<li><a href="{{route('cek')}}">Cek Datamu</a></li>
							<li><a href="{{route('tentang')}}">Tentang Kami</a></li>
						</ul>
						<ul>
							<li><a href="{{route('fasilitas')}}">Fasilitas</a></li>
							<li><a href="{{route('informasi')}}">Informasi</a></li>
							<li><a href="{{route('video')}}">Video</a></li>
							<li><a href="#">Kontak Kami</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Inforamsi Terbaru</h6>
					<ul class="recent-post">
						@forelse($if as $iif)
						<a href="{{route('baca_info', $iif->slug_info)}}">
						<li>
							<p>{{$iif->judul}}</p>
							<span><i class="fa fa-clock-o"></i>{{$iif->created_at->diffForHumans()}}</span>
						</li>
						</a>
						@empty
						<li>
						<span>" Belum ada informasi terbaru "</span>
						</li>
						@endforelse
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Kontak Kami</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Sindangkerta
Kec. Lohbener, Kabupaten Indramayu
Jawa Barat 45252</p></li>
						<li><p><i class="fa fa-phone"></i> {{$set->telpon_sekolah ?? '-'}}</p></li>
						<li><p><i class="fa fa-envelope"></i> {{$set->email ?? '-'}}</p></li>
						<li><p><i class="fa fa-clock-o"></i> {{$set->hari_buka ?? '-'}} - {{$set->hari_tutup ?? '-'}}: {{$set->jam_buka ?? '-'}} - {{$set->jam_tutup ?? '-'}}</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Coded with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://ariikun.suge.sh" target="_blank">Ariikun</a>
</p>
			</div>		
		</div>
	</footer>