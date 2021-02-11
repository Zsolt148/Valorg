@component('mail::message')
# Új üzenet érzekett a Valorg.hu oldalról

<p>Név: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>{{ $data['body'] }}</p>

Üdvözlettel,<br>
{{ config('app.name') }}
@endcomponent
