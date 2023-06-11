@props(['name'=>'Name required'])

<x-admin.form.label :name="$name" />
<textarea 
    class="form-control" 
    name="{{ strtolower($name) }}"
    id="{{ $name }}"
    {{ $attributes(['rows'=>'3']) }} 
    >{{ old($name) ?? '' }}</textarea>
