<?php

/*
  Plugin Name: Native Lazy oembed
  Plugin URI: http://marc.tv/
  Description: Adds loading=lazy attribute to all oembed iframnes.
  Version: 1.0
  Author: MarcDK
  Author URI: https://marc.tv
  GitHub Plugin URI: mtoensing/native-lazy-oembed
  License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  your option) any later version.

  This software uses the galleria http://galleria.io framework which uses the MIT License.
  The license is also GPL-compatible, meaning that the GPL permits combination
  and redistribution with software that uses the MIT License.

 */

 function lazy_embed_oembed_html($html, $url, $attr){
    $html = str_replace('<iframe ','<iframe loading="lazy" ',$html);
    return $html;
 }

 add_filter('embed_oembed_html', 'lazy_embed_oembed_html',10, 3);
