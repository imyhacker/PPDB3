<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><h3 style="color: #ED4C67;border-color: black; text-shadow: -1px 0 black, 0 0.5px black, 0.5px 0 black, 0 -1px black;
				"> <b> PPDB SMKTI</b></h3></a>
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