<div>
    <div>
        @include('livewire.admin.navbar')
        @include('livewire.admin.sidebar')
        @include('livewire.admin.tambahBerita')
        @include('livewire.admin.editBerita')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Halaman Berita</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Berita</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
              <div class="col-12">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                  <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBerita">
                      Tambah data baru
                   </button>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        @foreach ($beritas as $berita)
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->author }}</td>
                        <td>{{ $berita->deskripsi }}</td>
                        <td>{{ $berita->image }}</td>
                        <td> 
                          {{-- data-toggle="modal" data-target="#editBerita"  --}}
                          <button type="button" class="btn btn-info" wire:click.prevent="edit({{ $berita->id }})">Edit</button>
                          <button type="button" class="btn btn-danger" wire:click.prevent="delete({{ $berita->id }})">Delete</button>
                        </td>
                      </tr>
                      <?php $no++ ?>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
    </div>
        @include('livewire.admin.footer')
    </div>    
</div>
