<x-mail::message>
Name : {{$data['name']}} <br>
Email : {{$data['email']}} <br>
Phone : {{$data['phone']}} <br>

{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
