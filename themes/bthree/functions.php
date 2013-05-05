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




   add_filter( 'default_content', 'custom_editor_content' );
      function custom_editor_content( $content ) {
         global $current_screen;
         if ( $current_screen->post_type == 'page') {
            $content = '
<div class="col-1 span6">
a
	&nbsp;
</div>
<div class="col-2 span6">
as
	&nbsp;
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

// Get the name of the current template for CSS and other stuff 
function get_page_template_name() {
  if (is_page()) {
    global $post;
    // Grab the template filename from Page metadata, but discard any .php extension.
    return str_replace('.php', '', get_post_meta($post->ID, '_wp_page_template', true));   
  }
  return '';
}

?>