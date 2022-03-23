	<!--====== Javascripts & Jquery ======-->
    @if(Route::is('daftar_yuk') )
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
	    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
    <script type="text/javascript">
	    $(document).ready(function () {
	        window.$("#myModal").modal("show");
	    });

	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    @endif

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
	    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
	    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
	</script>
    @if(Route::is('index') || Route::is('cek') || Route::is('fasilitas') || Route::is('informasi'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

	@endif

	<script src="{{asset('cln/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('cln/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('cln/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('cln/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('cln/js/main.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script>
	    var a = '{{$counter->batas_waktu ?? ' - '}}';
	    $(".counter").countdown(a, function (event) {
	        $(this).html(event.strftime("<div class='counter-item'><h4>%D</h4>Days</div>" +
	            "<div class='counter-item'><h4>%H</h4>hours</div>" +
	            "<div class='counter-item'><h4>%M</h4>Mins</div>" +
	            "<div class='counter-item'><h4>%S</h4>secs</div>"));
	    });

	</script>
	<script>
    $(document).ready( function () {
    $('#table_pendaftar').DataTable();
  

} );
</script>
	@if(session('sukses'))
	<script>
	    const Toast = Swal.mixin({
	        toast: true,
	        position: 'top-end',
	        showConfirmButton: false,
	        timer: 3000,
	        timerProgressBar: true,
	        didOpen: (toast) => {
	            toast.addEventListener('mouseenter', Swal.stopTimer)
	            toast.addEventListener('mouseleave', Swal.resumeTimer)
	        }
	    })

	    Toast.fire({
	        icon: 'success',
	        title: "{{session('sukses')}}"
	    })

	</script>
	@elseif(session('gagal'))
	<script>
	    const Toast = Swal.mixin({
	        toast: true,
	        position: 'top-end',
	        showConfirmButton: false,
	        timer: 3000,
	        timerProgressBar: true,
	        didOpen: (toast) => {
	            toast.addEventListener('mouseenter', Swal.stopTimer)
	            toast.addEventListener('mouseleave', Swal.resumeTimer)
	        }
	    })

	    Toast.fire({
	        icon: 'warning',
	        title: "{{session('gagal')}}"
	    })

	</script>
	@elseif($errors->any())
	<script>
	    const Toast = Swal.mixin({
	        toast: true,
	        position: 'top-end',
	        showConfirmButton: false,
	        timer: 3000,
	        timerProgressBar: true,
	        didOpen: (toast) => {
	            toast.addEventListener('mouseenter', Swal.stopTimer)
	            toast.addEventListener('mouseleave', Swal.resumeTimer)
	        }
	    })

	    Toast.fire({
	        icon: 'error',
	        title: "Ada Kesalahan Coba Cek Kembali"
	    })

	</script>
	@endif
