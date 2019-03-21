<?php $__env->startSection('titulo','Lista de Eventos'); ?>

<?php $__env->startSection('conteudo'); ?>


    <h3 class=center>Lista de eventos</h3>
 		    	

    		<body>

    			 <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  			 
    			   			    				
    				

			     <hr><?php echo e($registro->evento_nome); ?></hr>
			     <p><?php echo e($registro->data); ?></p>                     			     				     
                 <p><?php echo e($registro->local_nome); ?>,<?php echo e($registro->local_cidade); ?>,<?php echo e($registro->local_uf); ?></p> 


                 <p><img src="<?php echo e(asset($registro->imagem_box)); ?>" alt="<?php echo e($registro->titulo); ?>" /></p>   
                                         
					    					

				<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/> 

				 <form method="GET" action="<?php echo e(action('DetalheEventoController@visualizar',$registro->evento_id)); ?>" accept-charset="UTF-8" name="evento_id" > 		    
				    
				  <button type="submit">Informacoes do Evento</button>
				    
				</form>
    			
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    		</body>

    </div>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>