<?php

namespace BrightWheel;

defined('ABSPATH') || die();

class BrightWheel
{
    /**
     * Checks if shortcode is in use
     *
     * @var boolean
     */
    public $isShortcodeBeignUsed = false;

    /**
     * Adds short code to be used anywhere
     */
    public function __construct()
    {
        add_shortcode('brightwheelform', [$this, 'formLayout']);

        add_action('template_redirect', [$this, 'shortcodeVerifier']);

        add_action( 'wp_enqueue_scripts', [$this, 'enqueueScripts']);
        
    }

    /**
     * In order to add a short code we must return
     * markup as string
     *
     * @return string
     */
    public function formLayout()
    {
        $markup = file_get_contents(plugin_dir_path(__FILE__) . '/view/form-layout.php');
        return $markup;
    }

    /**
     * Checks if the shortcode is in use
     *
     * @return void
     */
    public function shortcodeVerifier()
    {
        global $posts;
        $pattern = get_shortcode_regex(); 
        preg_match('/'.$pattern.'/s', $posts[0]->post_content, $matches); 
        if (is_array($matches) && $matches[2] == 'brightwheelform') { 
            $this->isShortcodeBeignUsed = true;
        }
    }

    /**
     * Enqueue/load Assets only if
     * shortcode is inserted
     *
     * @return void
     */
    public function enqueueScripts()
    {
        if(!$this->isShortcodeBeignUsed){
            return;
        }

        wp_enqueue_style('brightwheel-css', plugin_dir_url(__FILE__) . 'assets/styles.css');
        wp_enqueue_script('brightwheel-js', plugin_dir_url(__FILE__) . 'assets/main.js', array('jquery'), '1.0.1', true );
        wp_enqueue_script('bootstrap', 'https://js.hsforms.net/forms/v2-legacy.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script('bootstrap', 'https://js.hsforms.net/forms/v2.js', array('jquery'), '3.3.5', true );
    }
}
