# Zen Cart Auto Installer

This is a quick way to make an admin auto-installer for your module.

1. Change the name of the YOUR_ADMIN/includes/auto_loaders/config.MODULE_NAME.php and replace with your module's name
2. Change the name of the init_MODULE_NAME.php in the file from step 1
3. Change the name of the init_MODULE_NAME.php file to that from step 2
4. Change the details in the file you renamed in step 3
  1. $module_constant - This should be a UNIQUE name followed by _VERSION for convention
  2. $module_installer_directory - This the full directory your installer is in, usually this is lower case
  3. $module_name - This should be a plain English (or other language) or other in a user friendly way
  4. --OPTIONAL-- $zencart_com_plugin_id - Get this from zencart.com plugins or leave zero not to check
5. Change the name of the directory in the installers/ directory to match that from step 4b
6. Modify the includes/extra_datafiles/ to add the box name for the configuration menu dropdown etc.
7. Create your installer files.  
8. Modify the uninstall.sql, you will need the constant created in 4a and also any admin pages page_key

### OPTIONAL 
Modify all the values in the zencart_plugin.json. 
** This is not yet supported/approved by Zen-Cart.com **
My hopes are this will make it easier for moderation in the future


## Tips for installer files:

* 1_0_0.php has some comments to help you out.
* You can use the $configuration_group_id, to Identify the configuration Group whenever needed.
* Each installer file is what determines the version number, and it will always look for a newer version. So if the current zencart has version 1.2.30 of your module and you add an installer 1_2_29.php it won't install it because it is already at version.
* If you add a file 1_2_31.php it will run it and change the version number to 1.2.31. **No need to do that in the installer**
* Best Practice is to add a short blurb about what changed in the version, so everyone understands why the version changed.

