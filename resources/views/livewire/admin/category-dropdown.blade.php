<div class="col-sm-6 mb-3">
<x-admin.form.select wire:model="selectedCategory" wire:change="categoryChanged" name="Category" :items="$categories" />
</div>
<div  class="col-sm-6 mb-3">
<x-admin.form.select wire:model="selectedSubcategory"  name="Sub-Category" :items="$subcategories" />
</div>
