<!-- Modal -->
<div wire:ignore.self class="modal fade" id="tampilBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ExampleModalLabel">Edit Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card" style="width: 18rem;">
                <?php $image_berita ?> === <div wire:model="image"></div>
                <img src="{{ asset('template/images/icon-image/wire:model=image')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <form>
                <input type="hidden" name="ids" wire:model="ids">
                <div class="form-group">
                    <label for="judul_berita">First Name</label>
                    <input type="text" name="judul_berita" class="form-control" wire:model="judul_berita">
                </div>
                <div class="form-group">
                    <label for="author">Last Name</label>
                    <input type="text" name="author" class="form-control" wire:model="author">
                </div>
                <div class="form-group">
                    <label for="image">Email</label>
                    <input type="text" name="image" class="form-control" wire:model="image">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Phone</label>
                    <input type="text" name="deskripsi" class="form-control" wire:model="deskripsi">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>