<!-- 
    ACF this block consist of follwing variable: 
    - Post Taxanomy * = "catagory" -> Select;
 -->
 <div class="s-container">
    <?php 
        $post_type = get_field('catagory');
    ?>

    <?php 
        if($post_type){ 
            $query = new WP_Query( 
                array( 
                    'cat' => $post_type,
                    'posts_per_page' => 8
                )
            );
            echo '<div class="s-slider -m1.2 -d4 c-slider">';
            if($query->have_posts()) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                ?>

                    <?php
                        // get Social Media
                        $social_name = get_field('social_media', get_the_ID());
                        $social_link = get_field('social_media_url', get_the_ID());
                    ?>
                    <div class="slider">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('content-item -card -social'); ?>>
                            
                            <a href="<?php echo "https://".$social_link; ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="external" target="_blank" class="-name <?php echo $social_name; ?>">
                                <?php 
                                    switch ($social_name) {
                                        case "facebook":
                                            echo seed_icon('s-facebook');
                                            break; 
                                        case "twitter":
                                            echo seed_icon('s-twitter');
                                            break;
                                        case "instagram":
                                            echo seed_icon('instagram');
                                            break;
                                        case "youtube":
                                            echo seed_icon('s-youtube');
                                            break;
                                        case "pinterest":
                                            echo seed_icon('s-pinterest');
                                            break;
                                        case "linkedin":
                                            echo seed_icon('s-linkedin');
                                            break;
                                        case "podcast":
                                            echo "<i class='fas fa-podcast'></i>";
                                            break;
                                        default:
                                           break;
                                    }
                                ?>
                            </a>

                            <a href="<?php echo "https://".$social_link; ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="external" target="_blank">
                                <div class="pic">
                                   <div class="pic--inner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                                </div>
                            </a>
                            <div class="info">
                                <header class="entry-header">
                                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" target="_blank">', esc_url( $social_link ) ), '</a></h2>' ); ?>
                                </header>
                            </div>
                        </article>
                    </div>
                <?php  
                }
                wp_reset_postdata();
            }
            echo '</div>';
        }
    ?>
</div>