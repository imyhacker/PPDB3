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
               <a href="https://mail.google.com/mail/u/0/?fs=1&to={{$kontak->email_sekolah ?? 'smktelematikaindramayu@gmail.com'}}&su=Report%20ke%20{{$d->kepada}}&body={{$d->pesan}}&bcc={{$d->email}}&tf=cm" target="_blank" class="btn btn-outline-danger btn-block" style="text-decoration: none;"><i class="fa fa-envelope"></i> BALAS EMAIL MELALUI GMAIL</a>
            </div>
        </div>
    </div>

</div>
