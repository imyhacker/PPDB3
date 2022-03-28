<x-client.head />

<body>
    <!-- Page Preloder -->
    <!-- {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}} -->

    <!-- header section -->
    <x-client.header />
    <!-- header section end-->


    <!-- Header section  -->
    <x-client.nav />
    <!-- Header section end -->

    <x-client.daftar.index :gelombang="$gelombang" :jurusan="$jurusan" />

    <!-- Footer section -->
    <x-client.footer :if="$if"/>
    <!-- Footer section end-->

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tata Cara Mengisi Formulir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tata Cara Mengisi Formulir PPDB :
                    <div class="container">
                        <ol>
                            <li>Wajib Mengisi Semua Data Yang Memiliki Simbol ( * )</li>
                            <li>Silahkan cek kembali data diri anda mulai dari awal sampai akhir</li>
                            <li>Wajib Mengisi Nomor WHATSAPP (WA), Jika tidak ada WHATSAPP (WA) isikan saja Nomor Telfon yang aktif</li>
                            <li>Dengan mengirim data formulir ini, saya menyatakan telah mengisi formulir dengan benar dan
                                lengkap
                            </li>
                            <li>Untuk Rekomendasi Itu Adalah Form Untuk Siapa Yang Mengajak Anda, Orang Tua / Teman , dll (Isikan Nama Pengajak), Jika Daftar dengan keinginan sendiri isikan saja dengan "DAFTAR SENDIRI"</li>
                            <li>Disarankan Mengisi Form "Kontak Rekomendasi" Jika Ada Yang Mengajak Anda Daftar Online Ke SMK Telematika Indramayu</li>
                            <li>Jika sudah benar mengisi semua data pada formulir online diatas, jangan lupa selesaikan juga ReCaptcha</li>
                            <li>Jika ada kesulitan mengisi form pendaftaran online, langsung saja hubungi CS kami, Terima Kasih</li>
                        </ol>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Saya Paham</button>
                </div>
            </div>
        </div>


        <x-client.script />

</body>

</html>
