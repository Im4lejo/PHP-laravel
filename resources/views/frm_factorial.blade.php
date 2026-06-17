<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>FRM Factorial</h1>


<form action="{{route('factorial.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
   Numero
    <br>
    <input type="number" name="num">
</label>
<br>


<button type="submit">Calcular</button>
</form>


</body>
</html>
