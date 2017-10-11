	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	<div class="responsive-container">
            	
            <div class="site-info">
                <?php do_action( 'alexandria_credits' ); ?>
                <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3>
                <p><?php _e('&copy; All rights reserved.', 'alexandria') ?></p>
                
                <p>Powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'alexandria' ); ?>" rel="generator"><?php printf( __( '%s', 'alexandria' ), 'WordPress. The CMS tool' ); ?></a></p>

                
            </div><!-- .site-info -->
            
            
                 
            
    	</div><!-- #Responsive-Container -->
                    
	</footer><!-- #colophon -->