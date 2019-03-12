<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
 
    /**
     * Run the migrations.
     *
     * @return void
     */

    public   function   up ( ) 
      { 
           Schema:: create ( 'eventos' ,   function ( Blueprint   $table ) 
           { 
                $table -> increments ( 'id' ) ; 
                $table -> string ( 'evento_id' ) ; 
                $table -> string ( 'evento_nome' ) ; 
                $table -> string ( 'seats_key' ) ; 
                $table -> string ( 'seats_public_key' ) ; 
                $table -> string ( 'categoria_id' ) ; 
                $table -> string ( 'limite_ingressos_por_pedido' ) ; 
                $table -> string ( 'data' ); 
                $table -> string ( 'data_final'); 
                $table -> string ( 'url_landing_page' ) ; 
                $table -> string ( 'dt_primeira_apresentacao' ); 
                $table -> string ( 'dt_ultima_apresentacao' ); 
                $table -> string ( 'imagem_wide' ) ; 
                $table -> string ( 'imagem_box' ) ; 
                $table -> string ( 'imagem_mobile' ) ; 
                $table -> string ( 'imagem_totem' ) ; 
                $table -> string ( 'local_id' ) ; 
                $table -> string ( 'local_nome' ) ; 
                $table -> string ( 'local_cidade' ) ; 
                $table -> string ( 'local_uf' ) ; 
                $table -> string ( 'b_repeticao' ) ; 
                $table -> string ( 'destaque' ) ; 
                $table -> string ( 'nivel_destaque' ) ; 
                $table -> string ( 'b_assento_numerado' ) ; 
                $table -> string ( 'imagem_mapa' ) ; 
                $table -> string ( 'dt_fim_vendas_internet' ); 
                $table -> string ( 'seo_title' ) ; 
                $table -> string ( 'seo_meta_description' ) ; 
                $table -> string ( 'seo_meta_keywords' ) ; 
                $table -> string ( 'seo_og_title' ) ; 
                $table -> string ( 'seo_og_url' ) ; 
                $table -> string ( 'seo_og_image' ) ; 
                $table -> string ( 'seo_og_description' ) ; 
                $table -> string ( 'pontos_venda' ) ; 
                $table -> string ( 'ingresso_inicial' ) ; 
                $table -> string ( 'repeticao_id' ) ; 
                $table -> string ( 'url_portal' ) ; 



                $table -> rememberToken ( ) ; 
                $table -> timestamps ( ) ; 
           } ) ; 
      } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public   function   down ( ) 
      { 
           Schema::dropIfExists('eventos');
      } 
}
