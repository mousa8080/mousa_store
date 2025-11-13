@props([
    'name'=>'',
    'potions'=>[],
    'checked'=>null,
])
@foreach ($potions as $value=>$text)
<div class="form-check">
    <input type="radio" name="{{ $name }}" value="{{ $value }}" id="{{ $value }}"
    @checked(old($name, $checked) == $value)
    {{$attributes->class([
        'form-check-input',
        'is-invalid' => $errors->has($name)
    ]) }}>
    <label for="{{ $value }}">{{ $text }}</label>
</div>
@endforeach