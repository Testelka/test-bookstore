<?php
/*
 Plugin Name: Upload Ebooks
 Version: 0.0.0
 Author: D. Moonfire
 Description: Enables uploading ebooks into WordPress and WooCommerce.
*/

// Add in a hook to add the taxonomies and categories.
add_action('init', 'upload_ebook_init', 0);

function upload_ebook_init()
{
  // This allows up to add the MIME types that can be uploaded.
  add_filter('upload_mimes', 'upload_ebook_upload_mimes');

  // These are completely arbitrary and probably too big.
  ini_set('upload_max_size','100M');
  ini_set('post_max_size','99M');

  // Ebooks sometimes take a little longer to upload.
  ini_set('max_execution_time','300');
}

function upload_ebook_upload_mimes($mimes)
{
  $mimes = array_merge($mimes, array(
    'epub' => 'application/epub+zip',
    'mobi' => 'application/x-mobipocket-ebook'
  ));

  return $mimes;
}
?>