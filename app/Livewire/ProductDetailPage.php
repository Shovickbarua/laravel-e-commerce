<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Particals\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Product Detail - Quantam')]
class ProductDetailPage extends Component
{
    use LivewireAlert;
    public $slug;
    public $quantity = 1;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function increaseQty(){
        $this->quantity++;
    }

    // add product to cart method
    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added successfully!', [
            'position'  => 'bottom-end',
            'timer' => 3000,
            'toast' =>true,
        ]);
    }
    public function decreaseQty(){
        if($this->quantity > 1){
            $this->quantity--;
        }
    }


    public function render()
    {
        return view('livewire.product-detail-page');
    }
}
