@component('mail::message')
# Introduction

Thank you for registration and enjoy your free access to our website. 

@component('mail::button', ['url' => 'http://www.ingrays.com/'])
Browse more
@endcomponent


@component('mail::panel', ['url' => ''])
Browse our blog regulary
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
