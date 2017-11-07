<?php 
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
     $ban_do=$zendvn_sp_settings['ban_do'];
?>
<footer class="footer padding-top-15">
	<div class="container">
		<div class="col-lg-6 no-padding">
			<h3 class="we-are-here">Chúng tôi ở đây</h3>
			<div class="margin-top-5"><?php echo $address; ?></div>
			<div class="margin-top-15">Tư vấn bán hàng (<?php echo $opened_time; ?> hằng ngày) </div>
			<div><?php echo $contacted_phone; ?></div>
			<div class="margin-top-15">
				<div class="col-lg-6 no-padding">
					<div >Tư vấn đổi trả (<?php echo $opened_time; ?> hằng ngày) </div>
					<div><?php echo $contacted_phone; ?></div>
				</div>
				<div class="col-lg-6 no-padding-right">
					<div>Bảo hành (<?php echo $opened_time; ?> hằng ngày)</div>
					<div><?php echo $contacted_phone; ?></div>
				</div>
				<div class="clr"></div>
			</div>	
			<div class="margin-top-15">
				<div class="col-lg-6 no-padding">
					<h3 class="we-are-here">Liên kết</h3>
					<div class="icon-social">
						<a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="<?php echo $google_plus; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="<?php echo $youtube_url; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						<a href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-6 no-padding-right">
					<h3 class="we-are-here">Thanh toán</h3>
					<div class="margin-top-5"><img src="<?php echo site_url( '/wp-content/uploads/payment.png', null ); ?>" /></div>
				</div>
				<div class="clr"></div>
			</div>		
		</div>
		<div class="col-lg-6 no-padding-right">
			<div class="col-lg-4">
				<h3 class="we-are-here">Về S.A.M shop</h3>			
				<?php     
				$args = array( 
					'menu'              => '', 
					'container'         => '', 
					'container_class'   => '', 
					'container_id'      => '', 
					'menu_class'        => 'footermenu', 
					'menu_id'           => 'support-menu', 
					'echo'              => true, 
					'fallback_cb'       => 'wp_page_menu', 
					'before'            => '', 
					'link_before'       => '', 
					'after'             => '', 
					'link_after'        => '', 
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
					'depth'             => 3, 
					'walker'            => '', 
					'theme_location'    => 'support-menu' 
				);
				wp_nav_menu($args);
				?>            	
			</div>
			<div class="col-lg-4">
				<h3 class="we-are-here">Chính sách</h3>
				<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footermenu', 
						'menu_id'           => 'policy-menu', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'link_before'       => '', 
						'after'             => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'policy-menu' 
					);
					wp_nav_menu($args);
					?>             	
			</div>
			<div class="col-lg-4">
				<h3 class="we-are-here">Hỗ trợ</h3>
				<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footermenu', 
						'menu_id'           => 'direction-menu', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'link_before'       => '', 
						'after'             => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'direction-menu' 
					);
					wp_nav_menu($args);
					?>          
			</div>
			<div class="clr"></div>
		<div class="margin-top-15 box-subscribe">
			<h3 class="we-are-here">Hãy để lại mail để nhận ưu đãi nhiều hơn</h3>
			<div class="box-register-email margin-top-15">
				<form action="#" method="post"  name="mc-embedded-subscribe-form" target="_blank">
                            <input type="email" value="" placeholder="Email của bạn" name="EMAIL" id="mail" aria-label="general.newsletter_form.newsletter_email">
                            <button name="subscribe" id="subscribe">Gửi ngay</button>
                        </form>
			</div>		
		</div>
		</div>		
	</div>	
</footer>
<div class="modal fade" id="modal-alert-add-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
			</div>
			<div class="modal-body">

			</div>      
		</div>
	</div>
</div>