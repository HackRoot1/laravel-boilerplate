{{-- 
@include('components.form.password', [
    'name' => 'password',
    'placeholder' => 'Enter Your Password',
    'required' => true,
    'colClass' => 'col-md-6',
]) 
--}}


<div class="{{ $colClass ?? 'col-md-6' }}">
    <input type="password" id="{{ $name }}" name="{{ $name }}" autocomplete="off"
        placeholder="{{ $placeholder ?? '' }}" @class(['form-control', 'is-invalid' => $errors->has($name)])
        @if (!empty($required)) required @endif
        @if ($errors->has($name)) aria-describedby="{{ $name }}-feedback" @endif>

    {{-- Error Message --}}
    @error($name)
        <div id="{{ $name }}-feedback" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
