<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <h1>Cadastro de Clientes</h1>
                <form method="post" action="{{route('cliente_add')}}">
                    @csrf
                    <input type="text" class="form-control" name="nome" placeholder="Nome" require>
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço" require>
                    <input type="number" class="form-control" name="cep" maxlength="8" placeholder="Cep" require>
                    <input type="text" class="form-control" name="cidade" placeholder="Cidade" require>
                    <select name="estado" require>
                        @foreach($estados as $es)
                            <option value="{{$es->id}}">{{$es->nome}}</option>
                        @endforeach
                    </select>

                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </form>
                <a class="btn btn-info mt-5"  href="{{ route('list_cliente')}}">Listar</a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>