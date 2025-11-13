@props([
    'type'=>'text',
    'name'=>'',
    'value'=>'',
    'label'=>false,
])
@if($label)
<label for="{{ $name }}">{{ $label }}</label>
@endif
<input type="{{ $type }}" name="{{ $name }}" :id="$name"
    value="{{old($name,$value)}}" 
    {{ $attributes->class([
        'form-control',
        'is-invalid' => $errors->has($name)
    ]) }} 
>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror