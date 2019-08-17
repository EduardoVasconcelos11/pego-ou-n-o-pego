var dados = [
    {nome: "Afonso", foto : "img/a.jpg", votoPositivo: 0, votoNegativo: 0},
    {nome: "Alonso", foto : "img/b.jpg", votoPositivo: 0, votoNegativo: 0}
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