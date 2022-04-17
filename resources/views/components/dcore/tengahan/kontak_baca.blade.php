<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Kontak Email Belum Di Baca</h4>
            </div>
            <div class="card-body table-responsive">
               <table style="text-transform:capitalize;" class="mb-5">
                   <thead>
                       <tr>
                           <th>Pengirim</th>
                           <th>:</th>
                           <th>{{$d->nama}}</th>
                       </tr>
                       <tr>
                           <th>Email</th>
                           <th>:</th>
                           <th>{{$d->email}}</th>
                       </tr>
                       <tr>
                           <th>Kepada</th>
                           <th>:</th>
                           <th>{{$d->kepada}}</th>
                       </tr>
                       <tr>
                           <th>Pesan</th>
                           <th>:</th>
                           <th class="text-justify">{{$d->pesan}}</th>
                       </tr>
                   </thead>
               </table>
               <a href="mailto:{{$d->email}}?subject=Membalas Keluhan / Saran Kepada {{$d->kepada}} tentang {{$d->pesan}}" class="btn btn-outline-danger btn-block" style="text-decoration: none;"><i class="fa fa-envelope"></i> BALAS EMAIL MELALUI GMAIL</a>
            </div>
        </div>
    </div>

</div>
