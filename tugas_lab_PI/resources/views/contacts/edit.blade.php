@extends('base') 
@section('main')
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Kontak</h6>
        </div>
        <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
       
        <form method="post" action="{{ route('contactsupdate', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan:</label>
                <input type="text" class="form-control" name="nama_depan" value="{{ $contact->nama_depan }}">
            </div>

            <div class="form-group">
                <label for="nama_belakang">Nama Belakang:</label>
                <input type="text" class="form-control" name="nama_belakang" value="{{ $contact->nama_belakang }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
            </div>

            <div class="form-group">
                <label for="no_telp">Nomor Telepon:</label>
                <input type="text" class="form-control" name="no_telp" value="{{ $contact->no_telp }}">
            </div>

            <div class="form-group">
                <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
                <input type="text" class="form-control" name="jenis_pekerjaan" value="{{ $contact->jenis_pekerjaan }}">
            </div>

            <div class="form-group">
                <label for="domisili">Domisili:</label>
                <input type="text" class="form-control" name="domisili" value="{{ $contact->domisili }}">
            </div>

            <div class="text-center">
                <a  href="{{ route('contacts.index')}}" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Ubah Kontak</button>
            </div>

        </form>
    </div>
</div>
</div>
@endsection