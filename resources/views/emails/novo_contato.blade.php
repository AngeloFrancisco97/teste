@component('mail::message')
# {{$nome}} - {{$email}}

{{$mensagem}}


Att,<br>
{{ config('app.name') }}
@endcomponent
