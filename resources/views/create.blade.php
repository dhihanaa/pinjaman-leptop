@extends('layout')

@section('content')
    
<div class="">
    <form method="POST" action="/tambah">
      @csrf
        <div class="mb-3">
          <label class="form-label">Nama </label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Tujuan</label>
          <textarea name="tujuan" cols="35" rows="4" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Keterangan</label>
          <textarea name="keterangan" cols="35" rows="4" class="form-control"></textarea>
        </div>
            <div class="mb-3">
              <label class="form-label">NIS</label>         
              <input type="number" name="nis" class="form-control">
        </div>
        <div class="mb-3">
          <label>Rayon</label>
                <select name="rayon" class="form-control">
                  <option value="" hidden>-- Pilih Rayon -- </option>
                  <option value="wikrama 1">Wikrama 1</option>
                  <option value="wikrama 2">Wikrama 2</option>
                  <option value="wikrama 3" >Wikrama 3</option>
                  <option value="wikrama 4" >Wikrama 4</option>
                </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Guru</label>
          <input type="title" name="guru" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
      </form>
</div>
@endsection