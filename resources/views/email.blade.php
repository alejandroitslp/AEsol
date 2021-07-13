<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>Orden de Compra generada desde ae-sol.net </h1>
    @if ($bodymsj!=null)
    <h2>{{$bodymsj}}</h2>
    @endif
    @if ($bodymsj==null)
    <h2>Esta es una orden de compra generada desde AE Solutions</h2> 
    @endif
</body>
</html>