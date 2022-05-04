<x-client.header />

<body>
    <div class="container-scroller">
        <x-client.navbar />
        <div class="container-fluid page-body-wrapper">
            <x-client.sidebar />
            <div class="content-wrapper">
            <x-client.ucapan :title="$title" :desk="$desk"/>

                <!-- BATAS INDEX -->
               <x-client.daftar.daftar :gelombang="$gelombang" :jurusan="$jurusan"/>
                <!-- BATAS INDEX -->

                <x-client.footer />
            </div>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tata Cara Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
            <li>
                <p>
                    <b>Pendaftaran</b>
                </p>
                <p>
                    Pendaftaran dilakukan melalui website <a href="https://ppdb.smktelematikaindramayu.sch.id">ppdb.smktelematikaindramayu.sch.id</a>
                </p>
                <p>
                    Sebelum mendaftar silahkan untuk  <a href="{{route('cek')}}">mengecek</a> apakah anda sudah terdaftar sebelumnya.
                </p>
                <p>
                    Pendaftaran dilakukan dengan mengisi formulir pendaftaran yang telah disediakan.
                </p>
                <p>
                    Formulir pendaftaran dapat dilihat di menu <b>Pendaftaran</b>
                </p>
            </li>
            <li>
                <p>
                    <b>Pengisian Formulir</b>
                </p>
                <p>
                    Pada formulir pendaftaran, isi data diri dengan lengkap dan benar.
                </p>
                <p>
                    Isikan data diri dengan lengkap dan benar pada kolom yang memiliki ikon ( * ).
                </p>
                <p>
                    Jangan lupa selesaikan chaptcha yang ada pada formulir pendaftaran.
                </p>
                <p>
                    Jangan lupa selesaikan pendaftaran dengan menekan tombol <b>Kirim Data Formulir</b>
                </p>
                <p>
                    Jika anda kesulitan dalam mengisi formulir pendaftaran, silahkan hubungi admin pada menu <b>Kontak</b> atau bisa melihat video pendaftaran di sini.
                </p>
            </li>
            <li>
                <p>
                    <b>Pengumuman</b>
                </p>
                <p>
                    Setelah pendaftaran selesai, jangan lupa selalu cek website ppdb untuk melihat status apakah anda di terima.
                </p>
                <p>
                    Kami akan mengabari anda melalui WhatsApp dan Email yang anda daftarkan pada formulir
                </p>
                <p>
                    Jika anda tidak menerima email, silahkan cek folder spam atau spam filter anda.
                </p>
                <p>
                    Jika anda tidak menerima email atau WhatsApp, silahkan hubungi admin pendaftaran.
                </p>
            </li>
            <li>
                <p>
                    <b>Tes Dasar</b>
                </p>
                <p>
                    Sebelum anda melakukan daftar ulang anda harus melakukan tes dasar.
                </p>
            </li>
            <li>
                <p>
                    <b>Daftar Ulang</b>
                </p>
                <p>
                    Silahkan lakukan daftar ulang jika anda sudah berhasil di terima di oleh sistem.
                </p>
                <p>
                    Jika anda sudah melalukan daftar ulang, admin akan memperbaharui status anda.
                </p>
               
            </li>
            
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Paham & Lanjutkan</button>
      </div>
    </div>
  </div>
</div>


    <x-client.script />
    <script>
        $(document).ready(function() {
            $('#myModal').modal('show')
          //alert('asd');
        });
    </script>
</body>

</html>
