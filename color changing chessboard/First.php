     <html> 
     <head> 
         <br><br>
         <center>
  <title>Perry</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
                crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous" 
                referrerpolicy="no-referrer" />

    
</head>

  
  <body> 
  

  <div class="container">
  <h2>Dynamic Chessboard Pattern</h2> <br>
        <?php
            include "change.php";
        ?>
        


    <form action="processor.php" method="POST">               
                <br><br>
            <div class = form>
                    <div class="input-group input-group-lg">
                    
                    <i class="fa-solid fa-palette  fa-3x"></i> </i> &nbsp;
                        <input type="text" class="form-control" placeholder="Color 1" name="color1"> <br>
                        <input type="text" class="form-control" placeholder="Color 2" name="color2">
                    </div>
                    <br>
                    <button class="button">
                    Change
                </button>   
            </div>
        </form>


  </table>
  </body>
  </html>


  <style type="text/css">

   body {  

    margin: 0;  
    padding: 0;  
    background-color:#6abadeba;  
    font-family: 'Arial';  

} .form {  

    width: 382px;  
    overflow: hidden;  
    margin: auto;  
    padding: 30px;  
    background: grey;  
    border-radius: 15px;         
} .button {
  padding: 10px 20px;
  font-size: 14px;
  text-align: right;
  cursor: pointer;
  outline: none;

  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
}

.button:hover{
    background-color: #ADD8E6;
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>