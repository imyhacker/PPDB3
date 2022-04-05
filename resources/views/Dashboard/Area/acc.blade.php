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
                                <h4>Area Acc Data</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('update_acc')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Pilih Gelombang</label>
                                        <select name="gelombang" id="jenis_cetak" class="form-control">
                                            <option value="">Pilih Gelombang</option>
                                            <option value="Gelombang_1">Gelombang_1</option>
                                            <option value="Gelombang_2">Gelombang_2</option>
                                            <option value="Gelombang_3">Gelombang_3</option>
                                            <option value="Gelombang_4">Gelombang_4</option>
                                            <option value="Gelombang_5">Gelombang_5</option>
                                            <option value="Gelombang_6">Gelombang_6</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-outline-danger"
                                            value="Acc Semua!">
                                    </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>

        </div>

        <x-dcore.modal :tag="$tag" />
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
