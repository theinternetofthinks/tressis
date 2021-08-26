<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class AdvertisementMedia extends Widget_Base{

  public function get_name(){
    return 'advertisementMedia';
  }

  public function get_title(){
    return 'AdvertisementMedia';
  }

  public function get_icon(){
    return 'fa fa-camera';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){

    $this->start_controls_section(
      'section_content',
      [
        'label' => 'Settings',
      ]
    );
		
    $this->add_control(
      'label_heading',
      [
        'label' => 'Label Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'My Example Heading'
      ]
    );
    $this->add_control(
      'content',
      [
        'label' => 'Content',
        'type' => \Elementor\Controls_Manager::WYSIWYG,
        'default' => 'Some example content. Start Editing Here.'
      ]
    );

		$this->add_control(
			'text',
			[
				'label' => __( 'Text', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __( 'Click here', 'elementor' ),
				'placeholder' => __( 'Click here', 'elementor' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'elementor' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
				'default' => [
					'url' => '#',
				],
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();

    $this->add_inline_editing_attributes('label_heading', 'basic');
    $this->add_render_attribute(
      'label_heading',
      [
        'class' => ['advertisement__label-heading'],
      ]
    );

    ?>
    <div class="advertisement media">
      <div class="row">

        <div class="col-12 col-sm-6">
          <div class="advertisement__content">
              <h2 class="title"><?php echo $settings['label_heading']?></h2>
              <p><?php echo $settings['content'] ?></p>
              
              <a class="btn btn-primary" href="<?php echo $settings['link']['url'] ?>">
                <?php echo $settings['text'] ?>
              </a>
              
          </div>
      </div>
      <div class="col-12 col-sm-6" <?php echo $this->get_render_attribute_string('label_heading'); ?>>
        <div class="img-media">
            <img src="<?php echo $settings['image']['url']?>" />
         </div>

      </div>


    </div>
    <?php
  }

   protected function _content_template(){
    ?>
    <#
        view.addInlineEditingAttributes( 'label_heading', 'basic' );
        view.addRenderAttribute(
        'label_heading',
        {
            'class': [ 'advertisement__label-heading' ],
        }
    );
        #>
        <div class="advertisement media">
          <div class="row" >
            <div class="col-12 col-sm-6" {{{ view.getRenderAttributeString( 'label_heading' ) }}}>
              <div class="advertisement__content">
                <h2 class="title">{{{ settings.label_heading }}}</h2>
                <p> {{{ settings.content }}}</p>
                <a href="{{{ settings.link.url }}}">
                  {{{ settings.text }}}
                </a>
             </div>
           </div>
          <div class="col-12 col-sm-6">
            <img src="{{ settings.image.url }}">

  
          </div>
      </div>
      <?php
  }
}