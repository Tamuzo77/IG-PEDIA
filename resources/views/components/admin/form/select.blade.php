{{-- Composant à ne pas encore utiliser --}}
@props(['name', 'items'])
<label class="form-label" for="validationCustom04">State</label>
<select 
    class="form-select" 
    id="validationCustom04" 
    required="">
    <option selected="" disabled="" value="">Choose...</option>
    <option>...</option>
</select>

{{-- input group --}}
<label class="form-label" for="validationCustomUsername">Username</label>
<div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">@</span>
  <input class="form-control" id="validationCustomUsername" type="text" aria-describedby="inputGroupPrepend" required="">
  <div class="invalid-feedback">Please choose a username.</div>
</div>