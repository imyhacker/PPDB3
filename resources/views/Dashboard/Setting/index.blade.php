<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Area Setting Sekolah</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#hari">
                                            Hari Buka - Hari Tutup
                                        </button>
                                    </div>
                                    <div class="col-md-6 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#jam">
                                            Jam Buka - Jam Tutup
                                        </button>
                                    </div>
                                    <div class="col-md-6 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#telpon">
                                            Telpon Sekolah
                                        </button>
                                    </div>
                                    <div class="col-md-6 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#email">
                                            Email Sekolah
                                        </button>
                                    </div>
                                    <div class="col-md-4 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#fb">
                                            Facebook
                                        </button>
                                    </div>
                                    <div class="col-md-4 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#ig">
                                            IG
                                        </button>
                                    </div>
                                    <div class="col-md-4 mt-3 mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal"
                                            data-target="#yt">
                                            YouTube
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>

        </div>

        <x-dcore.modal :tag="$tag" />
        <!-- Modal -->
        <div class="modal fade" id="hari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hari Buka - Hari Tutup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Hari Buka</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option disabled selected value>== PILIH HARI BUKA ==</option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jum'at</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Hari Tutup</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option disabled selected value>== PILIH HARI TUTUP ==</option>

                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jum'at</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="jam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Jam Buka - Jam Tutup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jam Buka</label>
                            <input type="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jam Tutup</label>
                            <input type="time" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="telpon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Telpon Sekolah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Telpon Sekolah (RESMI)</label>
                            <input type="number" placeholder="(0234)xxxxxxx" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Sekolah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Email Sekolah (RESMI)</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="fb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Facebook</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Link Facebook</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="ig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Link IG</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Link IG</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->
        <!-- Modal -->
        <div class="modal fade" id="yt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Link Youtube</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Link Youtube</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- STOP -->



        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
