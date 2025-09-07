function getValor(){
  let valor1 = parseFloat(document.getElementById("valor1").value);
  let valor2 = parseFloat(document.getElementById("valor2").value);

  if (isNaN(valor1)) {
    valor1 = 0;
  } 
  
  if (isNaN(valor2)) {
    valor2 = 0;
  }

  return [valor1, valor2];
}

function soma(){
  let [valor1, valor2] = getValor();
  let resultado = valor1 + valor2;

  document.getElementById("resultado").value = resultado;
}

function subtracao(){
  let [valor1, valor2] = getValor();
  let resultado = valor1 - valor2;

  document.getElementById("resultado").value = resultado;
}

function multiplicacao(){
  let [valor1, valor2] = getValor();
  let resultado = valor1 * valor2;

  document.getElementById("resultado").value = resultado;
}

function divisao(){
  let [valor1, valor2] = getValor();
  let resultado = valor1 / valor2;

  document.getElementById("resultado").value = resultado;
}

function exponenciacao(){
  let [valor1, valor2] = getValor();
  let resultado = valor1 ** valor2;

  document.getElementById("resultado").value = resultado;
}

function definirCss() {
  let resultado = parseFloat(document.getElementById("resultado").value);
  let inputResultado = document.getElementById("resultado");

  inputResultado.classList.remove("resultado-negativo", "resultado-neutro", "resultado-positivo");

  if (resultado > 0) {
    inputResultado.classList.add("resultado-positivo");
  }
  else if (resultado < 0) {

    inputResultado.classList.add("resultado-negativo");
  }
  else {
    inputResultado.classList.add("resultado-neutro");
  }
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("soma").addEventListener("click", () => {
    soma();
    definirCss();
  });
  document.getElementById("subtracao").addEventListener("click", () => {
    subtracao();
    definirCss();
  });
  document.getElementById("multiplicacao").addEventListener("click", () => {
    multiplicacao();
    definirCss();
  });
  document.getElementById("divisao").addEventListener("click", () => {
    divisao();
    definirCss();
  });
  document.getElementById("exponenciacao").addEventListener("click", () => {
    exponenciacao();
    definirCss();
  });

})