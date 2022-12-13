function escribir(caracter){
    var texto = document.getElementById("texto").value;
    document.getElementById("texto").value = texto + caracter;
}

function limpiar(){
    document.getElementById("texto").value = "";
}

function calcular() {
    let valor = document.getElementById('texto').value;
    let resultado = 1;
    for (let i = 1; i <= valor; i++) {
      resultado *= i;
    }
    document.getElementById('factorial').innerHTML = resultado;
  }