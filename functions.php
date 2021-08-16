<?php
/**
 * Vassar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vassar
 */

/**
 * Enqueue scripts and styles.
 */
function local_scripts() {
	wp_enqueue_style( 'vassar-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vassar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'local_scripts' );


//  Add breadcrumb trail

add_action( 'vassarparent__before_header', 'vassarparent__make_breadcrumb_trail', 10, 3 );

function vassarparent__make_breadcrumb_trail() {
    /*  NOTE! If the breadcrumbs aren't appearing on an archive page, make sure the permalink settings of that site have "news" in the permalink pattern. This has to be set on a site-by-site basis; archive pages without /news in their URLs won't display the breadcrumb trail.
    */
    if(is_single() || is_archive()) {
        //  Get the subdirectory of this office
        $the_subdirectory = $_SERVER['REQUEST_URI'];
        $the_subdirectory = explode('/', $the_subdirectory);
        $the_subdirectory = '/'.$the_subdirectory[1].'/';

        //  Grab the year and month
        $the_date_path = get_the_date('Y F');
        $the_month_directory = get_the_date('m');
        $the_date_path = explode(' ', $the_date_path);
        
        //  Set up the paths
        $the_base_url = $the_subdirectory; //.'news/';
        $the_year_url = $the_base_url.$the_date_path[0];
        $the_month_url = $the_base_url.$the_date_path[0].'/'.$the_month_directory;
        
        //  And here's our markup
        $the_final_path = '<ul class="news-breadcrumb"><li><a href="'.$the_base_url.'news/">News</a></li><li><a href="'.$the_year_url.'">'.$the_date_path[0].'</a></li><li><a href="'.$the_month_url.'">'.$the_date_path[1].'</a></li></ul>';
        echo $the_final_path;
    }
}



function custom_image_size() {
    // Set default values for the upload media box
    update_option('image_default_align', 'left' );
    update_option('image_default_size', 'thumbnail' );

}
add_action('after_setup_theme', 'custom_image_size');


add_image_size( 'small', 220, 150 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'small' => __( 'Small' ),
    ) );
}


/*	ADDITIONAL FILE TYPES
	===================== */

function additional_file_types($mime_types){
    $mime_types['keynote'] = 'application/x-iwork-keynote-sffkey';
    $mime_types['pages'] = 'application/x-iwork-pages-sffpages';
    $mime_types['numbers'] = 'application/x-iwork-numbers-sffnumbers';
    
    return $mime_types;
}
add_filter('upload_mimes', 'additional_file_types', 1, 1);



/*	LAZYBLOCKS 
	==========
	
	LazyBlocks exports PHP to define blocks created via the plugin - all you need is the plugin to be active.
*/


if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 24,
        'title' => 'Linked List',
        'icon' => 'dashicons dashicons-format-aside',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/linked-list',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'Special Modules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'controls' => array(
            'control_0edb1a4ec6' => array(
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_334af44e1f' => array(
                'label' => 'Content',
                'name' => 'content',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_29c87c4442' => array(
                'label' => 'List item',
                'name' => 'item_text',
                'type' => 'text',
                'child_of' => 'control_334af44e1f',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_ab5b804026' => array(
                'label' => 'item_link',
                'name' => 'item_link',
                'type' => 'text',
                'child_of' => 'control_334af44e1f',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_8f7b6f46d9' => array(
                'label' => 'Description',
                'name' => 'item_description',
                'type' => 'textarea',
                'child_of' => 'control_334af44e1f',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'true',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '<div class="module">
        <div class="content">
            <ol>
    {{#each content}}
        <li>{{item_text}}</li>
    {{/each}}
    </ol>
        </div>
    </div>',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="module">
        <h2 class="module__title">{{title}}</h2>
        <div class="content">
            <ul>
    {{#each content}}
        <li><a href="{{item_link}}">{{item_text}}</a>
            {{#if item_description}}<div class="item__desc">{{item_description}}</div>{{/if}}
    </li>
    {{/each}}
    </ul>
        </div>
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
        ),
        'condition' => array(
        ),
    ) );
    
endif;

if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_template( array(
        'id' => 22,
        'title' => 'Pages',
        'data' => array(
            'post_type' => 'page',
            'post_label' => 'Pages',
            'template_lock' => '',
            'blocks' => array(
                array(
                    'name' => 'core/paragraph',
                ),
                array(
                    'name' => 'core/heading',
                ),
            ),
        ),
    ) );
    
endif;




if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 59,
        'title' => 'Contact block',
        'icon' => 'dashicons dashicons-id',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/contact-block',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'specialmodules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_07b86643d4' => array(
                'label' => 'Title',
                'name' => 'cblock_title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_5c2a354dea' => array(
                'label' => 'Contact item',
                'name' => 'cblock_contact_item',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_7e4b104f2e' => array(
                'label' => 'Name',
                'name' => 'cblock_name',
                'type' => 'text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_3ae87f4eb3' => array(
                'label' => 'Address',
                'name' => 'cblock_address',
                'type' => 'rich_text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'true',
            ),
            'control_8868f54dcc' => array(
                'label' => 'Phone',
                'name' => 'cblock_phone',
                'type' => 'text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_f7bb9f4f78' => array(
                'label' => 'Link text',
                'name' => 'cblock_link_text',
                'type' => 'text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_e82b0e480e' => array(
                'label' => 'Link',
                'name' => 'cblock_link',
                'type' => 'text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_36784248e1' => array(
                'label' => 'Email',
                'name' => 'cblock_email',
                'type' => 'text',
                'child_of' => 'control_5c2a354dea',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="module module--contact-block">
        <h2 class="module__title">{{cblock_title}}</h2>
        <div class="item-grid">
        {{#each cblock_contact_item}}
        <div class="item">
        <h3 class="module__sub-title">{{cblock_name}}</h3>
        
        <div class="contact__item item--address">{{{cblock_address}}}</div>
        <p class="contact__item item--phone">{{cblock_phone}}</p>
        {{#if cblock_link}}
            <p class="contact__item contact__link-container"><a class="contact__link" href="{{cblock_link}}">{{cblock_link_text}}</a></p>
        {{/if}}
        {{#if cblock_email}}
            <p class="contact__item contact__link-container"><a class="contact__link" href="mailto:{{cblock_email}}">{{cblock_email}}</a></p>
        {{/if}}
        </div>
        {{/each}}
        </div>
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 42,
        'title' => 'Directory',
        'icon' => 'dashicons dashicons-admin-users',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/directory',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'specialmodules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_58aa4146f5' => array(
                'label' => 'Directory title',
                'name' => 'directory_title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => 'The title describing this particular listing: Advisors, Assistants, etc (the Contact or Staff pages on some sites have multiple directory listings).',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_0a7afa451c' => array(
                'label' => 'Directory item',
                'name' => 'directory_item',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_fa5ad544bc' => array(
                'label' => 'Name',
                'name' => 'person_name',
                'type' => 'text',
                'child_of' => 'control_0a7afa451c',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_0bd9b74e01' => array(
                'label' => 'Email',
                'name' => 'person_email',
                'type' => 'text',
                'child_of' => 'control_0a7afa451c',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_efdbc34a50' => array(
                'label' => 'Title',
                'name' => 'person_title',
                'type' => 'text',
                'child_of' => 'control_0a7afa451c',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_33ab554b0b' => array(
                'label' => 'Extension',
                'name' => 'person_extension',
                'type' => 'text',
                'child_of' => 'control_0a7afa451c',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_f9e805457a' => array(
                'label' => 'Office',
                'name' => 'person_office',
                'type' => 'text',
                'child_of' => 'control_0a7afa451c',
                'default' => '',
                'placeholder' => 'Main Building',
                'help' => 'This is the building the person works in. This field may not be needed if everyone works in the same place.',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<h2 class="module__title">{{directory_title}}</h2>
    <table class="responsive directory">
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Contact</th>
        </tr>
        {{#each directory_item}}
            <tr>
                <td>
                    {{#if person_email}}<a href="mailto:{{person_email}}@vassar.edu">{{/if}}
                        {{person_name}}
                    {{#if person_email}}</a>{{/if}}
                </td>
                <td>{{person_title}}</td>
                <td>
                    {{#if person_extension}}
                        <a href="tel:+1845437{{person_extension}}">845-437-{{person_extension}}</a>
                    {{/if}}
                    {{#if person_office}}
                <p class="person__office">{{person_office}}</p>
                    {{/if}}
                </td>
            </tr>
            {{/each}}
    </table>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 26,
        'title' => 'Note',
        'icon' => 'dashicons dashicons-format-aside',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/note',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'specialmodules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_0289744549' => array(
                'label' => 'Title',
                'name' => 'note_title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_6e48f1481f' => array(
                'label' => 'Content',
                'name' => 'note_content',
                'type' => 'rich_text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'true',
            ),
            'control_3a8abc46b6' => array(
                'label' => 'Type',
                'name' => 'note_type',
                'type' => 'select',
                'child_of' => '',
                'default' => 'info',
                'placeholder' => '',
                'help' => 'Save "Important" for information that is particularly urgent.',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                    array(
                        'label' => 'Info',
                        'value' => 'info',
                    ),
                    array(
                        'label' => 'Important',
                        'value' => 'important',
                    ),
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_e8ab1144a0' => array(
                'label' => 'Read more',
                'name' => 'note_readmore',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => 'If the note should link to a particular page, put that page link here.',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="module module--box module--note note--{{note_type}}">
        <h2 class="module__title">{{note_title}}</h2>
        <div class="module__content">
    
        <div class="module__text deadlines__date">{{{note_content}}}</div>
            {{#if note_readmore}}
            <a class="module__readmore" href="{{note_readmore}}">Read more</a>
            {{/if}}
        </div>
    
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 21,
        'title' => 'Deadlines',
        'icon' => 'dashicons dashicons-excerpt-view',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/deadlines',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'specialmodules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_d7dabb449d' => array(
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_d55a4142ab' => array(
                'label' => 'Deadline',
                'name' => 'deadline',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_55680143f7' => array(
                'label' => 'Date',
                'name' => 'deadlines_date',
                'type' => 'text',
                'child_of' => 'control_d55a4142ab',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_864b8f45dc' => array(
                'label' => 'Description',
                'name' => 'deadlines_description',
                'type' => 'rich_text',
                'child_of' => 'control_d55a4142ab',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_c128ef48db' => array(
                'label' => 'More link',
                'name' => 'deadlines_more_link',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => 'If the list of deadlines should have a "read more" link, put the page link here.',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="module module--deadlines">
        <h2 class="module__title">{{title}}</h2>
        <div class="module__content">
    
    <table>
    {{#each deadline}}
    <tr>
        <td class="module__text deadlines__date">{{deadlines_date}}</td>
            {{#if deadlines_description}}
            <td class="module__text">{{{deadlines_description}}}</td>
            {{/if}}
    </tr>    
    {{/each}}
    </table>
    
        </div>
    
        <a class="module__text hours--time" href="{{deadlines_more_link}}">Read more</a>
    
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 10,
        'title' => 'Hours',
        'icon' => 'dashicons dashicons-clock',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/hours',
        'description' => '',
        'category' => 'specialmodules',
        'category_label' => 'specialmodules',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_9c5aff441c' => array(
                'label' => 'Time period',
                'name' => 'time_period',
                'type' => 'text',
                'child_of' => 'control_b308974c74',
                'default' => 'Weekdays',
                'placeholder' => 'Weekdays',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_39481d4773' => array(
                'label' => 'Something',
                'name' => 'something',
                'type' => 'date_time',
                'child_of' => 'control_b308974c74',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'time',
                'multiline' => 'false',
            ),
            'control_82f8dc4cb4' => array(
                'label' => '',
                'name' => 'time_period',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_2919a8482d' => array(
                'label' => 'Time period title',
                'name' => 'time_period_title',
                'type' => 'text',
                'child_of' => 'control_82f8dc4cb4',
                'default' => 'Weekdays',
                'placeholder' => 'Weekdays',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_0a0968468b' => array(
                'label' => 'Hours',
                'name' => 'time_period_hours',
                'type' => 'textarea',
                'child_of' => 'control_82f8dc4cb4',
                'default' => 'Mondays 9–5',
                'placeholder' => 'Mondays 9–5',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_04b97b4b58' => array(
                'label' => 'Description',
                'name' => 'time_period_description',
                'type' => 'textarea',
                'child_of' => 'control_82f8dc4cb4',
                'default' => '',
                'placeholder' => '',
                'help' => 'Put any additional clarification for the time period here.',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="module module--hours">
        <h2 class="module__title">Hours</h2>
        <div class="content">
    
    {{#each time_period}}
    <div class="module__subsection">
        <h3 class="module__sub-title small-caps">{{time_period_title}}</h3>
        
        <div class="module__text hours--time">{{time_period_hours}}</div>
            {{#if time_period_description}}
            <div class="item__text">{{time_period_description}}</div>
            {{/if}}
    </div>    
    
    {{/each}}
    
        </div>
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
endif;