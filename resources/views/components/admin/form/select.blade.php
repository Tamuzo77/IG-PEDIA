{{-- Composant à ne pas encore utiliser --}}
@props(['name', 'items'=>[]])
<x-admin.form.label :name="$name" />
<select 
    class="form-select" 
    name="{{ strtolower($name) }}"
    id="{{ strtolower($name) }}" 
    {{ $attributes(['']) }}
    >
    <option selected="" disabled="" value="-1">None</option>
    @foreach ($items as $item )
    <option 
      value="{{ $item->id }}"
      {{ old($item->id) == $item->id ?  'selected="selected"' : ''  }}
      >{{ ucwords($item->name) }}</option>
    @endforeach
    
</select>
<x-admin.form.error :name="$name" />

{{-- input group 
<label class="form-label" for="validationCustomUsername">Username</label>
<div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">@</span>
  <input class="form-control" id="validationCustomUsername" type="text" aria-describedby="inputGroupPrepend" required="">
  <div class="invalid-feedback">Please choose a username.</div>
</div>--}}