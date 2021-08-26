<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Advertisement extends Widget_Base{

  public function get_name(){
    return 'advertisement';
  }

  public function get_title(){
    return 'Advertisement';
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
      'content_heading',
      [
        'label' => 'Content Heading',
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 'My Other Example Heading'
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
    <div class="advertisement">
      <div class="row">
        <div class="col-12 offset-0 col-md-3 offset-md-2" <?php echo $this->get_render_attribute_string('label_heading'); ?>>
       
            <h2 class="title"><?php echo $settings['label_heading']?></h2>

        </div>
        <div class="col-12 offset-0 col-md-4 offset-md-2">
          <div class="advertisement__content">
              <h3 class="h3"><?php echo $settings['content_heading'] ?></h3>
              <p><?php echo $settings['content'] ?></p>
              
                <a class="btn" href="<?php echo $settings['link']['url'] ?>">
                  <?php echo $settings['text'] ?>
                </a>
              
            </div>
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
        <div class="advertisement">
          <div class="row" >
            <div class="col-3 offset-2" {{{ view.getRenderAttributeString( 'label_heading' ) }}}>
       
               <h2 class="title">{{{ settings.label_heading }}}</h2>

           </div>
          <div class="col-4 offset-2">
          <div class="advertisement__content">
              <h3 class="h3">{{{ settings.content_heading }}}</h3>
              <p> {{{ settings.content }}}</p>
              <a href="{{{ settings.link.url }}}">
                 {{{ settings.text }}}
              </a>
            </div>
          </div>
      </div>
      <?php
  }
}