<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="{{asset('cln/img/logo.png')}}" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Waktu Kerja:</span>{{$set->hari_buka ?? '-'}} - {{$set->hari_tutup ?? '-'}}: {{$set->jam_buka ?? '-'}} - {{$set->jam_tutup ?? '-'}} WIB</p>
				</div>
				
			</div>
		</div>
	</header>