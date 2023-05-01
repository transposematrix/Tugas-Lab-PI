@extends('base')

@section('main')
<br>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Kontak</h6>
  </div>
  <div class="card-body">
    <a href="{{ route('contactscreate') }}" class="mb-4 btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
      </span>
      <span class="text"> Kontak Baru</span>
    </a>
    <div class="table-responsive">
    <table class="table table-hover text-center table-bordered table-striped" id="tabel-data">
    <thead>
        <tr>
          <th width="5%">ID</th>
          <th width="20%">Nama Lengkap</th>
          <th width="20%">Email</th>
          <th width="15%">Nomor Telepon</th>
          <th width="15%">Jenis Pekerjaan</th>
          <th width="15%">Domisili</th>
          <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->nama_depan}} {{$contact->nama_belakang}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->no_telp}}</td>
            <td>{{$contact->jenis_pekerjaan}}</td>
            <td>{{$contact->domisili}}</td>
            <td>
              <a href="{{ route('contactsedit',$contact->id)}}" class="btn btn-success btn-sm rounded-0">
              <i class="fas fa-edit"></i>
              </a>
                                        
              <a href="{{ route('contactsdestroy', $contact->id)}}" class="btn btn-danger btn-sm delete-confirm">
                <i class="fas fa-trash"></i>
              </a>                     
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
  </div>
</div>

<script type="text/javascript">
        $(document).ready(function () {
            $('#tabel-data').DataTable () ;
        });
</script>

<script>
    $('.delete-confirm').on('click',function(e){
        e.preventDefault();
        const href=$(this).attr('href')
        Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data yang terhapus tidak dapat dikembalikan lagi!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus'
        }).then((result) => {
        if (result.value) {
             document.location.href = href;
        }
        })
    })
</script>

@endsection