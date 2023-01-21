<!DOCTYPE html>
<html>

<head>
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
        }

        .header {
            background-color: #3498DB;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #3498DB;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>{{ $name }} sent you a message</h1>
    </div>
    <div class="content">
        <h2>Subject: {{ $subject }}</h2>
        <p>{{ $greetings }}</p>
        <p>Doctor name : {{$doctor}}</p>
        <p>Appointment time & date : {{$time & $date}}</p>
        <p>Please come to hospital before 10 min of your schedule</p>
    </div>
    <div class="footer">
        <p>Copyright © {{ date('Y') }} hospital.adeveloper.info</p>
    </div>
</body>

</html>
