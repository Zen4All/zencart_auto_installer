This is a quick way to make an admin auto-installer for your module.

Step 1.) Change the name of the YOUR_ADMIN/includes/auto_loaders/config.MODULE_NAME.php and replace with your module's name
Step 2.) Change the name of the init_MODULE_NAME.php in the file from step 1
Step 3.) Change the name of the init_MODULE_NAME.php file to that from step 2
Step 4.) Change the details in the file you renamed in step 3
        a.) $module_constant - This should be a UNIQUE name followed by _VERSION for convention
        b.) $module_installer_directory - This the full directory your installer is in, usually this is lower case
        c.) $module_name - This should be a plain English or Other in a user friendly way
        d.) -OPTIONAL- $zencart_com_plugin_id - Get this from zencart.com plugins or Leave Zero not to check
Step 5.) Change the name of the directory in the installers/ directory to match that from step 4b
Step 6.) Create your installer files, 1_0_0 has some comments to help you out. You can use the $configuration_group_id, to Identify the configuration Group whenever needed.