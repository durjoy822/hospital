<x-mail::message>
I need an appintment of doctor {{$data['doctor_name']}}, and this is the patient information. <br>
Name : {{$data['name']}} <br>
Email : {{$data['email']}} <br>
Phone : {{$data['phone']}} <br>

{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
