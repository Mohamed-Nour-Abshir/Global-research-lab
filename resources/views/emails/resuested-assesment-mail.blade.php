<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assesment Information</title>
</head>
<body>
        <h2>Hello Admin,</h2><br>
        You received an email from : {{ $assesment->name }}<br>
        Here are the details:<br>
        <b>Name:</b> {{ $assesment->name }}<br>
        <b>Email:</b> {{ $assesment->email }}<br>
        <b>Phone No:</b> {{ $assesment->phone }}<br>
        <b>Preffered Study Level:</b> {{ $assesment->study_level }}<br>
        <b>Pereffered Country:</b> {{ $assesment->country }}<br>
</body>
</html>
