
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript" language="javascript">
  //esconder tudo e mostrar apenas a pergunta em ordem
  //colocar uma div em volta das perguntas e respostas e ocultar elas e mostrar uma pergunta de cada vez a cada clique, 
  //tirando a pergunta anterior e exibindo somente a seguinte
    var perguntas = new Array();
    var respostas = new Array();
    var totalPerguntas = 2;

    perguntas[1] = "Pergunta um";
    respostas[1] = "Resposta um";
    perguntas[2] = "Pergunta dois";
    respostas[2] = "Resposta dois";




function listaPerguntas(){
    
    for(var i=1; i<=totalPerguntas; i++)
    {
       var frasePergunta = perguntas[i];
       var fraseResposta = respostas[i];

    document.write("<div id='classPergunta'><div id='frasePergunta'><h2>" + frasePergunta + "</h2></div>" + "<br>" + "<div id='fraseResposta'><h4>" + fraseResposta + "</h4></div></div>" + "<br>");
    
    }
}

//function mudarEstado(){document.getElementById("classPergunta").style.display = "block";}

        
        document.write(listaPerguntas())
        document.write("<br><br><button type='button' onclick='mudarEstado()' >Next</button>");
        
      
     </script>

    
</body>
</html>