<!-- Modal -->
<div class="modal fade" id="tJurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tjurusan')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="jurusan" placeholder="Tambah Jurusan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="tGelombang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gelombang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tgelombang')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status Gelombang</label>
                        <select class="form-control" name="status">
                            <option disabled selected value>== PILIH STATUS ==</option>
                            <option value="0">Ditutup</option>
                            <option value="1">Dibuka</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gelombang Ke</label>
                        <select class="form-control" name="gelombang">
                            <option disabled selected value>== PILIH GELOMBANG ==</option>
                            <option>Gelombang_1</option>
                            <option>Gelombang_2</option>
                            <option>Gelombang_3</option>
                            <option>Gelombang_4</option>
                            <option>Gelombang_5</option>
                            <option>Gelombang_6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dibuka Sampai Tanggal</label>
                        <input type="date" class="form-control" name="batas_waktu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Gelombang</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="tfInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah File Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tfinfo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul File Informasi</label>
                        <input type="text" class="form-control" name="jinfo" placeholder="Judul File Informasi">
                    </div>
                    <div class="form-group">
                    <label>Upload File Informasi</label>
                    <input type="file" class="form-control-file" name="finfo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload File</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="tyt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Video Dari YT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tvideo')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Video</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Youtube">
                        
                        <font>https://www.youtube.com/watch?v=<font color="red">rGeuWHX4X2E</font></font>
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Masukan Video</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="tAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('takun')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" value="{{old('name')}}">
                        @error('name')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                        @error('password')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Akun</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="tInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tinfo')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Informasi</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul Informasi" value="{{old('judul')}}">
                        @error('judul')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Tag</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tag">
      <option disabled selected value>== PILIH TAG==</option>
        @foreach($tag as $t)
            <option value="{{$t->tag}}">{{$t->tag}}</option>
        @endforeach
    </select>
  </div>
                    <div class="form-group">
                        <label>Isi Informasi</label>
                        <textarea name="isi" id="konten" cols="30" rows="10"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Informasi</button>
                </div>
            </form>
        </div>
    </div>
</div>







<div class="modal fade" id="tSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Slider Depan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload_slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Foto Slider</label>
                        <input type="file" class="form-control-file @error('foto') is-invalid @enderror" name="gambar_slider" placeholder="Foto Slider" value="{{old('foto')}}">
                    </div>
                    <div class="form-group">
                        <label>Tampilkan Slider</label>
                        <br>
                        <input type="checkbox" checked data-toggle="toggle" name="status_slider">
                    </div>
                    <div class="form-group">
                        <label>Judul Slider</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul_slider" placeholder="Judul Slider" value="{{old('judul')}}">
                        @error('judul')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Isi Slider</label>
                        <textarea name="isi_slider" id="konten2" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Slider</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="tTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tag Untuk Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('ttag')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" placeholder="Masukan Nama Tag" value="{{old('tag')}}">
                        @error('tag')
                        <span class="badge badge-danger mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Tag</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="tentang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Tentang Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('kirim_tentang')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <textarea name="tentang_sekolah" id="konten3" cols="30" rows="10"></textarea>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">T/U Tentang</button>
                </div>
            </form>
        </div>
    </div>
</div>
