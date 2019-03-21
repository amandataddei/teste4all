@extends ('layout.site')

@section ('titulo','Lista de Eventos')

@section ('conteudo')


    <h3 class=center>Lista de eventos</h3>
 		    	

    		<body>

    			 @foreach ($registros as $registro)  			 
    			   			    				
    				

			     <hr>{{ $registro->evento_nome }}</hr>
			     <p>{{ $registro->data }}</p>                     			     				     
                 <p>{{ $registro->local_nome }},{{ $registro->local_cidade }},{{ $registro->local_uf }}</p> 


                 <p><img src="{{asset($registro->imagem_box)}}" alt="{{ $registro->titulo}}" /></p>   
                                         
					    					

				<input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

				 <form method="GET" action="{{ action('DetalheEventoController@visualizar',$registro->evento_id) }}" accept-charset="UTF-8" name="evento_id" > 		    
				    
				  <button type="submit">Informacoes do Evento</button>
				    
				</form>
    			
    			@endforeach

    		</body>

    </div>

@endsection







