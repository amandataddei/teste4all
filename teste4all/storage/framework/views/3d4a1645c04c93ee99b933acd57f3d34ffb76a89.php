<?php $__env->startSection('titulo','Ingressos'); ?>

<?php $__env->startSection('conteudo'); ?>


    <h3 class=center>Informações do ingresso</h3>
 		    		 
    	<body>

	      <?php $__currentLoopData = \App\DetalheEvento::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		 	
		 	<?php

		 	$condicao = false;

		 	?>

		 	<p><?php echo e($registro->evento_nome); ?></p>
						                   			     	
            						 
			<br>Quantidade de ingresso:<br><input type=text name=qtd  value=<?php echo e($registro->ingresso_inicial); ?> ><br><br>

			Valor:<br><input type=text name="valor" value="100,00"><br><br>


    			
    		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   


    		<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/> 

			<form method="GET" action="<?php echo e(action('EventoController@notification')); ?>" accept-charset="UTF-8" name="evento_id" > 	    
						    
			 <button type="submit">Finalizar</button>
	
			</form>


    	</body>

    </div>



<?php $__env->stopSection(); ?>








<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>