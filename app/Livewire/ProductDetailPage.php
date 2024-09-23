<?php

namespace App\Livewire;

use Livewire\Component;

#[Title('Product Detail - DCodeMania')]
class ProductDetailPage extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.product-detail-page');
    }
}
