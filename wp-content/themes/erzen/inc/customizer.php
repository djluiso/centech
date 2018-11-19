<?php
/**
 * Erzen Theme Customizer
 *
 */

function erzen_customize_register( $wp_customize ) {
	
	 /*default variable used in setting*/
        //$default = erzen_get_default_theme_options();
	
	/*** Slider Setting ***/
	require get_template_directory() . '/inc/erzen-theme-options.php';
    require get_template_directory() . '/inc/erzen-sanitize.php';
	/**
     * Important Link Information
    */
    class erzen_theme_info_text extends WP_Customize_Control{
        public function render_content(){  ?>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <?php if($this->description){ ?>
                <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
                </span>
            <?php }
        }
    }

	
/** Front Page Section Settings starts **/	

$wp_customize->add_panel('frontpage', 
             array('title' => esc_html__('Erzen Options', 'erzen'),        
			 'description' => '',                                        
			 'priority' => 3,));
	
    require get_template_directory() . '/inc/customizer-header-sectioninfo.php';	
    require get_template_directory() . '/inc/customizer-slider.php';	
    require get_template_directory() . '/inc/customizer-header-callout.php';	
	require get_template_directory() . '/inc/customizer-aboutus.php';
	require get_template_directory() . '/inc/customizer-services.php';
	require get_template_directory() . '/inc/customizer-blogpost.php';
    require get_template_directory() . '/inc/customizer-footer-callout.php';	
    require get_template_directory() . '/inc/customizer-footer.php';	
	
	
	/**
	 * Important Link
	*/
	$wp_customize->add_section( 'erzen_implink_section', array(
	  'title'       => esc_html__( 'Important Links', 'erzen' ),
	  'priority'      => 1
	) );

	    $wp_customize->add_setting( 'erzen_imp_links', array(
	      'sanitize_callback' => 'erzen_text_sanitize'
	    ));

	    $wp_customize->add_control( new erzen_theme_info_text( $wp_customize,'erzen_imp_links', array(
	        'settings'    => 'erzen_imp_links',
	        'section'   => 'erzen_implink_section',
	        'description' => '<a class="implink" href="https://wpshopmart.com/docs/themes/erzen/index.html" target="_blank">'.esc_html__('Documentation', 'erzen').'</a><a class="implink" href="http://demo.wpshopmart.com/erzen-lite/" target="_blank">'.esc_html__('Live Demo', 'erzen').'</a><a class="implink" href="https://wordpress.org/support/theme/erzen" target="_blank">'.esc_html__('Support Forum', 'erzen').'</a>',
	      )
	    ));

	    $wp_customize->add_setting( 'erzen_rate_us', array(
	      'sanitize_callback' => 'erzen_text_sanitize'
	    ));

	    $wp_customize->add_control( new erzen_theme_info_text( $wp_customize, 'erzen_rate_us', array(
	          'settings'    => 'erzen_rate_us',
	          'section'   => 'erzen_implink_section',
	          'description' => sprintf(__( 'Please do rate our theme if you liked it %1$s', 'erzen'), '<a class="implink" href="https://wordpress.org/support/theme/erzen/reviews/?filter=5" target="_blank">'.esc_html__('Rate/Review','erzen').'</a>' ),
	        )
	    ));

	    $wp_customize->add_setting( 'erzen_setup_instruction', array(
	      'sanitize_callback' => 'erzen_text_sanitize'
	    ));

	    $wp_customize->add_control( new erzen_theme_info_text( $wp_customize, 'erzen_setup_instruction', array(
	        'settings'    => 'erzen_setup_instruction',
	        'section'   => 'erzen_implink_section',
	        'description' => __( '<span class="customize-text_editor_desc">
	        		<h2 class="customize-title">'.esc_html__('Erzen Pro Features','erzen').'</h2>                
                    <ul class="admin-pro-feature-list">   
                        <li><span>'.esc_html__('2 Home Pages','erzen').'</span></li>
                        <li><span>'.esc_html__('25+ Page Layout','erzen').'</span></li>
                        <li><span>'.esc_html__('One Click Demo Import','erzen').'</span></li>
                        <li><span>'.esc_html__('Unlimited theme colors ( Primary Colors)','erzen').'</span></li>
                        <li><span>'.esc_html__('Unlimited sliders Inbuilt sliders','erzen').'</span></li>
                        <li><span>'.esc_html__('Contact Form 7','erzen').'</span></li>
                        <li><span>'.esc_html__('Advanced Typography','erzen').'</span></li>
                        <li><span>'.esc_html__('500+ google fonts','erzen').'</span></li>
                        <li><span>'.esc_html__('Background configuration','erzen').'</span></li>
                        <li><span>'.esc_html__('Pricing Table','erzen').'</span></li>
                        <li><span>'.esc_html__('Highly configurable home page','erzen').'</span></li>
                        <li><span>'.esc_html__('over 2500 icons','erzen').'</span></li>
                        <li><span>'.esc_html__('Unlimited Teams with tema detail','erzen').'</span></li>
                        <li><span>'.esc_html__('Unlimited Services','erzen').'</span></li>
                        <li><span>'.esc_html__('unlimited projects','erzen').'</span></li>
                        <li><span>'.esc_html__('masonry projects layout','erzen').'</span></li>
                        <li><span>'.esc_html__('Breadcrumbs Settings','erzen').'</span></li>
                        <li><span>'.esc_html__('15+ Shortcodes','erzen').'</span></li>
                        <li><span>'.esc_html__('Four different blog layouts','erzen').'</span></li>
                        <li><span>'.esc_html__('Boxed Layout','erzen').'</span></li>                        
                        <li><span>'.esc_html__('Contact Form 7 Integrated','erzen').'</span></li>
                        <li><span>'.esc_html__('Responsive retina ready theme','erzen').'</span></li>
                        <li><span>'.esc_html__('3 Page layouts (right sidebar, left sidebar, full width)','erzen').'</span></li>
                        <li><span>'.esc_html__('Fully SEO optimized (schema)','erzen').'</span></li>
                        <li><span>'.esc_html__('Fast loading','erzen').'</span></li>
                        <li><span>'.esc_html__('Premium Priority Support','erzen').'</span></li>
                        <li><span>'.esc_html__('A perfect theme to start your Business website of any kind !!!','erzen').'</span></li>
                    </ul>                    
                    <a href="'.esc_url('http://demo.wpshopmart.com/erzen-pro').'" class="implink" target="_blank">'.esc_html__('Pro Demo','erzen').'</a>
                    <a href="'.esc_url('https://wpshopmart.com/wordpress-themes/erzen-pro/').'" class="implink" target="_blank">'.esc_html__('Buy Now','erzen').'</a>
                </span>', 'erzen'),
	      )
	    ));
	


/** Front Page Section Settings end **/	


}
add_action( 'customize_register', 'erzen_customize_register' );

