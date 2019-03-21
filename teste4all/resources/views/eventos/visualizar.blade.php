@extends ('layout.site')

@section ('titulo','Detalhe de Eventos')

@section ('conteudo')

	

    <h3 class=center>Detalhes do evento</h3>
 		    		 
    	<body>

    		@foreach (\App\DetalheEvento::all() as $registro)

    			
				  <p>{{ $registro->evento_nome }}</p><br>
	        <p>{{ $registro->local_nome }},{{ $registro->local_cidade }},{{ $registro->local_uf }}</p> <br>                      

				  <p>{{ $registro->descricao }}</p>		
			                			     	        
    			
    		@endforeach
    		
			<input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

			 <form method="GET" action="{{ action('DetalheEventoController@editar',$registro->evento_id) }}" accept-charset="UTF-8" name={{$registro->evento_id}} > <br><br>          
						  

			  <button type="submit" value={{$registro->evento_id}}>Comprar Ingresso</button>
			    
			</form>

    	</body>

    </div>

@endsection







