function calcular() {
    // Obter valores do formulário
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let operacao = document.getElementById("operacao").value;
    let resultadoElement = document.getElementById("resultado");
    let resultado;

    // Calcular com base na operação
    switch (operacao) {
        case "+":
            resultado = num1 + num2;
            break;
        case "-":
            resultado = num1 - num2;
            break;
        case "*":
            resultado = num1 * num2;
            break;
        case "/":
            resultado = num2 !== 0 ? num1 / num2 : "Erro: Divisão por zero";
            break;
        default:
            resultado = "Operação inválida";
    }

    // Exibir resultado e aplicar estilo
    resultadoElement.textContent = `Resultado: ${resultado}`;
    resultadoElement.classList.remove("resultado-negativo", "resultado-positivo", "resultado-zero");
    
    if (typeof resultado === "number") {
        if (resultado < 0) {
            resultadoElement.classList.add("resultado-negativo");
        } else if (resultado > 0) {
            resultadoElement.classList.add("resultado-positivo");
        } else {
            resultadoElement.classList.add("resultado-zero");
        }
    }
}

function adicionarLinhaMedia() {
    let tabela = document.getElementById("tabelaNotas");
    let tbody = tabela.getElementsByTagName("tbody")[0];
    let linhas = tbody.getElementsByTagName("tr");
    let medias = [0, 0, 0]; // Médias para Nota 1, Nota 2, Nota 3
    let contagem = linhas.length;

    // Calcular médias
    for (let i = 0; i < contagem; i++) {
        let celulas = linhas[i].getElementsByTagName("td");
        medias[0] += parseFloat(celulas[1].textContent);
        medias[1] += parseFloat(celulas[2].textContent);
        medias[2] += parseFloat(celulas[3].textContent);
    }
    medias = medias.map(m => (m / contagem).toFixed(2));

    // Adicionar linha de médias
    let novaLinha = document.createElement("tr");
    novaLinha.innerHTML = `
        <td>Média</td>
        <td>${medias[0]}</td>
        <td>${medias[1]}</td>
        <td>${medias[2]}</td>
    `;
    tabela.getElementsByTagName("tfoot")[0] ? 
        tabela.getElementsByTagName("tfoot")[0].appendChild(novaLinha) : 
        tbody.appendChild(novaLinha);
}

function adicionarColunaMedia() {
    let tabela = document.getElementById("tabelaNotas");
    let thead = tabela.getElementsByTagName("thead")[0].getElementsByTagName("tr")[0];
    let tbody = tabela.getElementsByTagName("tbody")[0];
    let linhas = tbody.getElementsByTagName("tr");

    // Adicionar cabeçalho "Média"
    let novoTh = document.createElement("th");
    novoTh.textContent = "Média";
    thead.appendChild(novoTh);

    // Calcular e adicionar média por aluno
    for (let i = 0; i < linhas.length; i++) {
        let celulas = linhas[i].getElementsByTagName("td");
        let soma = 0;
        for (let j = 1; j < celulas.length; j++) {
            soma += parseFloat(celulas[j].textContent);
        }
        let media = (soma / (celulas.length - 1)).toFixed(2);
        let novaCelula = document.createElement("td");
        novaCelula.textContent = media;
        linhas[i].appendChild(novaCelula);
    }
}