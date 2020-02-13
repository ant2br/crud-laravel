<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>



<div class="container">

    <a href="{{route('novo')}}" class="btn btn-primary">Add New</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{route('listU',['user' => $user->id])}}" class="btn btn-primary">Vizualizar</a>
            <a href="{{route('editar',['user' => $user->id])}}" class="btn btn-warning">Editar</a>
            <form action="{{route('destroy',['user' => $user->id])}}" method="post">
                @csrf
                @method('delete')
            <button type="submit" class="btn btn-danger">Remover</button>
            </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
</body>
</html>
