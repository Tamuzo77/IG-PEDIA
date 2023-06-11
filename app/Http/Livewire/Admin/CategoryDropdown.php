<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryDropdown extends Component
{
    public $categories=[];
    public $subcategories=[];
    public $subs = [];
    public $selectedCategory;
    public $selectedSubcategory;

    public function mount()
    {
        $this->categories = Category::where('parent_id', null)->get();
    }

    public function categoryChanged()
    {
        if($this->selectedCategory !== '0')
        {
            $this->subcategories = Category::where('parent_id', $this->selectedCategory)->get();
        }
    }

    public function render()
    {
        return view('livewire.admin.category-dropdown');
    }
}
