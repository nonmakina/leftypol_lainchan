<?php

/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
 */


/*
 * ====================
 *  Database and site wide configurations
 * ====================
 */

$config['db']['server'] = 'localhost';
$config['db']['database'] = 'lainchan';
$config['db']['prefix'] = '';
$config['db']['user'] = 'lainchan';
$config['db']['password'] = '';


$config['cookies']['mod'] = 'mod';
$config['cookies']['salt'] = 'MGYwNjhlNjU5Y2QxNWU3YjQ3MzQ1Yj';

$config['referer_match'] = false;

$config['root'] = '/';
$config['secure_trip_salt'] = 'ODQ2NDM0ODlmMmRhNzk2M2EyNjJlOW';

/*
 * ====================
 *  Media related configurations
 * ====================
 */

$config['spoiler_images'] = true;

$config['thumb_width'] = 255;
$config['thumb_height'] = 255;
$config['max_width'] = 10000;
$config['max_height'] = 10000;
$config['max_filesize'] = 52428800; // 50 * 1024 * 1024 = 50MB

// Max attachments per post
$config['max_images'] = 5;

$config['thumb_method'] = 'gm+gifsicle';
$config['gnu_md5'] = '1';


$config['webm']['use_ffmpeg'] = true;
$config['webm']['allow_audio'] = true;
$config['webm']['max_length'] = 1000;

// Allowed image file extensions.
$config['allowed_ext'][] = 'jpg';
$config['allowed_ext'][] = 'jpeg';
$config['allowed_ext'][] = 'bmp';
$config['allowed_ext'][] = 'gif';
$config['allowed_ext'][] = 'png';
$config['allowed_ext'][] = 'webm';
$config['allowed_ext'][] = 'mp4';

$config['allowed_ext_files'][] = 'mp4';
$config['allowed_ext_files'][] = 'pdf';
$config['allowed_ext_files'][] = 'txt';
$config['allowed_ext_files'][] = 'zip';
$config['allowed_ext_files'][] = 'epub';
$config['allowed_ext_files'][] = 'webm';


/*
 * ====================
 *  General posting config
 * ====================
 */
$config['robot_mute'] = false;
$config['max_links'] = 100;
$config['reply_limit'] = 750;
$config['min_body'] = 0;
$config['anti_bump_flood'] = true;
$config['delete_time'] = 5;
$config['reply_hard_limit'] = 1000;
$config['always_noko'] = true;
$config['flood_time'] = 0;
$config['flood_time_ip'] = 0;
$config['flood_time_same'] = 0;
$config['max_body'] = 100000;
$config['reply_limit'] = 250;

/*
 * ====================
 *  General board config
 * ====================
 */
$config['threads_preview'] = 5;
$config['max_links'] = 40;
$config['threads_per_page'] = 10;
$config['max_pages'] = 36;
/*
 * ====================
 *  Themes
 * ====================
 */
$config['stylesheets']['Dark'] = 'dark.css';
$config['stylesheets']['Dark Red'] = 'dark_red.css';
$config['stylesheets']['Burichan'] = 'burichan.css';
$config['stylesheets']['Futaba'] = 'futaba.css';
$config['stylesheets']['Gentoochan'] = 'gentoochan.css';
$config['stylesheets']['Gurochan'] = 'gurochan.css';
$config['stylesheets']['Jungle'] = 'jungle.css';
$config['stylesheets']['LainchanJP'] = 'lainchanjp.css';
$config['stylesheets']['Miku'] = 'miku.css';
$config['stylesheets']['Notsuba'] = 'notsuba.css';
$config['stylesheets']['Photon'] = 'photon.css';
$config['stylesheets']['Szalet'] = 'szalet.css';
$config['stylesheets']['Tsuki'] = 'tsuki.css';

/*
 * ====================
 *  Javascript
 * ====================
 */

$config['additional_javascript'][] = 'js/local-time.js';
$config['additional_javascript'][] = 'js/auto-reload.js';
$config['additional_javascript'][] = 'js/post-hover.js';
$config['additional_javascript'][] = 'js/style-select.js';

$config['additional_javascript'][] = 'js/hide-threads.js';
$config['additional_javascript'][] = 'js/hide-images.js';
$config['additional_javascript'][] = 'js/show-backlinks.js';
$config['additional_javascript'][] = 'js/show-op.js';

$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';
$config['additional_javascript'][] = 'js/quick-reply.js';

$config['additional_javascript'][] = 'js/options.js';
$config['additional_javascript'][] = 'js/webm-settings.js';
$config['additional_javascript'][] = 'js/expand-video.js';
$config['enable_embedding'] = true;

$config['youtube_js_html'] = '<div class="video-container" data-video="$2">'.
'<a href="https://youtu.be/$2" target="_blank" class="file">'.
'<img style="width:255px;height:190px;" src="//img.youtube.com/vi/$2/0.jpg" class="post-image"/>'.
'</a></div>';

$config['embedding'] = array();
$config['embedding'][0] = array(
'/^https?:\/\/(\w+\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9\-_]{10,11})(&.+)?$/i',
$config['youtube_js_html']);
$config['additional_javascript'][] = 'js/youtube.js';

/*
 * ====================
 *  Mark up
 * ====================
 */

/*
 * ====================
 *  Front page configurations.
 * ====================
 */

$config['boards'] = array(
   array('leftypol',
         'b',
         'hobby',
         'tech',
         'edu',
         'games',
         'anime'
   ) ,
  array('meta')
);
// Board categories. Only used in the "Categories" theme.
$config['categories'] = array(
  'Leftypol' => array('leftypol',
         'b',
         'hobby',
         'tech',
         'edu',
         'games',
         'anime'
   ),
  'Meta' => array('meta')
);
// Optional for the Categories theme. This is an array of name => (title, url) groups for categories
// with non-board links.
$config['custom_categories'] = array(
  'Links' => array(
      'New Multitude' => 'https://newmultitude.org/',
      'Booru image repository' => 'https://lefty.booru.org/',
      'Leftypedia' => 'https://leftypedia.org/',
      'Official chat room' => 'https://app.element.io/#/room/!RQxdjfGouwsFHwUzwL:matrix.org',
      'Rules' => 'rules.html'
  ),
  'Learning resources and blogs' => array(
      'Michael Roberts\' blog' => 'https://thenextrecession.wordpress.com/',
      'A Critique Of Crisis Theory blog' => 'https://critiqueofcrisistheory.wordpress.com/',
      'Leftypedia' => 'https://leftypedia.org/',
      'Marxis Internet Archive' => 'https://www.marxists.org/'
  ),
);