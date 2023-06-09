@props(['name'])
@if(Session::has('error'))
    <div class="valid-feedback">{{ session('error') }}</div>
    

@endif
