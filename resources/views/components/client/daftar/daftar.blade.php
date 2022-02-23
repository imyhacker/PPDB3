<section class="mt-5 d-flex align-items-center">

    <div class="container">
        <div class="row">

            <div class="section-title">
                <h2 style="text-transform: capitalize;">Form Pendaftaran</h2>

            </div>

            <div class="col-md-12 mt-5">
                <x-dcore.formulir :gelombang="$gelombang" :jurusan="$jurusan" />
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Petunjuk Pengisian Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <ol>
                        <font color="red">PERHATIAN : </font>
                        <li>Isian dengan kode (*) wajib diisi;</li>
                        <li>Silahkan cek kembali data isian anda mulai dari awal sampai akhir;</li>
                        <li>Dengan mengirim formulir ini, saya menyatakan telah mengisi formulir dengan benar dan
                            lengkap;
                        </li>
                        <li>Untuk Rekomendasi Adalah Form Untuk Siapa Yang Mengajak Masuk Ke SMK Telematika</li>
                        <li>Isi Captcha Sampai Berhasil Kemudian Klik Tombol Hijau Di Bawah</li>

                    </ol>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->
