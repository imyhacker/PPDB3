<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Informasi</h3>
				<p>Beberapa Informasi Terbaru Terkait PPDB</p>
			</div>
			<div class="row">
				<!-- course item -->
				@foreach($info as $in)
				<div class="col-lg-4 col-md-6 course-item">
				<a href="{{route('baca_info', $in->slug_info)}}">

					<div class="course-thumb">
						<center class="mb-3">
						<h1>
						<i class="fa fa-bullhorn" style="color: #F6783A;"></i>
						</h1>
						</center>
						
						<div class="course-cat">
							<span>{{$in->tag}}</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> {{$in->created_at->diffForHumans()}}</div>
						<h4 style="text-transform: capitalize">{{$in->judul}}</h4>
					</div>
					</a>

				</div>
				@endforeach
				<!-- course item -->
				
			</div>
		</div>
	</section>