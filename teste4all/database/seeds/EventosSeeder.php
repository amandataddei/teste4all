
 <?php 
 
 use   Illuminate \ Database \ Seeder ; 
 use   App \ Evento ; 
 
 class   EventosSeeder   extends   Seeder   { 
 
     public   function   run ( ) 
     { 
         DB:: table ( 'eventos' ) -> delete ( ) ; 
         $json   =   File:: get ( "database/data/eventos.json" ) ; 
         $data   =   json_decode ( $json) ; 
         foreach   ( $data   as   $obj )   { 
           Evento:: create ( array ( 
             'id'=>   $obj -> id , 
             'evento_id'=>   $obj -> evento_id , 
             'evento_nome'=>   $obj -> evento_nome , 
             'seats_key'=>   $obj -> seats_key , 
             'seats_public_key'=>   $obj -> seats_public_key, 
             'categoria_id'=>   $obj -> categoria_id,
             'limite_ingressos_por_pedido'=>   $obj -> limite_ingressos_por_pedido,
             'data'=>   $obj -> data,
             'data_final'=>   $obj -> data_final,
             'url_landing_page'=>   $obj -> url_landing_page,
             'dt_primeira_apresentacao'=>   $obj -> dt_primeira_apresentacao,
             'dt_ultima_apresentacao'=>   $obj -> dt_ultima_apresentacao,
             'imagem_wide'=>   $obj -> imagem_wide,
             'imagem_box'=>   $obj -> imagem_box,
             'imagem_mobile'=>   $obj -> imagem_mobile,
             'imagem_totem'=>   $obj -> imagem_totem,
             'local_id'=>   $obj -> local_id,
             'local_nome'=>   $obj -> local_nome,
             'local_cidade'=>   $obj -> local_cidade,
             'local_uf'=>   $obj -> local_uf,
             'b_repeticao'=>   $obj -> b_repeticao,
             'destaque'=>   $obj -> destaque,
             'nivel_destaque'=>   $obj -> nivel_destaque,
             'b_assento_numerado'=>   $obj -> b_assento_numerado,
             'imagem_mapa'=>   $obj -> imagem_mapa,
             'dt_fim_vendas_internet'=>   $obj -> dt_fim_vendas_internet,
             'seo_title'=>   $obj -> seo_title,
             'seo_meta_description'=>   $obj -> seo_meta_description,
             'seo_meta_keywords'=>   $obj -> seo_meta_keywords,
             'seo_og_title'=>   $obj -> seo_og_title,
             'seo_og_url'=>   $obj -> seo_og_url,
             'seo_og_image'=>   $obj -> seo_og_image,
             'seo_og_description'=>   $obj -> seo_og_description,
             'pontos_venda'=>   $obj -> pontos_venda,
             'ingresso_inicial'=>   $obj -> ingresso_inicial,
             'repeticao_id'=>   $obj -> ingresso_inicial,
             'url_portal'=>   $obj -> url_portal


           ) ) ; 
         } 
     } 
 
 } 
 
 ?>