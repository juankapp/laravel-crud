<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Incial</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="logo">Bem vindo ao Crud feito com Laravel</div>
    <div class="crud">
        <a class="mb-5" href="/criar"><button type="button" class="btn btn-success">Criar Produto</button></a>
        @if($usuarios)
        <table class="table">
            <thead>
            <tbody>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col">Produto</th>
              </tr>
            </thead>
            @foreach ($usuarios as $usuario)
            <tr>
                <th scope="row">{{$usuario->id}}</th>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->produto}}</td>
                <td><a href="/produto/{{$usuario->id}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                <td><a href="/excluir/{{$usuario->id}}"><button type="button" class="btn btn-danger">Excluir</button></a></td>
              </tr>

            @endforeach
         </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $usuarios->links() !!}
        </div>
        @endif


    </div>

    <footer>
        <p>Crud &copy; 2021</p>
    </footer>
</body>



</html>
