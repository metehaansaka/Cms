@component('mail::message')
# {{ config('app.name') }} Özel Teklif Formu

@component('mail::table')
|               |                     |
|:------------- |:-------------------:|
| İsim:         | {{$data->name}}     |
| Mail:         | {{$data->email}}    |
| Telefon:      | {{$data->phone}}    |
@endcomponent

{{ config('app.name') }}
@endcomponent
