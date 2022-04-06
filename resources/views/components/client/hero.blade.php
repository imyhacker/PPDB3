<section class="hero-section">
		<div class="hero-slider owl-carousel">
		@forelse($slider as $sld)

			<div class="hs-item set-bg" data-setbg="{{asset('gambar_slider/'.$sld->gambar_slider)}}" >
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">{{$sld->judul_slider}}</h2>
								<p class="hs-des">{{ Str::limit(strip_tags($sld->isi_slider), 500, '....') }} </p>
								<a href="{{route('daftar_yuk')}}" class="site-btn" style="color: white">Daftar Sekarang </a>
								<a href="{{route('cek')}}" class="site-btn" style="color: white">Cek Datamu <i class="fa fa-arrow-right"></i> </a>

							</div>
						</div>
					</div>
				</div>
			</div>
			@empty
			<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg vinyl" data-setbg="{{asset('default/guru.jpg')}}" >
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">{{ 'PPDB SMK Telematika Indramayu'}}</h2>
								<p class="hs-des">{{ 'Pembukaan PPDB SMK Telematika Indramayu 2022 / 2023'}} </p>
								<a href="{{route('daftar_yuk')}}" class="site-btn" style="color: white">Daftar Sekarang </a>
								<a href="{{route('cek')}}" class="site-btn" style="color: white">Cek Datamu <i class="fa fa-arrow-right"></i> </a>

							</div>
						</div>
					</div>
				</div>
			</div>
					@endforelse

		</div>

	</section>