<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Berita extends Component
{
    // public function tampilBerita($id)
    // {
    //     $beritas  = ModelsBerita::where('id', $id)->first();
    //     $this->ids   = $beritas->id;
    //     $this->judul_berita    = $beritas->title;
    //     $this->author  = $beritas->content;
    //     $this->deskripsi   = $beritas->deskripsi;
    //     $this->image   = $beritas->image;
    // }   


    // public $ids;
    // public $judul_berita; 
    // public $author;
    // public $deskripsi;
    // public $image;

    // public function mount($id)
    // {
    //     $beritas  = ModelsBerita::where('id', $id)->first();
    //     $this->ids   = $beritas->id;
    //     $this->judul_berita    = $beritas->title;
    //     $this->author  = $beritas->content;
    //     $this->deskripsi   = $beritas->deskripsi;
    //     $this->image   = $beritas->image;
    // }

    public function render()
    {
        return view('livewire.berita');
    }
}
