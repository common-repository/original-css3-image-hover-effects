<?php

// Register Shortcode
function orginal_css3_effects_shortcode($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',				
		'effects' => '',				
		'circle_animation' => '',				
		'circle_margin_right' => '',				
		'orginal_item_show' => '',				
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'orginal-hover', 'orginal_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		$org_hov_meta = vp_metabox('org_hov_meta.orginal-hover', false);
		
	$i = 0;
	
		$output = '<div id="wrapper" class="orgin-css-hov"><div id="image-effects-section"><div class="org_wrapper"><div class="rd-gird-row">';
		
		foreach ($org_hov_meta as $orginfo) {	

		if ($style=="style1") {
		
		$output .= '
<div class="orgin-css-hov" id="wrapper">
				<div id="image-effects-section">
				<div class="rd-org-img-wrapper '.$orginal_item_show.'">
						<img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper rdorgin-ho-eff-wrapper-slide-up">
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>
                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>

                        </div>
                    </div>
                </div>
</div>
				';
		}
		elseif ($style=="style2") {
		
		$output .= '
<div class="orgin-css-hov" id="wrapper">
				<div id="image-effects-section">
				<div class="rd-org-img-wrapper '.$orginal_item_show.'">
						<img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper rdorgin-ho-eff-wrapper-slide-down">
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>
                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>

                        </div>
                    </div>
                </div>
</div>
				';
		}
		
		
		elseif ($style=="style3") {
		
		$output .= '
				<div class="rd-org-img-wrapper '.$orginal_item_show.'">
						<img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper rdorgin-ho-eff-wrapper-slide-left">
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>
                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>

                        </div>
                    </div>
				';
		}
		
		
		elseif ($style=="style4") {
		
		$output .= '
				<div class="rd-org-img-wrapper '.$orginal_item_show.'">
						<img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper rdorgin-ho-eff-wrapper-slide-right">
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>

                        </div>
                    </div>
				';
		}
		
		elseif ($style=="style5") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-horizontal-top-1"></div>
                            <div class="image-overlay-horizontal-bottom-1"></div>
                        </div>
                    </div>
                </div>
				';
		}
		
		elseif ($style=="style6") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-horizontal-top-2"></div>
                            <div class="image-overlay-horizontal-bottom-2"></div>
                        </div>
                    </div>
                </div>
				';
		}	
		elseif ($style=="style7") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-vertical-left-1"></div>
                            <div class="image-overlay-vertical-right-1"></div>
                        </div>
                    </div>
                </div>
				';
		}		
		elseif ($style=="style8") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-vertical-left-2"></div>
                            <div class="image-overlay-vertical-right-2"></div>
                        </div>
                    </div>
                </div>
				';
		}		
		elseif ($style=="style9") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-horizontal-top-3"></div>
                            <div class="image-overlay-horizontal-bottom-3"></div>
                        </div>
                    </div>
                </div>
				';
		}		
		elseif ($style=="style10") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-horizontal-top-4"></div>
                            <div class="image-overlay-horizontal-bottom-4"></div>
                        </div>
                    </div>
                </div>
				';
		}		
		elseif ($style=="style11") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-vertical-left-3"></div>
                            <div class="image-overlay-vertical-right-3"></div>
                        </div>
                    </div>
                </div>
				';
		}		
		elseif ($style=="style12") {
		
		$output .= '
                <div class="'.$orginal_item_show.'">
                    <div class="rd-org-img-wrapper rd-org-img-wrapper-sweep-1">                        
                       <img src="'.$orginfo['org_img'].'">
                        <div class="rdorgin-ho-eff-wrapper">                            
                            <h5> '.$orginfo['org_title'].' </h5>
                            <p> '.$orginfo['org_desc'].' </p>                            
                            <a class="btn btn-default btn-small l-float-right" href="'.$orginfo['org_button_link'].'">'.$orginfo['org_button_name'].'</a>
                            <div class="image-overlay-vertical-left-4"></div>
                            <div class="image-overlay-vertical-right-4"></div>
                        </div>
                    </div>
                </div>
				';
		}	
		
else {
	
			$output .= '
			<h1 style="color: red; ">SORRY THIS STYLE ONLY FOR PRO VERSION. IF YOU WANT TO BUY ORIGINAL CSS3 IMAGE HOVER EFFECTS PRO VERSION WITH AWESOME FEATURES PLEASE CLICK HERE <a style="color: blue;" target="_blink" href="http://codecans.com/items/original-css3-image-hover-effects-pro/">CLICK HERE</a></h1>';
}		
		
		$i++;
	}
	
	endwhile;
	$output .='</div></div></div></div>';
	wp_reset_query();
	return $output;
}

add_shortcode('org_hover', 'orginal_css3_effects_shortcode');