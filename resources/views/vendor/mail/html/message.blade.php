@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => "https://mayaspringbed.id"])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© 2020 Maya Springbed. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
