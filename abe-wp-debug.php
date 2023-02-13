<?php

/**
 * Plugin Name: AB Wp Debug
 */

function my_admin_url_footer()
{
?>
    <script>
        var admin_url = '<?php echo admin_url("admin-ajax.php") ?>'
    </script>;
<?php
}
add_action('wp_footer', 'my_admin_url_footer');
function list_permissions()
{
    $roles = get_editable_roles();
    $permissions = [];
    foreach ($roles as $role_name => $role_info) {
        $role = get_role($role_name);
        $role_permissions = $role->capabilities;

        foreach ($role_permissions as $permission => $value) {
            $permissions[] = $permission;
        }
    }
    echo json_encode($permissions);
    wp_die();
}
add_action('wp_ajax_list_permissions', 'list_permissions');
add_action('wp_ajax_nopriv_list_permissions', 'list_permissions');
