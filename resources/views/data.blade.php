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
    @if (session('successUpdate'))
        <div class="alert alert-success">
            {{session('successUpdate')}}
        </div>
    @endif
    @if (session('successDelete'))
        <div class="alert alert-success">
            {{session('successDelete')}}
        </div>
    @endif
    @if (session('successComplated'))
        <div class="alert alert-success">
            {{session('successComplated')}}
        </div>
    @endif
    {{-- <div class="data container mt-4 pb-3 d-flex justify-content-center"> --}}
        <table class="table table-success table-striped table-bordered">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Tujuan</td>
                <td>Keterangan</td>
                <td>NIS</td>
                <td>Rayon</td>
                <td>Tanggal</td>
                <td>Tangggal Kembali</td>
                <td>Nama Guru</td>
                <td>Status</td>
            </tr>
            @php
                $no = 1;  
            @endphp
            @foreach ($laptops as $laptop)
            <tr>
                <td>{{ $no++ }}</td>  
                <td>{{ $laptop['nama'] }}</td>   
                <td>{{ $laptop['tujuan'] }}</td>    
                <td>{{ $laptop['keterangan'] }}</td>   
                <td>{{ $laptop['nis'] }}</td>  
                <td>{{ $laptop['rayon'] }}</td>   
                <td>{{ \Carbon\Carbon::parse($laptop['tanggal'])->format('j F, Y')}}</td>
                @if ($laptop['tanggal_kembali']==null)
                <td class="text-warning">
                    Belum dikembalikan
                  </td>
                @else 
                  <td>
                    {{ Carbon\Carbon::parse($laptop['tanggal_kembali'])->format('j F Y') }}
                  </td>
                @endif
                <td>{{ $laptop['guru'] }}</td> 
                <td class="d-flex">
                    @if ($laptop['tanggal_kembali'] == null)
                    <form action="/complated/{{$laptop['id']}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success me-1" style="border-radius: 12px">
                            <i class="bi bi-check-lg"></i>
                        </button>
                    </form>
                    @endif
                    <form action="/destroy/{{$laptop['id']}}" method="POST">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-danger" style="border-radius: 12px">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </form>
                </td>
            @endforeach
        </table>
    </div>
@endsection