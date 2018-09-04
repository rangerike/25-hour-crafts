<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Utility URL
 *
 * Create an asset URL & absolute URL based on your basepath. Segments can be passed via the
 * first parameter either as a string or an array.
 *
 * @access	public
 * @param	string
 * @return	string
 */

function asset_url() {
   return absolute_url().'assets/';
}
function image_url() {
  return asset_url().'images/';
}
function logo_url() {
  return image_url().'logos/';
}
function icon_url() {
  return image_url().'icons/';
}

function absolute_url() {
  if (ENVIRONMENT === "production") {
    return 'https://25thhourcrafts.com/';
  } elseif (ENVIRONMENT === "development") {
    return 'http://localhost/25-hour-crafts/public_html/';
  }
}

function facebook_url() {
    return 'https://www.facebook.com/25hourcrafts';
}
function instagram_url() {
  return 'https://www.instagram.com/25thhourcrafts';
}
function shop_email() {
  return 'mailto:craftyhobbitshop@gmail.com';
}

/* End of file utility_helper.php */
/* Location: ./application/helpers/utility_helper.php */
