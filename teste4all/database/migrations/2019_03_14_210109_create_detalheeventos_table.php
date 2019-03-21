<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalheeventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema:: create ('detalhe_eventos', function (Blueprint $table) 
         
           { 
           
            $table->increments('id');
            $table->string('evento_id'); 
            $table->string('evento_nome'); 
            $table->string('seats_key'); 
            $table->string('seats_public_key'); 
            $table->string('categoria_id');
            $table->string('limite_ingressos_por_pedido'); 
            $table->timestamp('data'); 
            $table->string('data_final'); 
            $table->string('url_landing_page'); 
            $table->string('dt_primeira_apresentacao'); 
            $table->string('dt_ultima_apresentacao'); 
            $table->string('imagem_wide'); 
            $table->string('imagem_box'); 
            $table->string('imagem_mobile'); 
            $table->string('imagem_totem'); 
            $table->string('local_id'); 
            $table->string('local_nome'); 
            $table->string('local_cidade'); 
            $table->string('local_uf'); 
            $table->string('ingresso_inicial');
            $table->string('b_repeticao'); 
            $table->string('destaque');             
            $table->string('b_assento_numerado'); 
            $table->string('imagem_mapa');             
            $table->string('repeticao_id'); 
            $table->longText('descricao'); 
            $table->string('local_endereco'); 
            $table->string('local_numero'); 
            $table->string('local_complemento'); 
            $table->string('local_bairro'); 
            $table->string('local_cep'); 
            $table->string('local_lat'); 
            $table->string('local_lng'); 
            $table->string('possui_produtos'); 
            $table->string('encerrada'); 
            $table->string('esgotado'); 
            $table->string('seo'); 
            $table->string('seo_title');
            $table->string('seo_meta_description'); 
            $table->string('seo_meta_keywords'); 
            $table->string('seo_og_title'); 
            $table->string('seo_og_url'); 
            $table->string('seo_og_image'); 
            $table->string('seo_og_description'); 

            $table->rememberToken(); 

            $table->timestamps();

          } ) ;  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalhe_eventos');
    }
}
