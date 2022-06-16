<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api</title>

    <style>
       * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body {
            display: flex;
            width: 100vw;
            height: 100vh;
            justify-content: center;
            align-items: center;
            align-self: center;
            flex-direction: column;
            background-color: blue;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            flex-direction: column;
            width: 300px;
            height: 500px;
            border-radius: 15px;
            background-color: white;
        }
        label {
            font-weight: 700;
            font-size: 15px;
            display:flex;
            margin-top: 50px;
        }
        input {
            width: 110px;
            height: 23px;
            border-radius: 10px;
        }
        button {
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            margin-left: 10%;
            margin-top: 20px;
            border-radius: 5px;
            font-weight: 700;
            font-size: 12px;
            width: 110px;
            height: 30px;
        }
    </style>
</head>
<body>
    <form action="/atualizar-empreendimento/{{ $empreendimento->id }}" method="post">
        @csrf
        <label>
            Codigo do empreendimento:
            <input type="text" name="codigo" value="{{ $empreendimento->codigo }}">
        </label>
                
        <label>
            Nome do empreendimento:
            <input type="text" name="nome" value="{{ $empreendimento->nome }}">
        </label>
                
        <label>
            Localização do empreendimento:
            <input type="text" name="localização" value="{{ $empreendimento->localização }}">
        </label>

        <label>
            Previsão de entrega do empreendimento:
            <input type="text" name="previsão" value="{{ $empreendimento->previsão }}">
        </label>
        <button>
            Atualizar Empreendimento
        </button>
    </form>
</body>
</html>