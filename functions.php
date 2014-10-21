<?php
function mySearchFilter($query) {
	$post_type = $_GET['type'];
	if (!$post_type) {
		$post_type = 'any';
	}
    if ($query->is_search) {
        $query->set('post_type', $post_type);
    };
    return $query;
};
?>