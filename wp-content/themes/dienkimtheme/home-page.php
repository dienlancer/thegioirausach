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
     <div class="container margin-top-5">
        <div class="col-lg-8 no-padding">
            <?php if(is_active_sidebar('slideshow-widget')):?>
                <?php dynamic_sidebar('slideshow-widget')?>
            <?php endif; ?>              
        </div>
        <div class="col-lg-4 no-padding">
            <center><img src="<?php echo site_url( '/wp-content/uploads/banner_right_1.jpg', null ); ?>" /></center>
            <center><img src="<?php echo site_url( '/wp-content/uploads/banner_right_2.jpg', null ); ?>" /></center>
        </div>                    
    </div>
    <div class="container">
        <div class="col-lg-6 no-padding"><center><figure><img src="<?php echo site_url( '/wp-content/uploads/banner_home_1.jpg',null ); ?>" /></figure></center></div>
        <div class="col-lg-6 no-padding"><center><figure><img src="<?php echo site_url( '/wp-content/uploads/banner_home_2.jpg',null ); ?>" /></figure></center></div>
    </div>    
    <div class="container main margin-top-15">        
        <div class="header-title">
            <h2>
                Top bán chạy trong tuần
            </h2>   
            <div class="clr"></div>          
        </div>  
        <div class="clr"></div>
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thiet-bi-ve-sinh-widget')):?>
                <?php dynamic_sidebar('thiet-bi-ve-sinh-widget')?>
            <?php endif; ?>  
        </div>
        <div class="header-title margin-top-15">
            <h2>
                Điện thoại Tablet
            </h2>             
            <?php     
                $args = array( 
                    'menu'              => '', 
                    'container'         => '', 
                    'container_class'   => '', 
                    'container_id'      => '', 
                    'menu_class'        => 'dienthoaitabletmenu', 
                    'menu_id'           => 'dien-thoai-tablet-menu', 
                    'echo'              => true, 
                    'fallback_cb'       => 'wp_page_menu', 
                    'before'            => '', 
                    'after'             => '', 
                    'link_before'       => '', 
                    'link_after'        => '', 
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                    'depth'             => 3, 
                    'walker'            => '', 
                    'theme_location'    => 'dien-thoai-tablet-menu' 
                );
                wp_nav_menu($args);
                ?>   
                <div class="clr"></div>
        </div>   
        <div class="margin-top-15">
            <div class="col-lg-8 no-padding">
                <div><center><figure><img src="<?php echo site_url( '/wp-content/uploads/banner_product_home_tablet.jpg',null ); ?>" /></figure></center></div>
                <?php if(is_active_sidebar('thiet-bi-bep-widget')):?>
                    <?php dynamic_sidebar('thiet-bi-bep-widget')?>
                <?php endif; ?>  
            </div>
            <div class="col-lg-4 no-padding-right">
                <?php if(is_active_sidebar('goi-y-mot-widget')):?>
                    <?php dynamic_sidebar('goi-y-mot-widget')?>
                <?php endif; ?>  
            </div>      
            <div class="clr"></div>      
        </div>
        <div class="header-title margin-top-15">
            <h2>
                Máy tính laptop
            </h2>             
            <div class="clr"></div>            
        </div>   
        <div class="margin-top-15">
            <div class="col-lg-8 no-padding">
                <div><center><figure><img src="<?php echo site_url( '/wp-content/uploads/banner-may-tinh-laptop.jpg',null ); ?>" /></figure></center></div>
                <?php if(is_active_sidebar('clever-house-widget')):?>
                    <?php dynamic_sidebar('clever-house-widget')?>
                <?php endif; ?>  
            </div>
            <div class="col-lg-4 no-padding-right">
                <?php if(is_active_sidebar('goi-y-hai-widget')):?>
                    <?php dynamic_sidebar('goi-y-hai-widget')?>
                <?php endif; ?>  
            </div>       
            <div class="clr"></div>       
        </div>
        <div class="header-title margin-top-15">
            <h2>
                Phụ kiện công nghệ
            </h2>   
            <?php     
            $args = array( 
                'menu'              => '', 
                'container'         => '', 
                'container_class'   => '', 
                'container_id'      => '', 
                'menu_class'        => 'dienthoaitabletmenu', 
                'menu_id'           => 'phu-kien-cong-nghe-menu', 
                'echo'              => true, 
                'fallback_cb'       => 'wp_page_menu', 
                'before'            => '', 
                'after'             => '', 
                'link_before'       => '', 
                'link_after'        => '', 
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                'depth'             => 3, 
                'walker'            => '', 
                'theme_location'    => 'phu-kien-cong-nghe-menu' 
            );
            wp_nav_menu($args);
            ?>   
            <div class="clr"></div>                          
        </div>   
        <div class="margin-top-15">
            <div class="col-lg-8 no-padding">
                <div><center><figure><img src="<?php echo site_url( '/wp-content/uploads/phu-kien-hot-banner.jpg',null ); ?>" /></figure></center></div>
                <?php if(is_active_sidebar('thiet-bi-ve-sinh-widget')):?>
                    <?php dynamic_sidebar('thiet-bi-ve-sinh-widget')?>
                <?php endif; ?>  
            </div>
            <div class="col-lg-4 no-padding-right">
                <?php if(is_active_sidebar('goi-y-ba-widget')):?>
                    <?php dynamic_sidebar('goi-y-ba-widget')?>
                <?php endif; ?>  
            </div>       
            <div class="clr"></div>       
        </div>
        <div class="header-title margin-top-15">
            <h2>
                Mẹ và bé
            </h2>               
            <div class="clr"></div>                          
        </div>   
        <div class="margin-top-15">
            <div class="col-lg-8 no-padding">
                <div><center><figure><img src="<?php echo site_url( '/wp-content/uploads/me-va-be-banner.jpg',null ); ?>" /></figure></center></div>
                <?php if(is_active_sidebar('me-va-be-widget')):?>
                    <?php dynamic_sidebar('me-va-be-widget')?>
                <?php endif; ?>  
            </div>
            <div class="col-lg-4 no-padding-right">
                <?php if(is_active_sidebar('goi-y-bon-widget')):?>
                    <?php dynamic_sidebar('goi-y-bon-widget')?>
                <?php endif; ?>  
            </div>       
            <div class="clr"></div>       
        </div>
    </div>   
    <div class="cleverhouse margin-top-15 padding-bottom-15">
        <div class="container">
            <div class="header-title">
                <h4><span><font color="#3AB54A">Tin</font></span>&nbsp;mới</h4>                          
            </div>  
            <div class="margin-top-15">
                <?php if(is_active_sidebar('hot-news-widget')):?>
                    <?php dynamic_sidebar('hot-news-widget')?>
                <?php endif; ?>  
            </div>
        </div>   
    </div>         
    <?php get_footer(); ?>
    <?php wp_footer();?>
</body>
</html>