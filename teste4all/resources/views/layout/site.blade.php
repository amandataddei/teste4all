

  <!DOCTYPE html>
  <html>
    <head>

      <meta charset="UTF-8">   
     
      <div align="center">      

       <title>@yield('titulo')</title>    
      

       <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Arial:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #000000;
                color: #FFFFFF;
                font-family: 'Arial';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            button {
    
  			    width:100px;
  			    height:50px;
  			    font-family: 'Arial';
  			    font-weight:bold;
  			    color:#f00;             			    
			     
           }
         
           
        
      </style>


     
    </head>

    <body>

    		
        <div class="container">
	
        	
              @yield('conteudo')
             

        </div>



    </body>

</div>

  </html>

