<x-mail::message>
Name : {{$data['name']}} <br>
Email : {{$data['email']}} <br>
Phone : {{$data['phone']}} <br>

{{$data['message']}}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
