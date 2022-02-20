<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Informasi</h4>
            </div>
            <div class="card-body">
                <form action="{{route('update_info', $data->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Judul Informasi</label>
                        <input type="text" name="judul" class="form-control" value="{{$data->judul}}">
                    </div>
                    <div class="form-group">
                        <label>Isi Informasi</label>
                        <textarea name="isi" id="konten" cols="30" rows="10">{{$data->isi}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-success btn-block" value="Update Informasi">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
