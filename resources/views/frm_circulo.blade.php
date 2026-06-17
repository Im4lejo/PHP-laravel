<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM Area Circulo</h1>


<form action="{{route('circulo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Radio
    <br>
    <input type="number" name="radio">
</label>
<br>


<button type="submit">Calcular</button>
</form>


</body>
</html>
