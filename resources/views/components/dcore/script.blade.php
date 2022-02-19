<!-- General JS Scripts -->
<script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
<script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
<script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
<script src="https://demo.getstisla.com/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="https://demo.getstisla.com/assets/modules/jquery.sparkline.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/chart.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.js"></script>
<script src="https://demo.getstisla.com/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<!-- Page Specific JS File -->
<script src="https://demo.getstisla.com/assets/js/page/index.js"></script>

<!-- Template JS File -->
<script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
<script src="https://demo.getstisla.com/assets/js/custom.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready( function () {
    $('#table_pendaftar').DataTable();
    $('#table_jurusan').DataTable();
    $('#table_file').DataTable();
    $('#table_video').DataTable();


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
</body>

</html>
