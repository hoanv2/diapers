<style>
    /**
     * Trang hiển thị chi tiết sản phẩm
     */
    .entry-header {
        display: block;
        overflow: auto;
    }
    .entry-header .left {
        float: left;
        margin-right: 1em;
        width: 53%;
    }
    .entry-header .right {
        float: right;
        width: 42%;
    }
    .entry-price {
        font-weight: bold;
        color: #1dad1d;
        font-size: 1.6em;
    }

    .sanpham_att_table  {border-collapse:collapse;border-spacing:0;width: 100%;}
    .sanpham_att_table td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .sanpham_att_table th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .sanpham_att_table .sanpham_att_table_row{vertical-align:top}

    .nf-modal-link {
        background-color: #DA4453;
        border-color: #DA4453;
        -webkit-transition: background-color 0.3s linear;
        -moz-transition: background-color 0.3s linear;
        -o-transition: background-color 0.3s linear;
        transition: background-color 0.3s linear;
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #f3f3f3;
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="post-inner-content">
      <header class="entry-header page-header">
         <div class="left">
            <?php if (has_post_thumbnail( $post->ID )) : ?>
                <?php the_post_thumbnail( 'sanpham_thumb' ); ?>
            <?php endif; ?>
         </div>
         <div class="right">
            <h1 class="entry-title "><?php the_title(); ?></h1>
            <div class="entry-cat"><?php the_taxonomies( $args ); ?></div>
            <div class="entry-price">Giá: <?php echo get_post_meta( $post->ID, 'sanpham_price', true ); ?></div>
         </div>

      </header><!-- .entry-header -->

      <div class="entry-content">
         <?php the_content(); ?>

          <div class="sanpham_att">
            <?php $sanpham_atts = get_post_meta($post->ID, 'sanpham_attributes', false); ?>
              <table class="sanpham_att_table">
               <?php
               foreach ($sanpham_atts as $atts) {
                   foreach ($atts as $att) {?>
                       <tr class="sanpham_att_table_row">
                        <th><?php echo $att['sanpham_att_name']; ?></th>
                        <th><?php echo $att['sanpham_att_value']; ?></th>
                     </tr>
                   <?php }
               }
               ?>
            </table>
         </div>
          <?php
          wp_link_pages( array(
              'before'            => '<div class="page-links">'.esc_html__( 'Pages:', 'sparkling' ),
              'after'             => '</div>',
              'link_before'       => '<span>',
              'link_after'        => '</span>',
              'pagelink'          => '%',
              'echo'              => 1
          ) );
          ?>
      </div><!-- .entry-content -->

   </div>

        <?php if (get_the_author_meta('description')) :  ?>
            <div class="post-inner-content secondary-content-box">
         <!-- author bio -->
         <div class="author-bio content-box-inner">

            <!-- avatar -->
            <div class="avatar">
               <?php echo get_avatar(get_the_author_meta('ID') , '60'); ?>
            </div>
             <!-- end avatar -->

             <!-- user bio -->
            <div class="author-bio-content">

               <h4 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h4>
               <p class="author-description">
                  <?php echo get_the_author_meta('description'); ?>
               </p>

            </div><!-- end .author-bio-content -->

         </div><!-- end .author-bio  -->

      </div>
        <?php endif; ?>
    <div class="buy-btn"> Đặt Hàng<?php echo do_shortcode( '[ninja_forms id=3 text_link="Đặt hàng"]' ); ?></div>

</article>