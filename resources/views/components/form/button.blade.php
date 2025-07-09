{{-- Usage in blade file --}}

{{-- 
@include('components.form.button', [
    'type' => 'submit',
    'value' => 'Sign In',
    'class' => 'btn btn-secondary',
    'colClass' => 'col-12',
])
--}}


<div class="{{ $colClass ?? '' }}">
    <button type="{{ $type ?? 'submit' }}" class="{{ $class ?? 'btn btn-primary' }}">
        {{ $value ?? 'Submit' }}
    </button>
</div>

