<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Teste</title>
    
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap/bootstrap.4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

    <div id="layout" align="center">
    
        <div id="foto">
            <img id="imagem" alt= "Olá" height="400" width="400" class= "img-thumbnail" >
        </div>
        <div id="butoes">
            <button class="btn btn-success" onclick="pego()">Pego!</button>
            <button class="btn btn-danger" onclick="naoPego()">Não pego</button>
        </div>
    
        <div class="table-responsive" id="tabela1">
            <h1>Mais pegaveis</h1> 
                
            <table class="table">
                <tr id="trprincipal"> 
                    <td>Nome do participante</td>
                    <td>Quantidade de votos</td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="pg"></span></td>
                </tr>
            </table>
        </div>
        
        <div class="table-responsive" id="tabela2">
            <h1>Menos pegaveis</h1> 
            
            <table class="table">
                <tr id="trprincipal"> 
                    <td>Nome do participante</td>
                    <td>Quantidade de votos</td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
                <tr id="trprincipal">
                    <td>x</td>
                    <td><span id="np"></span></td>
                </tr>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/functions.g.js') }}"></script>
</body>
</html>