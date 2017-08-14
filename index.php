   <html>
   <head>
   </head>
   <body>
  
   <?
   
   
   $var1 = "PHP";
   $variavelValor = 50.00;
           
           
     echo  $var1. "<br>" ;
     echo  $variavelValor. "<br>";
    
    // constante 
     define ("PI", 3.14);
     define ("NOME_EMPRESA", "Softblue");
     
     $resultado = PI * 2;
     echo  $resultado. "<br>";
     
     
     echo  "Você está na". NOME_EMPRESA. "<br>";
     
      //operadores matemáticos
      
     $x = "Andre". " Milani". "<br>";
     
      echo $x;
      
     
      $x = 3;
      $y= 5 + ++$x;
         
          
      echo "x = " . $x. "<br>";
      echo "y = " . $y. "<br>";
      
       $x = 3;
      $x += 10;
          echo "x = " . $x. "<br>";
     
     // função ROUND
     
        $x = 3.567;
      $x = round ($x, 2,PHP_ROUND_HALF_UP);
          echo "x = " . $x. "<br>";
          
     //OPERADORES CONDIÇÕES
     
     if ("Softblue" == "Soft"."blue")  {
          echo "Verdadeiro". "<br>";
         
     }
          else  {
          
            echo "Falso". "<br>";
          
          }
        
        
        
        if (9<4)  {
          echo "Verdadeiro". "<br>";
         
     }
          else  {
          
            echo "Falso". "<br>";
          
          }
          
          
          if (3<4 || 4<2)  {
          echo "Verdadeiro". "<br>";
         
     }
          else  {
          
            echo "Falso". "<br>";
          
          }
          
             $x = 3;
          if ($x<18)  {
          echo "Menor de idade". "<br>";
         
     }
          else  {
          
            echo "Maior de idade". "<br>";
          
          }
          
          
              $x = true;
          if ($x)  {
          echo "Verdadeiro". "<br>";
         
     }
          else  {
          
            echo "Falso". "<br>";
          
          }  
          
          
         
     }
          else  {
          
            echo "Falso". "<br>";
          
          }  
            echo "<br> x = ".$x. "<br>";         
        
       // short if
            
      $x = 5;
      
      
          if ( $x % 2 == 0)  {
          $y = "PAR". "<br>";
         
     }
          else  {
          
            $y =  "IMPAR". "<br>";
          
          }  
              echo "<br> x = ".$y. "<br>";      
              
              // forma mais simples
               
       $x = 5;
    
        $x % 2 == 0 ? $y = "PAR" : $y = "IMPAR";          
              echo "<br> x = ".$y. "<br>";                 
            
      //  SWITCH
     
      $i = 1;
      
      
        switch ($i) {
        
        case 0 ;
        echo "ZERO <br>" ;
        break;
        
        case 1;
        echo "UM <br>" ;
        break;
        
       case 2 ;
        echo "DOIS <br>" ;
        break;
        
        default;
        echo "nenhum valor" ;
        break;
               }
               
               // operadores de repetição
               
      
       //for
      for ($i = 0; $i < 10; $i++) {
      
      if ($i ==4) {
      break;
      }
      
      echo $i . " ";
      
      
      
      }
               
      echo "fim"."<BR>"; 
      
      
      // while
        $i=1;
        
      while ($i<10)    {
      
      $i++;
      
       if ($i ==4) {
      continue;
      }
      
      echo $i . " ";   
      }   
       echo "fim"."<BR>";    
         
         // do while
         
        $y=50;
        
      do     {
      
      $y++;
      
      
      
      echo $y . " ";   
      
      }  while ($y<10); 
      
        echo "fim"."<BR>"; 
     
        
      // Instrução GOTO
      
      echo "<br> Iniciando" ;
      goto saindo;
      
        
       echo "<br> Executando" ;
       
       saindo:
       echo "<br> Finalizando <br><br>" ; 
        
          //SUPERVARIAVEIS
          
          
           //echo $_SERVER ["SERVER_ADDR"];
         
             
           // echo $_SERVER ["REMOTE_ADDR"];
               
          //echo $_SERVER ["SERVER_NAME"];
          
          //echo $_SERVER ["HTTP_USER_AGENT"];
             
          
           //echo $_SERVER ["HTTP_ACCEPT_ENCODING"];
           
      //include
           
          include ("auxiliar.php");
          
          echo $texto;
          
          //require
           
          require ("auxiliar.php");
          
          echo $texto;
           
           

           
   ?>
   
   
   </body>
   </html>