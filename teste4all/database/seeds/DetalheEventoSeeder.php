
 <?php 
 
 use   Illuminate \ Database \ Seeder ; 
 use   App \ DetalheEvento ; 
 
 class   DetalheEventoSeeder   extends   Seeder   { 
 
     public   function   run ( ) 
     { 
         DB:: table ( 'detalhe_eventos' ) -> delete ( ) ; 
         $json   =   File:: get ( "database/data/detalheevento.json" ) ; 
         $data   =   json_decode ( $json) ; 
         foreach   ( $data   as   $obj )   { 
            
           DetalheEvento:: create ( array ( 

             'id'=> $obj -> id , 
             'evento_id'=> $obj -> evento_id ,              
             'evento_nome'=> $obj -> evento_nome , 
             'seats_key'=> $obj -> seats_key , 
             'seats_public_key'=> $obj -> seats_public_key, 
             'categoria_id'=> $obj -> categoria_id,
             'limite_ingressos_por_pedido'=> $obj -> limite_ingressos_por_pedido,
             'data'=> $obj -> data,
             'data_final'=> $obj -> data_final,
             'url_landing_page'=> $obj -> url_landing_page,
             'dt_primeira_apresentacao'=> $obj -> dt_primeira_apresentacao,
             'dt_ultima_apresentacao'=> $obj -> dt_ultima_apresentacao,
             'imagem_wide'=> $obj -> imagem_wide,
             'imagem_box'=> $obj -> imagem_box,
             'imagem_mobile'=> $obj -> imagem_mobile,
             'imagem_totem'=> $obj -> imagem_totem,
             'local_id'=> $obj -> local_id,
             'local_nome'=> $obj -> local_nome,
             'local_cidade'=> $obj -> local_cidade,
             'local_uf'=> $obj -> local_uf,
             'ingresso_inicial'=> $obj -> ingresso_inicial,
             'b_repeticao'=> $obj -> b_repeticao,
             'destaque'=> $obj -> destaque,
             'b_assento_numerado'=> $obj -> b_assento_numerado,
             'imagem_mapa'=> $obj -> imagem_mapa,
             'repeticao_id'=> $obj -> repeticao_id,
             'descricao'=> $obj -> descricao,
             'local_endereco'=> $obj -> local_endereco,
             'local_numero'=> $obj -> local_numero,
             'local_complemento'=> $obj -> local_complemento,
             'local_bairro'=> $obj -> local_bairro,
             'local_cep'=> $obj -> local_cep,
             'local_lat'=> $obj -> local_lat,
             'local_lng'=> $obj -> local_lng,
             'possui_produtos'=> $obj -> possui_produtos,
             'encerrada'=> $obj -> encerrada,
             'esgotado'=> $obj -> esgotado,
             'seo'=> $obj -> seo,
             'seo_title'=> $obj -> seo_title,
             'seo_meta_description'=> $obj -> seo_meta_description,
             'seo_meta_keywords'=> $obj -> seo_meta_keywords,
             'seo_og_title'=> $obj -> seo_og_title,
             'seo_og_url'=> $obj -> seo_og_url,
             'seo_og_image'=> $obj -> seo_og_image,
             'seo_og_description'=> $obj -> seo_og_description


           ) ) ; 
         } 
     } 
 
 } 
 
 ?>