@props(['value'])

<label {{ $attributes->merge(['class' => 'floating-label']) }}>
    {{ $value ?? $slot }}
</label>
