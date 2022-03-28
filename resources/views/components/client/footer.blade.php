<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo-light.png" alt="">
						<p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Link Singkat</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="">Beranda</a></li>
							<li><a href="">Daftar</a></li>
							<li><a href="">Cek Datamu</a></li>
							<li><a href="">Tentang Kami</a></li>
						</ul>
						<ul>
							<li><a href="">Fasilitas</a></li>
							<li><a href="">Informasi</a></li>
							<li><a href="">Video</a></li>
							<li><a href="">Kontak Kami</a></li>
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
						<li><p><i class="fa fa-map-marker"></i> 40 Baria Street 133/2, NewYork City,US</p></li>
						<li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
						<li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>