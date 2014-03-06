<?php
function rbr($atts, $content = null) {
	extract(shortcode_atts(array(
    'role' => 'subscriber',
    'message'   => 'This content is restricted.'
    ), $atts));
// For subscribers
if ('subscriber' == $role) {
	if (!current_user_can('read')) {
		return "<p class='rbr'>".$message."</p>";
	} else {
		return $content;
	}
} elseif ('contributor' == $role) {
	if (!current_user_can('read')) {
		return "<p class='rbr'>".$message."</p>";
	} else {
		return $content;
	}
} elseif ('author' == $role) {
	if (!current_user_can('read')) {
		return "<p class='rbr'>".$message."</p>";
	} else {
		return $content;
	}
} elseif ('editor' == $role) {
	if (!current_user_can('read')) {
		return "<p class='rbr'>".$message."</p>";
	} else {
		return $content;
	}
} elseif ('administrator' == $role) {
	if (!current_user_can('read')) {
		return "<p class='rbr'>".$message."</p>";
	} else {
		return $content;
	}
} else {
	return $content;
}
}
add_shortcode( 'rbr', 'rbr' );
?>