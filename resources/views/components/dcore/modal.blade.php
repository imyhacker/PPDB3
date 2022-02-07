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
                            <option>Gelombang 1</option>
                            <option>Gelombang 2</option>
                            <option>Gelombang 3</option>
                            <option>Gelombang 4</option>
                            <option>Gelombang 5</option>
                            <option>Gelombang 6</option>
                        </select>
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
