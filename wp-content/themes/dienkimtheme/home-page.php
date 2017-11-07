<?php 
	/*
	 Template Name: HomePage
	 */	 
     global $zendvn_sp_settings;
     $contacted_phone=$zendvn_sp_settings['contacted_phone'];
     $email_to=$zendvn_sp_settings['email_to'];
     $address=$zendvn_sp_settings['address'];
     $to_name=$zendvn_sp_settings['to_name'];
     $telephone=$zendvn_sp_settings['telephone'];
     $website=$zendvn_sp_settings['website'];
     $opened_time=$zendvn_sp_settings['opened_time'];
     $opened_date=$zendvn_sp_settings['opened_date'];
     $contaced_name=$zendvn_sp_settings['contacted_name'];
     $facebook_url=$zendvn_sp_settings['facebook_url'];
     $twitter_url=$zendvn_sp_settings['twitter_url'];
     $google_plus=$zendvn_sp_settings['google_plus'];
     $youtube_url=$zendvn_sp_settings['youtube_url'];
     $instagram_url=$zendvn_sp_settings['instagram_url'];
     $pinterest_url=$zendvn_sp_settings['pinterest_url'];   
     ?>
     <?php get_header();     ?>
     <div class="margin-top-5">
        <div class="col-lg-12 no-padding">
            <?php if(is_active_sidebar('slideshow-widget')):?>
                <?php dynamic_sidebar('slideshow-widget')?>
            <?php endif; ?>              
        </div>                 
    </div>        
    <div class="container main margin-top-15">        
        <h3 class="header-title">Sản phẩm mới</h3>
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thiet-bi-ve-sinh-widget')):?>
                <?php dynamic_sidebar('thiet-bi-ve-sinh-widget')?>
            <?php endif; ?>  
        </div>                        
    </div>   
    <div class="bg-rausach margin-top-15">
        <?php if(is_active_sidebar('hot-news-widget')):?>
            <?php dynamic_sidebar('hot-news-widget')?>
        <?php endif; ?> 
    </div>
    <div>
        <div class="container">
            <h3 class="header-title margin-top-15">Tin tức</h3>
            <div>
                <?php if(is_active_sidebar('featured-article-widget')):?>
                    <?php dynamic_sidebar('featured-article-widget')?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer();?>
</body>
</html>