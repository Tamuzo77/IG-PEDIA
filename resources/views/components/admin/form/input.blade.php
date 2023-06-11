@props(['name', 'type'=>'text'])
<x-admin.form.label :name="$name" />

<input class="form-control mb-2" 
       id="{{ $name }}" 
       type="{{ $type }}"
       name="{{ strtolower($name) }}" 
       {{ $attributes(['value'=>old(strtolower($name))]) }}
       >
<x-admin.form.error :name="strtolower($name)" />
