/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.6
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Blog Extend
 */
var cmsmasters_blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = cmsmasters_blog_new_fields;



/**
 * Quotes Extend
 */
var cmsmasters_quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		cmsmasters_quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		cmsmasters_quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	cmsmasters_theme_shortcodes.quotes_field_slider_type_title, 
			descr : 	cmsmasters_theme_shortcodes.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	cmsmasters_theme_shortcodes.quotes_field_type_choice_box, 
						'center' : 	cmsmasters_theme_shortcodes.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		cmsmasters_quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = cmsmasters_quotes_new_fields;



/**
 * Portfolio Extend
 */
var cmsmasters_portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = '3';
		
		
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_grid') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,excerpt,categories,more';
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,categories,comments,likes';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'gap') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['depend'] = 'layout:puzzle';
		
		
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = cmsmasters_portfolio_new_fields;



/**
 * Posts Slider Extend
 */
var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'post_type') {
		if (cmsmasters_theme_shortcodes.cmsmasters_woo_exists === 'true') { 
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
				'post' : 		cmsmasters_shortcodes.posts_slider_field_poststype_choice_post, 
				'project' : 	cmsmasters_shortcodes.posts_slider_field_poststype_choice_project, 
				'product' : 	cmsmasters_theme_shortcodes.posts_slider_field_poststype_choice_product 
			};
		} else {
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
				'post' : 		cmsmasters_shortcodes.posts_slider_field_poststype_choice_post, 
				'project' : 	cmsmasters_shortcodes.posts_slider_field_poststype_choice_project
			};
		}
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_categories' && cmsmasters_theme_shortcodes.cmsmasters_woo_exists === 'true') {
		cmsmasters_posts_slider_new_fields['product_categories'] = {
			type : 		'select_multiple', 
			title : 	cmsmasters_theme_shortcodes.posts_slider_field_prcateg_title, 
			descr : 	cmsmasters_theme_shortcodes.posts_slider_field_prcateg_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.posts_slider_field_prcateg_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsmasters_theme_shortcodes.product_cat, 
			depend : 	'post_type:product' 
		}; 
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		if (cmsmasters_theme_shortcodes.cmsmasters_woo_exists === 'true') {
			
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,categories,more';
			
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
			
			cmsmasters_posts_slider_new_fields['product_metadata'] = {
				type : 		'checkbox', 
				title : 	cmsmasters_theme_shortcodes.posts_slider_field_prmeta_title, 
				descr : 	cmsmasters_theme_shortcodes.posts_slider_field_prmeta_descr, 
				def : 		'rating,title,categories,price', 
				required : 	true, 
				width : 	'half', 
				choises : { 
							'rating' : 		cmsmasters_theme_shortcodes.choice_rating, 
							'title' : 		cmsmasters_shortcodes.choice_title, 
							'categories' : 	cmsmasters_shortcodes.choice_categories, 
							'price' : 		cmsmasters_theme_shortcodes.choice_price 
				}, 
				depend : 	'post_type:product' 
			}; 
		} else {
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,categories,more';
			
			cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		}
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];  
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'blog_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,date,categories,author,comments,likes,more';
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;



/**
 * Featured Block Extend
 */
var cmsmasters_featured_block_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_featured_block.fields) {
	if (id === 'top_padding') {
		cmsmasters_featured_block_new_fields['link'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.featured_block_link, 
			descr : 	cmsmasters_theme_shortcodes.featured_block_link_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'full' 
		};
		
		
		cmsmasters_featured_block_new_fields['target'] = { 
			type : 		'radio', 
			title : 	cmsmasters_theme_shortcodes.featured_block_target, 
			descr : 	cmsmasters_theme_shortcodes.featured_block_target_descr, 
			def : 		'self', 
			required : 	false, 
			width : 	'half',  
			choises : { 
						'self' : 	cmsmasters_shortcodes.link_target_choice_self, 
						'blank' : 	cmsmasters_shortcodes.link_target_choice_blank 
			}, 
			depend : 	'link:!' 
		};

		
		cmsmasters_featured_block_new_fields['hover'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.featured_block_hover, 
			descr : 	cmsmasters_theme_shortcodes.featured_block_hover_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_enable
			} 
		};
		
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	} else {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_featured_block.fields = cmsmasters_featured_block_new_fields;

