@component('mail::message')

Welcome! You have Registered Successfully..

@component('mail::button', ['url' => ''])

Open
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
