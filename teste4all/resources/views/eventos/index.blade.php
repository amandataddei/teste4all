@extends ('layout.site')

@section ('titulo','Lista de Eventos')

@section ('conteudo')

	<div class="container">

    <h3 class=center>Lista de eventos</h3>

    <div class="row">
        		 
    		<body>

    			 @foreach ($registros as $registro)       			 
    			
    			<tr>
    				
    				<ul>
	    				<li>{{ $registro->evento_id }}</li>
					     <li>{{ $registro->evento_nome }}</li>
					     <li>{{ $registro->data }}</li>
					     <li><img src="{{asset($registro->imagem_box)}}" alt="{{ $registro->titulo}}" /></li>					     
                         <li>{{ $registro->local_nome }}</li>
                         <li>{{ $registro->local_cidade }}</li>
                         <li>{{ $registro->local_uf }}</li>
                         

					</ul>		
    					
    					<input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

    					 <form method="post" action="{{ action('EventoController@editar',$registro->evento_id) }}" accept-charset="UTF-8"> 					    
						    
						    <button type="submit">Visualizar Evento</button>
						    
						</form>


    			</tr>

    			@endforeach
    		</body>


    </div>

</div>

@endsection







