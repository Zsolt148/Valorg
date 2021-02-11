@component('mail::message')
# Új hír található a Valorg.hu oldalon.

<p>{{ $data['title'] }}</p>

@component('mail::button', ['url' => $url])
Megtekintés
@endcomponent

Üdvözlettel,<br>
{{ config('app.name') }}
@endcomponent
