<?php $__env->startSection('titulo','Detalhe de Eventos'); ?>

<?php $__env->startSection('conteudo'); ?>

	

    <h3 class=center>Detalhes do evento</h3>
 		    		 
    	<body>

    		<?php $__currentLoopData = \App\DetalheEvento::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    			
				  <p><?php echo e($registro->evento_nome); ?></p><br>
	        <p><?php echo e($registro->local_nome); ?>,<?php echo e($registro->local_cidade); ?>,<?php echo e($registro->local_uf); ?></p> <br>                      

				  <p><?php echo e($registro->descricao); ?></p>		
			                			     	        
    			
    		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    		
			<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/> 

			 <form method="GET" action="<?php echo e(action('DetalheEventoController@editar',$registro->evento_id)); ?>" accept-charset="UTF-8" name=<?php echo e($registro->evento_id); ?> > <br><br>          
						  

			  <button type="submit" value=<?php echo e($registro->evento_id); ?>>Comprar Ingresso</button>
			    
			</form>

    	</body>

    </div>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>