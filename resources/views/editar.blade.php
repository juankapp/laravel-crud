<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="logo">Bem vindo ao Crud feito com Laravel</div>
    <div class="crud">
        <form action="/editar/{{$produto->id}}" method="post">
        @csrf
            <h1>Editar Produto : {{$produto->produto}}</h1>
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="name" value="{{$produto->name}}">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$produto->email}}">
                </div>
                <div class="mb-3">
                    <label for="produto" class="form-label">Produto</label>
                    <input type="text" class="form-control" id="produto" name="produto" value="{{$produto->produto}}">
                  </div>

                <button type="submit" class="btn btn-primary">Editar</button>
              </form>

              @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div>{{$error}}</div>
              @endforeach
          @endif


    </div>
    <footer>
        <p>Crud &copy; 2021</p>
    </footer>
</body>
</html>
