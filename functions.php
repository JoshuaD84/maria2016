<?php

add_theme_support ( 'post-thumbnails' );

/**
 * Improves the caption shortcode with HTML5 figure & figcaption; microdata & wai-aria attributes
 *
 * @param  string $val     Empty
 * @param  array  $attr    Shortcode attributes
 * @param  string $content Shortcode content
 * @return string          Shortcode output
 */
function dhamma_img_caption_shortcode_filter($val, $attr, $content = null) {
   extract(shortcode_atts(array(
      'id'      => '',
      'align'   => 'aligncenter',
      'width'   => '',
      'caption' => ''
   ), $attr));

   // No caption, no dice... But why width?
   if ( 1 > (int) $width || empty($caption) )
      return $val;

   if ( $id )
      $id = esc_attr( $id );

   // Add itemprop="contentURL" to image - Ugly hack
   $content = str_replace('<img', '<img itemprop="contentURL"', $content);

   $retMe = "";

   if ( $align == "aligncenter" ) $retMe .= "<div class='image-caption-center'>";

   $retMe .= '<figure id="' . $id . '" aria-describedby="figcaption_' . $id . '" class="wp-caption ' . esc_attr($align) . '" itemscope itemtype="http://schema.org/ImageObject" style="width: ' . (0 + (int) $width) . 'px">' . do_shortcode( $content ) . '<figcaption id="figcaption_'. $id . '" class="wp-caption-text" itemprop="description">' . $caption . '</figcaption></figure>';

   if ( $align == "aligncenter" ) $retMe .= "</div>";

   return $retMe;
}

add_filter( 'img_caption_shortcode', 'dhamma_img_caption_shortcode_filter', 10, 3 );
