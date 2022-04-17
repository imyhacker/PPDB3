<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Kontak Kami</h3>
            <p>Hubungi Kami Dengan Beberapa Kontak Di Bawah</p>
        </div>
        <div class="row">
            <!-- course item -->

            <div class="col-md-12 course-item d-flex justify-content-center">
                <form action="{{route('kontak_send')}}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        @error('nama')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Alamat Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Alamat Email">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label>Disampaikan Kepada</label>
                            <select class="form-control" name="kepada" >
                                <option disabled selected valiue>Disampaikan Kepada </option>
                                <option>Customer Service (CS)</option>
                                <option>Technical Support</option>
                            </select>
                            @error('kepada')
                        {{$message}}
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label>Pesan Kamu</label>
                            <textarea id="" cols="10" rows="10" name="pesan"  class="form-control"
                                placeholder="Pesan Kamu...."></textarea>
                                @error('pesan')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

    <div class="col-md-12 mt-2">
        <div class="form-group mt-2">

           
            {!! ReCaptcha::htmlScriptTagJsApi() !!}
            {!! htmlFormSnippet() !!}
            
        </div>
    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-success btn-block shadow-lg"
                                style="border-radius: 10em;" value="Kirim Pesanmu">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5 d-flex justify-content-center">
                <div class="container">
                    <div class="row">


                        <div class="col-md-4">
                            <a href="{{$set->facebook ?? ''}}">
                                <div class="card border-secondary mb-3" style="box-shadow: 2px 2px 7px aqua;">
                                    <div class="card-header">Facebook</div>
                                    <div class="card-body text-secondary">
                                        <h2 class="card-title d-flex justify-content-center"><i
                                                class="fa fa-facebook"></i>
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{$set->instagram ?? ''}}">

                                <div class="card border-secondary mb-3" style="box-shadow: 2px 2px 7px magenta;">
                                    <div class="card-header">Instagram</div>
                                    <div class="card-body text-secondary">
                                        <h2 class="card-title d-flex justify-content-center"><i
                                                class="fa fa-instagram"></i>
                                        </h2>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-md-4">
                            <a href="{{$set->whatsapp ?? ''}}">

                                <div class="card border-secondary mb-3" style="box-shadow: 2px 2px 7px lime;">
                                    <div class="card-header">WhatsApp</div>
                                    <div class="card-body text-secondary">
                                        <h2 class="card-title d-flex justify-content-center"><i
                                                class="fa fa-whatsapp"></i>
                                        </h2>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-6">
                            <a href="{{$set->youtube ?? ''}}">

                                <div class="card border-secondary mb-3" style="box-shadow: 2px 2px 7px red;">
                                    <div class="card-header">YouTube</div>
                                    <div class="card-body text-secondary">
                                        <h2 class="card-title d-flex justify-content-center"><i
                                                class="fa fa-youtube"></i>
                                        </h2>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-6">
                            <a href="mailto:{{$set->email_sekolah ?? '-'}}">

                                <div class="card border-secondary mb-3" style="box-shadow: 2px 2px 7px yellow;">
                                    <div class="card-header">Email</div>
                                    <div class="card-body text-secondary">
                                        <h2 class="card-title d-flex justify-content-center"><i
                                                class="fa fa-envelope"></i>
                                        </h2>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
