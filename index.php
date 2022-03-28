<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>Ganho por hora</title>
</head>
<body>


    <main>
         <div class="form">
             <h1>Ganho Por hora</h1>
             <div class="input1">
             <label>Quanto você ganha por mês?</label>
             <input type="number" name="salario" id="salario" placeholder="1200">
             </div>
             <div class="input2">
             <label>Quantos dias por mês você trabalha?</label>
             <input type="number" name="horas" id="horas" placeholder="30" required>
             </div>
             <div class="input3">
             <label>Quantas horas você trabalha por dia?</label>
             <input type="number" name="dia" id="dia" placeholder="8" required>
             </div>
             <button onclick="dividir()">Calcular</button><br><br>
            <div class="result">
             <p>O seu ganho por hora é de:

             </p>R$ <span></span>  <br><br>

             <!--<a href="valor.html">Valor a ser pago pelas horas trabalhadas</a>-->


         </div>

         

         
     


    </main>

    <script>
     var salario = document.querySelector('#salario');
     var horas = document.querySelector('#horas');
     var dia = document.querySelector('#dia');
     var resultado = document.querySelector('span');

     function dividir(){
         resultado.innerHTML = salario.value / horas.value / dia.value
     }

    

    </script>


<footer>
    <div class="text">
    <h1>Idealizado para calculos de horas trabalhadas</h1>
    <p>Existem diversos motivos que demonstram o quanto é importante calcular as horas trabalhadas dos colaboradores, dentre eles <br>podemos citar como os principais: O cumprimento das obrigações trabalhistas; A transparência na relação de trabalho; A obtenção<br> de dados importantes sobre a produtividade da sua empresa.</p>
    <a href=" https://www.instagram.com/invites/contact/?i=181lipe8dg1ra&utm_content=li0ve4h">Alan Silva</a>
    </div>
</footer>
    
   
    
</body>
</html>