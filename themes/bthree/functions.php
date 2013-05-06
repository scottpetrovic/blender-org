<?php

// Registering nav menus
// http://codex.wordpress.org/Function_Reference/wp_nav_menu

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Registering 2 sidebars
// http://codex.wordpress.org/Widgets_API

register_sidebars( 2, array( 'name' => 'Sidebar %d' ) );

function page_ancestry() { 
	//generating an array with page ids 
	//with the top most page in array element $page_tree[0]
	global $post;
	$this_page = $post;
	$test = true;
	$page_lineage = array();
	$page_lineage[] = $this_page->ID; 
	  while( $test ) :
	    if($this_page->post_parent) :
	    $page_lineage[] = $this_page->post_parent;
	    $this_page = get_page($this_page->post_parent);
	    else :
	    $test = false;
	    endif;
	  endwhile;
	$page_tree = array_reverse($page_lineage);
	return $page_tree;
}

	
/*
function top_level_list_pages() {
	?>
	<div class="layer-parent">
		<?php wp_page_menu('depth=1'); ?>
	</div> <!--/ .layer-parent -->
	<?php } 
*/

function second_level_nav() {
	global $post; 
	$pages_tree = page_ancestry(); 
	if($pages_tree[0]) : 
		$this_page = $pages_tree[0]; 
		// find a condition that shows this page and its brothers/sisters in the ancestry of the current page
		$plist = wp_list_pages('title_li=&child_of=' . $this_page .'&depth=1&echo=0'); 
		if(plist) { ?>
			<div class="navbar second-level">
				<ul class="nav">
					<?php echo $plist; ?>
				</ul>
			</div> <!--/ .second-level -->
		<?php }
	endif; //end if($pages_tree[0]) 
}

function third_level_nav() { 
	global $post; 
	$pages_tree = page_ancestry(); 
	if($pages_tree[1]) : 
		$this_page = $pages_tree[1]; 
		// find a condition that shows this page and its brothers/sisters in the ancestry of the current page
		$plist = wp_list_pages('title_li=&child_of=' . $this_page .'&depth=1&echo=0'); 
		if(plist) { ?>
			<div class="navbar third-level">
				<ul class="nav">
					<?php echo $plist; ?>
				</ul>
			</div> <!--/ .third-level -->
		<?php }
	endif; //end if($pages_tree[1]) 
}




add_filter( 'default_content', 'custom_editor_content' );

function custom_editor_content( $content ) {
	global $current_screen;
	if ( $current_screen->post_type == 'page') {
    	$content = '
    	<div class="row">
			<div class="span6">
			a
			&nbsp;
			</div>
			<div class="span6">
			as
			&nbsp;
			</div>
		</div>
			';
 }
 elseif ( $current_screen->post_type == 'POSTTYPE') {
    $content = '

    ';
 }
 else {
    $content = '


    ';
 }
 return $content;
}



function custom_editor_style() {
   global $current_screen;
   add_editor_style(
   array(
      'editor-style.css',
      'editor-style-'.$current_screen->post_type.'.css'
    )
   );
 }

add_action( 'admin_head', 'custom_editor_style' );




/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'foo_widget', // Base ID
			'Foo_Widget', // Name
			array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
		echo __( 'Hello, World!', 'text_domain' );
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}

} // class Foo_Widget

add_action( 'widgets_init', create_function( '', 'register_widget( "foo_widget" );' ) );

?>