@component('mail::message')
    @php
        $mytime = Carbon\Carbon::now();
    @endphp
# {{ config('app.name') }} Teklif Formu

@component('mail::table')
|               |                     |
|:------------- |:-------------------:|
| Tarih:        | {{$mytime->toDateTimeString()}}         |
| İsim:         | {{$data->name}}     |
| Mail:         | {{$data->email}}    |
| Telefon:      | {{$data->phone}}    |
| İşin Adı:     | {{$data->job}}      |
| Adet:         | {{$data->adet}}     |
| Ebat:         | {{$data->ebat}}     |
| Sayfa Sayısı: | {{$data->sayfa}}    |
| İç Kağıt:     | {{$data->kagit}}    |
| Kapak Kağıt:  | {{$data->kapak}}    |
| Yan Kağıt:    | {{$data->yan}}      |
| İç Baskı:     | {{$data->ic_baski}} |
| Kapak Baskı:  | {{$data->kapak_baski}} |
| Yan Kağıt Baskı:  | {{$data->yan_kagit}} |
| Laminasyon:  | {{$data->laminasyon}} |
| Lak:  | {{$data->lak}} |
| Cilt Şekli:  | {{$data->cilt}} |
| Mukavva:  | {{$data->mukavva}} |
| Diğer:  | {{$data->diger}} |
| Ambalaj Şekli:  | {{$data->ambalaj}} |
| Sevkiyat:  | {{$data->sevkiyat}} |
| Ödeme Şekli:  | {{$data->odeme}} |
| Teslim Tarihi:  | {{$data->teslim}} |
@endcomponent

    {{ config('app.name') }}
@endcomponent
