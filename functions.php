<?php
/* enqueue stylesheets and scripts */
require_once(get_template_directory() . '/inc/enqueue-assets/css.php');
require_once(get_template_directory() . '/inc/enqueue-assets/js.php');
require_once(get_template_directory() . '/inc/enqueue-assets/ajax-script.php');
/* !enqueue stylesheets and scripts */
/* theme supports */
require_once(get_template_directory() . '/inc/theme-supports/theme-supports.php');
/* !theme supports */
/* register posttypes */
require_once(get_template_directory() . '/inc/register-posttype/example-posttype.php');
/* !register posttypes */
/* register taxonomy */
require_once(get_template_directory() . '/inc/register-taxonomy/example-taxonomy.php');
/* !register taxonomy */
/* register theme blocks */
require_once(get_template_directory() . '/inc/register-blocks/example-block.php');
/* !register theme blocks */
/* acf functions */
require_once(get_template_directory() . '/inc/acf-functions/acf-functions.php');
/* !acf-functions */
?>