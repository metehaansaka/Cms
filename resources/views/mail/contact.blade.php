@component('mail::message')
# {{ config('app.name') }} İletişim Formu

@component('mail::table')
|               |                     |
|:------------- |:-------------------:|
| İsim:         | {{$data->name}}     |
| Mail:         | {{$data->email}}    |
| Mesaj:        | {{$data->message}}  |
@endcomponent

{{ config('app.name') }}
@endcomponent
