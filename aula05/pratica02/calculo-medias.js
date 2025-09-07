function mediaAlunos() {
  let tabela = document.getElementById("tabela-notas");
  let tbody = tabela.getElementsByTagName("tbody")[0];

  let thead = tabela.getElementsByTagName("thead")[0];

  let linhas = Array.from(tbody.getElementsByTagName("tr"))
                  .filter(linha => !linha.classList.contains("soma-media-nota"));

  //remove as anteriores
  let somaAlunosExistentes = document.querySelectorAll(".soma-media-aluno");
  somaAlunosExistentes.forEach(td => td.remove());

  let thSoma = document.createElement("th");
  thSoma.classList.add("soma-media-aluno");
  thSoma.textContent = "Total soma";
  thSoma.rowSpan = 2;

  let thMedia = document.createElement("th");
  thMedia.classList.add("soma-media-aluno");
  thMedia.textContent = "Média";
  thMedia.rowSpan = 2
  
  thead.querySelector("tr").appendChild(thSoma);
  thead.querySelector("tr").appendChild(thMedia);

  let somaTotal = 0;

  for (let linha of linhas) {
    let inputs = linha.querySelectorAll('input[type="number"]');
    let somaLinha = 0;
    
    for (let input of inputs) {
        let valor = parseFloat(input.value);
        
        if (!isNaN(valor)) {
            somaLinha += valor;
        }
    }


    let mediaLinha = somaLinha/(inputs.length)
    

    let tdSomaAluno = document.createElement("td");
    tdSomaAluno.classList.add("soma-media-aluno");
    tdSomaAluno.textContent = somaLinha;
    linha.appendChild(tdSomaAluno);

    somaTotal += somaLinha;
    let tdMediaAluno = document.createElement("td");
    tdMediaAluno.classList.add("soma-media-aluno");
    tdMediaAluno.textContent = mediaLinha;
    linha.appendChild(tdMediaAluno);
  }

}

function mediaNotas() {
  let tabela = document.getElementById("tabela-notas");
  let tbody = tabela.getElementsByTagName("tbody")[0];

  let linhas = tbody.getElementsByTagName("tr");

  //remove as anteriores
  let somaNotasExistentes= document.querySelectorAll(".soma-media-nota");
  somaNotasExistentes.forEach(tr => tr.remove());

  let somaColunas = [];
  let qtdeColunas = [];

  for (let linha of linhas) {
    let inputs  = linha.querySelectorAll('input[type="number"]');

    for (let i = 0; i < inputs.length; i++) {
      let valor = parseFloat(inputs[i].value)
      if (!isNaN(valor)) {
          if (somaColunas[i] === undefined) {
            somaColunas[i] = 0;
          }
          
          somaColunas[i] += valor;
          
      }
      if (qtdeColunas[i] === undefined) {
        qtdeColunas[i] = 0; 
      }
      qtdeColunas[i] += 1; 
    }
  }

  let trSomas = document.createElement("tr")
  trSomas.classList.add("soma-media-nota");

  let trMedias = document.createElement("tr")
  trMedias.classList.add("soma-media-nota");

  let tdSomaExp = document.createElement("td");
  tdSomaExp.textContent = "Soma Notas";
  tdSomaExp.style.backgroundColor = "grey";
  tdSomaExp.style.fontWeight = "bold";
  trSomas.appendChild(tdSomaExp);

  let tdMediaExp = document.createElement("td");
  tdMediaExp.textContent = "Média Notas";
  tdMediaExp.style.backgroundColor = "grey";
  tdMediaExp.style.fontWeight = "bold";
  trMedias.appendChild(tdMediaExp);

  somaColunas.forEach((soma, i) => {
    let tdSomaNota = document.createElement("td");
    tdSomaNota.textContent = soma;
    trSomas.appendChild(tdSomaNota);

    let tdMediaNota = document.createElement("td");
    tdMediaNota.textContent = soma / qtdeColunas[i];
    trMedias.appendChild(tdMediaNota);
  })
  tbody.appendChild(trSomas);
  tbody.appendChild(trMedias);
  
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("media-notas").addEventListener("click", mediaNotas);
  document.getElementById("media-alunos").addEventListener("click", mediaAlunos);
});