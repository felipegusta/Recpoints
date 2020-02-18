
    
<!DOCTYPE html>
   
<html>
    <style>
           
            
              Label{
            color: black;
            font-family:"Gill Sans", sans-serif ;
            font-size: 15px;
            float: inherit;
            margin-left: 20px;
            width: auto;
            height: auto;
            
            
             
                
        }
            button{
                background-color:#228B22;
            width: 200px;
            height: 40px;
            font-family: 'arial';
            font-size: 20px;
            color:white;
            border:solid;
            border-radius: 30px;
            border-color: white;
            margin-top:50px;
            margin-left:10px;
                  
        }
            
            
                .fundoLogin{
            background-color:darkseagreen;
            
            width: 700px ;
            height: 500px ;
            position: absolute;
            
            
        }
            .container {
         width: 10px;
         height: 10px;
         background: #4dff88;
         display: flex;
        flex-direction: center;
        
    
               
     }
     .box {
         background-size: 600px;
         height: 600px;
         width: auto;
         display:block;
         
         background-color: black;
             margin-right: 60px;
         border-color:black;
         border-radius: 20%;
         margin-top:50px;
         
          
         margin-bottom: 10px;
     
         
     }
     input{
                display:block;
                margin:5px 10px 10px 15px;
				width: 85% ;
            	border-radius:30px;
				border-color: white;
			    border :groove;
			
			}
       

 .body{
	background: url("images/bg-3.jpg") center no-repeat;
     background-size: 120%;
  
	position:relative;
}
			h1{
				font-family:"Gill Sans", sans-serif;
				font-size:50px;
				text-align:center;
				
			}
            h3{
                font-family:"Gill Sans", sans-serif;
                text-align:center;
                font-size:25px;
                width: 100%;
            }
			p{
                font-family:"Gill Sans", sans-serif;
				font-size: 25px;
				text-align:center;
        }
	li {
  display: inline;
}
 

   


/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}

			
</style>
    
         
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
    <title>RecPoints-Login</title>
    </head>
  
    
     <img src="images/logo2.png" position="absolute">

    
    
        
      

        

    
       
 
         
    
            
    <body class="body">
    
      

        <div class="box"> 
            <center>
            <h1>Login </h1> 
         <form class="form-signin" action="login.php" method="post">
      <center>
      <h3 class="h3 mb-3 font-weight-normal">Por favor, identifique-se</h3>
    
    <label for="email" class="sr-only">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
      
    <label for="senha" class="sr-only">Senha:</label> 
     <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required> 
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
         
        

              <p>Ainda não possui uma conta Recpoints? <b><a href="usuario_form.php" style="color:#00802b
                  ; text-decoration: none; ">Cadastre- se aqui!</a></b></p>

            
         
             </center>
         </form>
                 </center>
             </div>

       
      

    
        
    
    <?php include("inc/rodape.php"); ?>