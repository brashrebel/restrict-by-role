<?php
function rbr($atts, $content = null) {
$site_url = wp_login_url();
$def_message = '<h3>This content is restricted. Please <a href="'.$site_url.'">login</a>.</h3>';
	extract(shortcode_atts(array(
    'role' => '',
    'message'   => $def_message,
    'privilege' => '',
    ), $atts));
if ('subscriber' == $role OR 'Subscriber' == $role) {
// For subscribers
	if (!current_user_can('read')) {
		return "<div class='rbr'>".$message."</div>";
	} else {
		return $content;
	}
} elseif ('contributor' == $role OR 'Contributor' == $role) {
// For contributor
	if (!current_user_can('edit_posts')) {
		return "<div class='rbr'>".$message."</div>";
	} else {
		return $content;
	}
} elseif ('author' == $role OR 'Author' == $role) {
// For authors
	if (!current_user_can('publish_posts')) {
		return "<div class='rbr'>".$message."</div>";
	} else {
		return $content;
	}
} elseif ('editor' == $role OR 'Editor' == $role) {
// For editors
	if (!current_user_can('publish_pages')) {
		return "<div class='rbr'>".$message."</div>";
	} else {
		return $content;
	}
} elseif ('administrator' == $role OR 'Administrator' == $role OR 'admin' == $role OR 'super admin' == $role  OR 'Super Administrator' == $role) {
// For administrators
	if (!current_user_can('list_users')) {
		return "<div class='rbr'>".$message."</div>";
	} else {
		return $content;
	}
} elseif (!empty($privilege)) {
// Allow privelege parameter for more literal restrictions
	if (current_user_can($privilege)) {
			return $content;
		} else { return "<div class='rbr'>".$message."</div>"; }
} else {
// Just display the content if someone enters an invalid user role.
	return $content;
}
}
add_shortcode( 'rbr', 'rbr' );
?>