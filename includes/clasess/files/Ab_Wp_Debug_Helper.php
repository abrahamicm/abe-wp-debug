<?php
class Ab_Wp_Debug_Helper {
    public static function create_classes($classes) {
        foreach ($classes as $class_name) {
            $file_name = $class_name . '.php';
            $class_code = <<<EOL
<?php
class $class_name {

}
EOL;
            file_put_contents($file_name, $class_code);
        }
    }
}
Ab_Wp_Debug_Activation.php
Ab_Wp_Debug_Updates.php
Ab_Wp_Debug_Blocks.php
Ab_Wp_Debug_CustomFields.php
Ab_Wp_Debug_Configuration.php
Ab_Wp_Debug_CronJobs.php
Ab_Wp_Debug_CustomPostType.php
Ab_Wp_Debug_CustomTaxonomies.php
Ab_Wp_Debug_Dependencies.php
Ab_Wp_Debug_URLRouting.php
Ab_Wp_Debug_Routing.php
Ab_Wp_Debug_Errors.php
Ab_Wp_Debug_Forms.php
Ab_Wp_Debug_ImportExport.php
Ab_Wp_Debug_Integrations.php
Ab_Wp_Debug_OtherServicesIntegration.php
Ab_Wp_Debug_AdminMenusPages.php
Ab_Wp_Debug_Metaboxes.php
Ab_Wp_Debug_Metadata.php
Ab_Wp_Debug_EmailNotifications.php
Ab_Wp_Debug_Options.php
Ab_Wp_Debug_Performance.php
Ab_Wp_Debug_Reports.php
Ab_Wp_Debug_RestAPI.php
Ab_Wp_Debug_ScriptsStyles.php
Ab_Wp_Debug_Security.php
Ab_Wp_Debug_Shortcodes.php
Ab_Wp_Debug_Support.php
Ab_Wp_Debug_CustomTaxonomies.php
Ab_Wp_Debug_Text.php
Ab_Wp_Debug_CustomPostTypes.php
Ab_Wp_Debug_Widgets.php
Ab_Wp_Debug_Plugin.php