<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>Status : {{$counter->gelombang ?? 'Belum Ada Gelombang'}} - @if($counter == null) - @elseif($counter->status == 1) Dibuka @else Ditutup @endif</h2>
						<p><i class="fa fa-calendar-o"></i>Sampai Tanggal : {{$counter->batas_waktu ?? '-'}}</p>
						
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="counter">
						<div class="counter-item"><h4>00</h4>Days</div>
						<div class="counter-item"><h4>00</h4>Hrs</div>
						<div class="counter-item"><h4>00</h4>Mins</div>
						<div class="counter-item"><h4>00</h4>secs</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>