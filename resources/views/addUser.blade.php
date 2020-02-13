<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<form action="{{route('store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Usuario</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="">email</label>
        <input type="email" name="email">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="password" name="password">
    </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

    <a href="{{route('list')}}" class="btn btn-primary">Voltar</a>
</body>
</html>
