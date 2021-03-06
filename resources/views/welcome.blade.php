<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Teste</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        #tabela1{
            width: 400px;	
            height: 400px;
            text-align: center;
            float: left;
        }
        #tabela2{
            width: 400px;
            height: 400px;
            text-align: center;
            float: right;
        }
        #layout{
            width: 1200px;
            height: auto;
            margin: auto;
        
        }
        #foto{
            margin-top: 50px;
            width: 400px;
            height: 400px;
            float: left;
            margin-left: 400px;
        }
        #butoes{
            margin-top: -100px;
            float: left;
            width: 600px;
            margin-left: 320px;
        }
        tr#trprincipal > td {
            padding: 2px;
        }
    </style>
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

    <script>
        var dados = [
            {nome: "Afonso", foto : "{{ asset('img/a.jpg') }}", votoPositivo: 0, votoNegativo: 0},
            {nome: "Alonso", foto : "{{ asset('img/b.jpg') }}", votoPositivo: 0, votoNegativo: 0}
        ];
        indice = 0;
        var foto = document.getElementById('imagem');
        foto.src = dados[indice].foto;
        
        var positivo = 0
        var negativo = 0
        function atualizaIndice() {
            indice = (indice == 0) ? 1 : 0;
        }
        function atualizaInfo() {
            document.getElementById('pg').innerHTML = dados[indice].votoPositivo; 
            document.getElementById('np').innerHTML = dados[indice].votoNegativo; 
        }
        function pego(){
            dados[indice].votoPositivo += 1;
            atualizaIndice();
            atualizaInfo()
            foto.src = dados[indice].foto;
            console.log('pego', indice)
        };
        
        function naoPego(){
            dados[indice].votoNegativo += 1;
            atualizaIndice();
            atualizaInfo()
            foto.src = dados[indice].foto;
        };
    </script>
</body>
</html>