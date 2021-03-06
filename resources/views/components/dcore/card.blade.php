<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-bolt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Jurusan</h4>
                </div>
                <div class="card-body">
                    {{$j}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-clock"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang Ke</h4>
                </div>
                <div class="card-body">
                {{$gelombang->gelombang ?? 'Tidak Ada Data'}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-key"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Status Gelombang</h4>
                </div>
                <div class="card-body">
                    {{$gelombang->status ?? 'Tidak Ada Data'}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-danger bg-danger">
                <i class="fas fa-eye-slash"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Email Belum Di Baca</h4>
                </div>
                <div class="card-body">
                    {{$ebb}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-danger bg-danger">
                <i class="fas fa-eye"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Email Sudah Di Baca</h4>
                </div>
                <div class="card-body">
                    {{$esb}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-danger bg-danger">
                <i class="fas fa-plane"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Email Sudah Di Balas</h4>
                </div>
                <div class="card-body">
                    {{$esbl}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 1</h4>
                </div>
                <div class="card-body">
                    {{$g1}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-warning">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 2</h4>
                </div>
                <div class="card-body">
                    {{$g2}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-success">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 3</h4>
                </div>
                <div class="card-body">
                    {{$g3}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-secondary">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 4</h4>
                </div>
                <div class="card-body">
                    {{$g4}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-danger">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 5</h4>
                </div>
                <div class="card-body">
                    {{$g5}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-info">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Gelombang 6</h4>
                </div>
                <div class="card-body">
                    {{$g6}}
                </div>
            </div>
        </div>
    </div>


</div>
