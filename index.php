<!DOCTYPE html>
<!-- -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
  
       <?php
            //comentario
      
            //soma e exibe resultado
            /*
            $num1 = 2;
            $num2 = 6;
            $result = $num1 + $num2;
            echo "Resultado = $result <br>";
            */
            
            //mesma variavel recebe dois valores diferente, o ultimo é o que vale
            /*
            $cor = "amarelo";
            $cor = "vermelho";
            echo $cor . "<br>";
            */
      
            //definindo CONSTANTE
            /*      
            define("MEU_CARO", "Gol");
            echo MEU_CARO; 
            */
            
            //tipos de dados
            /*                      
            $vaiChover = true; //boolean
            echo $vaiChover . "<br>";
      
            $idade = 23; //integer
            echo $idade . "<br>";
      
            $pi = 3.14; //float
            echo $pi . "<br>";
      
            $frase = "Hello World!"; //string
            echo $frase . "<br>";
      
            $marcasDeCarros = array("Gol", "Fiat", "Ford", "Renault"); //array
            echo $marcasDeCarros[0] . "<br>";
            */
      
            //var_dump mostra o tipo do dado que é passado como parâmetro
            /*            
            //não dá pra usar . <"br"> depois do var_dump
            var_dump($cor); echo "<br>";
            var_dump(array("maça", "maracujá")); echo "<br>";
            var_dump("Camila Sass"); echo "<br>";
            */
            
            //trabalhando com operadores
            /*
            echo "<br>";
            $a = 4;
            $b = 17;
            echo "a = " . $a . "<br>";
            echo "b = " . $b . "<br>";
      
            $result4 = $a + $b;
            echo "Resultado da soma = " . $result4 . "<br>";
      
            $result5 = $a - $b;
            echo "Resultado da subtração = " . $result5 . "<br>";
      
            $result6 = $a * $b;
            echo "Resultado da mutiplição = " . $result6 . "<br>";
      
            $result7 = $a / $b;
            echo "Resultado da divisão = " . $result7 . "<br>";
      
            $result8 = $a % $b;
            echo "Resultado do módulo = " . $result8 . "<br>";
      
            
            $result1 = $a == $b;
            echo "valores são iguais: " . $result1 . "<br>";
      
            $result2 = $a === $b;
            //aparentemente  não retorna nada quando é falso.
            echo "valores e tipos são iguais: " . $result2 . "<br>";
      
            $result3 = $a != $b;      
            echo "são diferentes: " . $result3 . "<br>";
            */
            
            //modulo
            /*            
            $num1 = 10;
            $num2 = 6;
            $result3 = $num1 % $num2;
            echo "Resultado: " . $result3; echo "<br>";
            */
      
            //concatenação
            /*            
            $nome = "Ana";
            echo "Olá " . $nome;
            */
      
            //estruturas de controle
            /*            
            $a = 1;
            echo "a: " . $a;
            $b = 3;
            echo "b: " . $b;
          
            if($a > $b){
                echo "a é maior que b";
            }else if ($a == $b){
                echo "a é igual a b";
            }
            else{
                echo "a é menor que b";
            }
            */
      
            //estruturas de controle
            /*           
            $a = 1;
            echo "a: " . $a . "<br>";
            $b = 3;
            echo "b: " . $b . "<br>";
          
            echo "MAIOR <br>";
            if($a > $b){
                echo "true <br>";
            }else {
                echo "false <br>";
            }
      
            echo "MENOR <br>";
            if($a < $b){
                echo "true <br>";
            }else{
                echo "false <br>";
            }
      
      
            echo "IGUAL <br>";
            if($a == $b){
                echo "true <br>";
            }else {
                echo "false <br>";
            }
      
      
            echo "DIFERENTE <br>";
            if($a != $b){
                echo "true <br>";
            }else {
                echo "false <br>";
            }
            */
            
            //while
            /*
            $i = 1;
            while($i < 10){
              $i = $i +1;
              echo $i . "<br>";
            }
            */
        
            //detectando se i é par ou ímpar
            /*            
            $i = 1;
            while($i <= 10){
              if($i%2 == 0){
                echo "$i é par <br>";
              }else{
                echo $i . " é ímpar <br>";
              }
              $i = $i +1;
            }
            */
      
            //for
            /*
            for($i = 1; $i <= 10; $i++){
              echo("sou o número " . $i . "<br>");
            }
            
            echo "<br>";
      
            for ($i = 1; $i <= 10; $i++){
              if($i%2 == 0){
                echo "$i é par <br>";
              }else{
                echo $i . " é ímpar <br>";
              }
            }
            */
      
            //switch
            /*            
            $nome = "Camila";
      
            switch($nome){
              case "Ana":
                echo "Bem vinda Ana";
                break;
              case "Pedro":
                echo "Bem vindo Pedro";
                break;
              default:
                echo "Não conheço você ={";               
            }
            
            echo "<br>";
            $cor = "roxo";
      
            switch($cor){
              case "amarelo":
                echo "carro amarelo";
                break;
              case "azul":
                echo "carro azul";
                break;
              default:
                echo "não temos essa cor de carro";               
            }
            */
      
            //função
            /*            
            function soma($a, $b){
              $resultado = $a + $b;
              
              return $resultado;
            }
      
            $numero1 = 23;
            $numero2 = 20;
            
            $resultadoFuncao = soma($numero1, $numero2);
            echo "O resultado da soma " . $numero1 . " + " . $numero2 . " é " . $resultadoFuncao . "<br>";
            */
      
            //função 2
            /*            
            function soma2($a, $b){
              $resultado = $a + $b;
              echo "O resultado da soma " . $a . " + " . $b . " é " . $resultado . "<br>";
            }
      
            soma2(1, 5);
            soma2(7, 8);
            soma2(10.2, 6);
            */
            
            //array
            /*
            //$cores = array("vermelho", "azul");
            $cores = ["vermelho", "azul"];
            echo $cores[0];
            */
      
            //array
            /*
            $pessoa = ["nome" => "Ana", "idade" => 23];
            echo $pessoa["nome"];
            */
      
            //manipulando arrays: array_push
            /*
            $numeros = [1, 2, 3];
            array_push($numeros, 4);
            echo $numeros[3];
            */
      
            //percorrendo um array
            /*
            $frutas = array("maçã", "laranja", "morango");
            
            foreach($frutas as $fruta){
              echo "A fruta é " . $fruta . "<br>";
            }
            */
      
            //Adicionando e removendo itens de um array
            /*
            echo "Comidas Preferidas:<br>";
            $comidas = array("chocolate", "canja", "caldo verde");
            foreach($comidas as $comida){
              echo $comida . "<br>";
            }
            
            //array_push adiciona um item ao final do array
            echo "<br>Comidas Preferidas com Sopa de cebola:<br>";
            array_push($comidas, "Sopa de cebola");
            foreach($comidas as $comida){
              echo $comida . "<br>";
            }            
        
            //remove o ultimo item do array
            echo "<br>Comidas Preferidas sem Sopa de cebola:<br>";
            array_pop($comidas);
            foreach($comidas as $comida){
              echo $comida . "<br>";
            }
            */   
        ?>
      
    </body>
</html>