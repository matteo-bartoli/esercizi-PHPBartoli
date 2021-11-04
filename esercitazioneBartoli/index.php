<html>
    <head>
       <?php session_start();?>
       <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
       <h1>Gioco del numero piu' alto</h1>
        <form action='pagina.php' method='post'>
            Nome: <input type='text' name='nome' required>
            <input type='submit' value='Gioca'>
            </form>
   
    </body>
</html>