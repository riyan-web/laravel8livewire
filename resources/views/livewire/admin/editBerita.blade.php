<!-- Modal -->

<div wire:ignore.self class="modal fade" id="editBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ExampleModalLabel">Edit Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <input type="hidden" name="id" wire:model="id_ber">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" wire:model="judul_berita">
                    @error('judul') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" wire:model="author">
                    @error('author') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Isi Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" wire:model="deskripsi">
                    @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" class="form-control" wire:model="image">
                    @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">Edit Berita</button>
        </div>
      </div>
    </div>
  </div>