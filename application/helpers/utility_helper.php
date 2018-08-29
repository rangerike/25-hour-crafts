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

function asset_url(){
   return absolute_url().'assets/';
}

function absolute_url(){
  if (ENVIRONMENT === "production") {
    return 'https://25thhourcrafts.com/';
  } elseif (ENVIRONMENT === "devPC") {
    return 'http://localhost/25-hour-crafts/public_html/';
  } elseif (ENVIRONMENT === "devMAC") {

  }
}


/* End of file utility_helper.php */
/* Location: ./application/helpers/utility_helper.php */
