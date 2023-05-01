@extends('base')

@section('main')

<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Kontak</h6>        
    </div>
    <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contactsstore') }}">
          @csrf
          <div class="form-group">    
              <label for="nama_depan">Nama Depan:</label>
              <input type="text" class="form-control" name="nama_depan" placeholder="Tuliskan nama depan Anda"/>
          </div>

          <div class="form-group">
              <label for="nama_belakang">Nama Belakang:</label>
              <input type="text" class="form-control" name="nama_belakang" placeholder="Tuliskan nama belakang Anda"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" placeholder="Tuliskan alamat email Anda"/>
          </div>

          <div class="form-group">
              <label for="no_telp">Nomor Telepon:</label>
              <input type="text" class="form-control" name="no_telp" placeholder="Tuliskan nomor telepon Anda"/>
          </div>

          <div class="form-group">
              <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
              <input type="text" class="form-control" name="jenis_pekerjaan" placeholder="Tuliskan jenis pekerjaan Anda"/>
          </div>
          
          <div class="form-group">
              <label for="domisili">Domisili:</label>
              <input type="text" class="form-control" name="domisili" placeholder="Tuliskan domisili Anda"/>
          </div>                         
          
          <div class="text-center">
            <a  href="{{ route('contacts.index')}}" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah Kontak</button>
          </div>
          
        </form>
        
  </div>
</div>
@endsection