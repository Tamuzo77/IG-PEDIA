@props(['name', 'type'=>'text'])
<x-admin.form.label :name="$name" />

<input class="form-control" 
       id="{{ $name }}" 
       type="{{ $type }}"
       name="{{ strtolower($name) }}" 
       {{ $attributes(['value'=>old($name)]) }}
       >
<x-admin.form.error :name="strtolower($name)" />
