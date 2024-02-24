<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
    @csrf
    Nome:<input type="text" id="name" name="name">
    Número:<input type="text" id="phone_number" name="phone_number">
    Email:<input type="text" id="email" name="email">
    Senha:<input type="text" id="password" name="password">
    <input type="submit" value="Salvar">
    
    
    </form>
</body>
</html>