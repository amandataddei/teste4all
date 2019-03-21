<?php $__env->startSection('titulo','Eventos'); ?>

<?php $__env->startSection('conteudo'); ?>

	<div class="container">

    <h3 class=center>Lista de eventos</h3>

    <div class="row">
    	
    	

    		
    		 
    		<body>

    			 <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>       			 
    			
    			<tr>
    				
    				<ul>
	    				<li><?php echo e($registro->evento_id); ?></li>
					     <li><?php echo e($registro->evento_nome); ?></li>
					     <li><?php echo e($registro->data); ?></li>
					     <li><img src="<?php echo e(asset($registro->imagem_box)); ?>" alt="<?php echo e($registro->titulo); ?>" /></li>					     
                         <li><?php echo e($registro->local_nome); ?></li>
                         <li><?php echo e($registro->local_cidade); ?></li>
                         <li><?php echo e($registro->local_uf); ?></li>
                         

					</ul>		
    					
    					<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/> 

    					 <form method="post" action="<?php echo e(action('EventoController@editar',$registro->evento_id)); ?>" accept-charset="UTF-8"> 					    
						    
						    <button type="submit">Visualizar Evento</button>
						    
						</form>


    			</tr>

    			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    		</body>


    </div>

</div>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>