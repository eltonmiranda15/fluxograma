<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    
    const questoes = {
        1: { 
            pergunta: 'Pergunta um',
            resposta: 'a',
            opcoes: {
                a: 'Resposta A (Pergunta Um) ',
                b: 'Resposta B (Pergunta Um) ',
                c: 'Resposta C (Pergunta Um) ',
            }
        },
        2: {
            pergunta: 'Pergunta dois',
            resposta: 'b',
            opcoes: {
                a: 'Resposta A (Pergunta dois)',
                b: 'Resposta B (Pergunta dois)',
                c: 'Resposta C (Pergunta dois)',
            }
        }
    }

    let resultado = {}; //recebe a resposta do usuario
    let resposta_usuario = ''; //guarda a resposta do usuario
    let questao_atual = 0; //questão atual

    function alteraValorProximaPergunta(){
        if(resposta_usuario !== "") {
            resultado[questao_atual] = {
                escolha_usuario: resposta_usuario,
                resposta_esperada: questoes[questao_atual].resposta,
                resposta_correta: resposta_usuario === questoes[questao_atual].resposta
            };

            resposta_usuario = "";
        }

        questao_atual++;

        if(!questoes[questao_atual]){
            document.querySelector('#pergunta').innerHTML = 
            '<br>Fim do questionario<br>' + 
            '<pre>Respostas<br>' + 
            JSON.stringify(resultado, null, 2 ) + 
            '</pre>'
            return false; 
        }

        let questaoObjeto = questoes[questao_atual]; 

        document.querySelector('#pergunta .texto-da-pergunta').innerHTML = questaoObjeto.pergunta;

        document.querySelector('#label_A').innerText = questaoObjeto.opcoes['a'];
        document.querySelector('#label_B').innerText = questaoObjeto.opcoes['b'];
        document.querySelector('#label_C').innerText = questaoObjeto.opcoes['c'];

        document.querySelector('#botao-proximo').disabled = true;

    }

    function validacaoResposta(){
        resposta_usuario = document.querySelector("input[name='resposta']:checked").value;

        document.querySelector("#botao-proximo").disabled = false;

    }

    </script>
</head>
<body> 

  <div id="pergunta">
        <h1 class="texto-da-pergunta"></h1>
        <form action="" method="POST" id="alternativas">
            <input type="radio" onchange="validacaoResposta()" class="radio-buttons" name="resposta" id="inputA" value="a"><label for="inputA" id="label_A"></label>
            <input type="radio" onchange="validacaoResposta()" class="radio-buttons" name="resposta" id="inputB" value="b"><label for="inputB" id="label_B"></label>
            <input type="radio" onchange="validacaoResposta()" class="radio-buttons" name="resposta" id="inputC" value="c"><label for="inputC" id="label_C"></label>
            <button id="botao-proximo" onclick="alteraValorProximaPergunta()">Proximo</button>
        </form>
    
</div>

<script>
    alteraValorProximaPergunta();
</script>
</body>
</html>