	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('cln/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('cln/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('cln/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('cln/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('cln/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('cln/js/main.js')}}"></script>
	<script>
		var a = '{{$counter->batas_waktu}}';
							$(".counter").countdown(a, function(event) {
		$(this).html(event.strftime("<div class='counter-item'><h4>%D</h4>Days</div>" + "<div class='counter-item'><h4>%H</h4>hours</div>" + "<div class='counter-item'><h4>%M</h4>Mins</div>" + "<div class='counter-item'><h4>%S</h4>secs</div>"));
	});
					</script>