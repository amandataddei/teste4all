
@extends ('layout.site')

@section ('titulo','Ingressos')

@section ('conteudo')


    <h3 class=center>Informações do ingresso</h3>
 		    		 
    	<body>
      	    	 	
	      @foreach (\App\DetalheEvento::all() as $registro)
		 	
		 	<?php

		 	$condicao = false;

		 	?>

		 	<p>{{ $registro->evento_nome }}</p>
			

            						 
			<br>Quantidade de ingresso:<br><input type=text name=qtd  value={{ $registro->ingresso_inicial }} ><br><br>

			Valor:<br><input type=text name="valor" value="100,00"><br><br>

    			
    		@endforeach   
		
		    

		    <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 		    
							    
				<button type="submit">Finalizar</button>			
								

    	</body>

    </div>



@endsection







