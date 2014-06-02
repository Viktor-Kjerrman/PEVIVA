<?php
/*
Template Name: Home Page Template
*/
?>
<?php get_header(); ?>
<div class="container add-top ">
  <div class="row">
    <div class="col-md-8 pevivabox">
        
    <div id="swiper-cont" class="swiper-container swiper-content">
    <div class="swiper-wrapper">
      

 
<?php $sideposts1 = new WP_Query('category_name=firsslider&post_type=page&showposts=4'); ?>
    <?php if ( $sideposts1->have_posts() ) : while ( $sideposts1->have_posts() ) : $sideposts1->the_post(); ?>
        <div class="swiper-slide">
        <div class="inner">
        <div class="img-crop">
                  <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail(full);
                        } 
                  ?>  
        </div>   
      <h1 class="text-center"><?php the_title();?></h1>
      <p class="paddtext">PEVIVA specializes in ELISA assays for the quantification of Cell Death modes (apoptosis and necrosis). Our products are used for research and clinical trials in the fields of oncology and hepatology.  </p>
          <div class="clearfix"></div>
        </div>
      </div>

        <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>
      
            
            
            </div>
          </div>
            
    <div id="swiper-nav" class="swiper-container swiper-nav">
    <div class="swiper-wrapper">
      <div class="swiper-slide active-nav">
      </div>
            <div class="swiper-slide">
      </div>
      <div class="swiper-slide">
      </div>
        </div>
        </div>
      </div>
      
       
     <div class="sidebar col-md-4">


      <div class="col-md-12 pevivabox">
      <h1>NEWS</h1>
      </div>
         
         <div id="swiper-cont-2" class="swiper-container swiper-content">
    <div class="swiper-wrapper">
    <?php $sideposts = new WP_Query('post_type=post&category_name=firstpage&showposts=4'); ?>
    <?php if ( $sideposts->have_posts() ) : while ( $sideposts->have_posts() ) : $sideposts->the_post(); ?>
         
         <div class="pevivabox swiper-slide">
        <div class="row inner">
             
          <div class="img-container">
          <?php if ( has_post_thumbnail($thumbnail->ID)) {
              echo '<a href="' . get_permalink( $thumbnail->ID ) . '" title="' . esc_attr( $thumbnail->post_title ) . '">';
              echo get_the_post_thumbnail($thumbnail->ID, 'large');
              echo '</a>';
            } ?>
          </div>   
        </div>
        <h3><?php the_title(); ?></h3>
      </div>

    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

    <?php wp_reset_query(); ?>

    </div>
          </div>
            
    <div id="swiper-nav-2" class="swiper-container swiper-nav">
    <div class="swiper-wrapper">
      <div class="swiper-slide active-nav">
      </div>
            <div class="swiper-slide">
      </div>
      <div class="swiper-slide">
      </div>
            </div>
        </div>     
    </div>
      
      <div class="row">
      <div class="col-md-12">
      <h1 class="category">Our Products</h1>  

    <div id="swiper-cont-3" class="swiper-container swiper-content-3">
    <div class="swiper-wrapper">
      <div class="row">
    <?php $sideposts1 = new WP_Query('post_type=product&showposts=4'); ?>
    <?php if ( $sideposts1->have_posts() ) : while ( $sideposts1->have_posts() ) : $sideposts1->the_post(); ?>
         <?php $descdesc = get_post_meta($post->ID, 'description', true); ?>
         
        <div class="swiper-slide col-md-4">
        <div class="row inner pevivabox">
    
       
        <h3><?php the_title(); ?></h3>
          <p class="desc">
            <?php
                        if($descdesc != '') {
            ?>
            
                            <?php echo $descdesc;?>
    
          <?php } ?>

          </p>
      </div>
       </div>


    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

    <?php wp_reset_query(); ?>
    </div>
    </div>
          </div>
            
    <div id="swiper-nav-3" class="swiper-container swiper-nav">
    <div class="swiper-wrapper">
      <div class="swiper-slide active-nav">
      </div>
            <div class="swiper-slide">
      </div>
      <div class="swiper-slide">
      </div>
            </div>
        </div>    
  </div>
  </div>
      
      
    
  </div>
</div>
<?php get_footer(); ?>