<?php

namespace App\Http\Livewire\Admin;


use App\Models\Berita as adminBerita;
use Livewire\Component;
use Livewire\WithFileUploads;


class Berita extends Component
{
    public $id_ber;
    public $judul_berita;
    public $author;
    public $image;
    public $deskripsi;

    use WithFileUploads;

    public function resetInputFields()
    {
        $this->judul_berita = '';
        $this->author = '';
        $this->deskripsi = '';
        $this->image = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'judul_berita' => 'required',
            'author' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
        ]);

        $beritas = $this->image->store('/berita', 'public');
        $validatedData['image'] = $beritas;
        adminBerita::create($validatedData);
        session()->flash('message', 'Berita Berhasil Ditambahkan');
        $this->emit('tambahBerita');

        // adminBerita::create($validatedData);
        // session()->flash('message', 'Berita Berhasil Ditambahkan');

        // $this->resetInputFields();
        // $this->emit('tambahBerita');
    }

    public function edit($id)
    {
        $beritas  = adminBerita::where('id', $id)->first();
        $this->id_ber = $beritas->id;
        $this->judul = $beritas->judul_berita;
        $this->author = $beritas->author;
        $this->deskripsi = $beritas->deskripsi;
        $this->image = $beritas->image;

        return view('livewire.admin.editBerita', [
            'beritas' => $beritas
        ]);
    }

    public function update()
    {
        $this->validate([
            'judul' => 'required',
            'author' => 'required',
            'deskripsi' => 'required',
            'image' => 'required',
        ]);
        if ($this->id_ber) {
            $beritas = adminBerita::find($this->id_ber);
            $beritas->update([
                'judul_berita' => $this->judul,
                'author' => $this->author,
                'deskripsi' => $this->deskripsi,
                'image' => $this->image,
            ]);
            session()->flash('message', 'Berita Berhasil Di Update');
            $this->resetInputFields();
            $this->emit('beritaUpdate');
        }
    }

    public function delete($id)
    {
        if ($id) {
            adminBerita::where('id', $id)->delete();
            session()->flash('message', 'Berita Berhasil Dihapus');
        }
    }


    public function render()
    {
        $beritas = adminBerita::orderBy('id', 'DESC')->get();
        return view('livewire.admin.berita', [
            'beritas' => $beritas
        ]);
    }
}
