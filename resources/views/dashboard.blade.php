@extends('layout')

@section('content')

  </div>
  <a class="logout btn btn-outline-danger " href="/logout">Logout</a>
  </div>

  <div class="container">
  <div class="img">
      <a class="d-flex justify-content-center"><img src="/assets/img/rpl.png" alt="" width="50px"></a>
      <ul class="nav d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/">PINJAMAN LAPTOP</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/data">DATA</a>
        </li>
      </ul>
      <hr>
</div>
    
    <div class="">
    <h5>Selamat datang untuk pinjaman leptop</h5>
    <h5>Silahkan isi formulir terlebih dahulu!!!</h5>
    </div>
    
    <div class="mb-3">
        <a href="/create" class="btn btn-primary mt-2">Ajukan Form</a>
    </div>

    <div class="d-flex justify-content-between">
        <table class="table" id="iyah">
          <tr>
            <td class="tb" style="width: 20px"><i class="bi bi-box-arrow-in-right" style="font-size: 45px"></i></td>
            <td class="tb" style="width: 300px">
              <div class="yah">
                <div class="fw-bold">
                  Dipinjamkan
                </div>
                Total laptop yang pinjam hari ini
              </div>
            </td>
            <td class="tb" style="width: 60px">
              <div class="pls px-2">
                {{ $laptops->where('tanggal_kembali', "=", $hari)->count() }}
              </div>
            </td>
            <td class="tb" style="width: 75px">
              <div class="dkk">
                {{   $laptops->where('tanggal_kembali', "=", null)->where('tanggal', '=', $hari)->count();  }}
              </div>
            </td>
          </tr>
        </table>
        <table class="table" id="iyah">
          <tr>
            <td class="tb" style="width: 20px"><i class="bi bi-arrow-left-right" style="font-size: 45px"></i></td>
            <td class="tb" style="width: 300px">
              <div class="yah">
                <div class="fw-bold">
                  Dikembalikan
                </div>
                Total laptop yang kembali hari ini
            </td>
            <td class="tb" style="width: 60px">
              <div class="pls px-2">
                {{ $laptops->where('tanggal_kembali', "=", null)->count()}}
              </div>
            </td>
            <td class="tb" style="width: 75px">
              <div class="dkk">
                {{ \Carbon\Carbon::now()->format('j-m') }}
              </div>
            </td>
          </tr>
        </table>
      </div> 
        
@endsection