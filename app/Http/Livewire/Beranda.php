<?php

namespace App\Http\Livewire;

use App\Models\Berita as ModelsBerita;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Layanan;
use App\Models\Program;
use Livewire\Component;

class Beranda extends Component
{

    public $ids;
    public $judul_berita;
    public $author;
    public $deskripsi;
    public $image;

    public function tampilBerita($id)
    {
        $beritas  = ModelsBerita::where('id', $id)->first();
        $this->ids   = $beritas->id;
        $this->judul_berita    = $beritas->judul_berita;
        $this->author  = $beritas->author;
        $this->deskripsi   = $beritas->deskripsi;
        $this->image   = $beritas->image;
    }

    public function render()
    {

        $programs = Program::orderBy('id', 'DESC')->get();
        $beritas = Berita::orderBy('id', 'DESC')->get();
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        $layanans = Layanan::orderBy('id', 'DESC')->get();
        return view('livewire.beranda', [
            'programs' => $programs,
            'beritas' => $beritas,
            'galleries' => $galleries,
            'layanans' => $layanans
        ]);
    }
}
