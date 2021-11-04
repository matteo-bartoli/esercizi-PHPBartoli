<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>

    <h1>Gioco del numero piu' alto</h1>
       <?php
       session_start();
      
       $vincite=0;
       if(!isset( $_SESSION['tentativi'])){
           $_SESSION['tentativi']=1;
       }
       if(!isset( $_SESSION['nome'])){
       $_SESSION['nome']=$_POST['nome'];
        }
        if(!isset($_SESSION['vincite'])){
            $_SESSION['vincite']=0;
        }
       
       echo"Nome: " .$_SESSION['nome'] ."<br>" ;
       echo"Tentativi: " .$_SESSION['tentativi'];
       $_SESSION['tentativi']++;
       echo"
         <form action= 'pagina.php' method='post'>
            <input type='number' name='numero' max='9' min='1'>
            <input type='submit' value='Gioca'>
            </form>";
           if(isset($_POST['numero'])){

           
           if(rand(1,9)==$_POST['numero']||rand(1,9)==$_POST['numero']+1){

            $_SESSION['vincite']++;
                echo" ok ";
           }
           if( $_SESSION['vincite']>=3){

            
                echo"HAI VINTO IL GIOCO!!";
               session_destroy();
               header('Location: index.php');
           }
        }
            ?>

</body>

</html>