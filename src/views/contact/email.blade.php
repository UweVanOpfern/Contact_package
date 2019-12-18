@component('mail::message')
    # Introduction

    {{$message}}

    Thanks, You are receiving this from contact package
    {{ config('app.name') }}
@endcomponent
