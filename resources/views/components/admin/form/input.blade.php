@props(['name', 'type'=>'text'])
<x-admin.form.label :name="$name" />

<input class="form-control mb-2" 
       id="{{ $name }}" 
       type="{{ $type }}"
       name="{{ strtolower($name) }}" 
       {{ $attributes(['value'=>old($name)]) }}
       >
<x-admin.form.error :name="strtolower($name)" />
