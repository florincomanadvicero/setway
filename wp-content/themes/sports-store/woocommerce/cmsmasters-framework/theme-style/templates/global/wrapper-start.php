<?php
/**
 * @cmsmasters_package 	Sports Store
 * @cmsmasters_version 	1.0.3
 */


list($cmsmasters_layout) = sports_store_theme_page_layout_scheme();


echo '<!--  Start Content  -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}
