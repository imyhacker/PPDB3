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
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
<script>
    var konten2 = document.getElementById("konten2");
      CKEDITOR.replace(konten2,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
 </script>
<script>
    $(document).ready( function () {
    $('#table_pendaftar').DataTable();
    $('#table_jurusan').DataTable();
    $('#table_file').DataTable();
    $('#table_video').DataTable();
    $('#table_akun').DataTable();
    $('#table_info').DataTable();
    $('#table_slider').DataTable();
    $('#table_tag').DataTable();


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
