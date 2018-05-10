# Zen Cart Auto Installer

This is a quick way to make an admin auto-installer for your module.

1. Change the name of the YOUR_ADMIN/includes/auto_loaders/config.MODULE_NAME.php and replace with your module's name
1. Change the name of the init_MODULE_NAME.php in the file from step 1
1. Change the name of the init_MODULE_NAME.php file to that from step 2
1.  Change the details in the file you renamed in step 3
    1. $module_constant - This should be a UNIQUE name followed by _VERSION for convention
    1. $module_installer_directory - This the full directory your installer is in, usually this is lower case
    1. $module_name - This should be a plain English (or other language) or other in a user friendly way
    1. --OPTIONAL--  Version check with Zen-Cart.com in the init_MODULE_NAME.php change these:
        * Change $zencart_com_plugin_id to the zencart.com plugin id.
        * Add the admin page you want the module to check the version on. Leaving This empty will cause this module to check zen-cart.com on every page load in the admin. This puts more stress on both your resources and zen-cart.com. Also if Zen-Cart is down or you are working locally has been know to cause the admin to fail.
1. Change the name of the directory in the installers/ directory to match that from step 4b
1. Modify the includes/extra_datafiles/ to add the box name for the configuration menu dropdown etc.
1. Create your installer files.   
1. Modify the uninstall.sql, you will need the constant created in 4a and also any admin pages page_key

--OPTIONAL--  
Modify all the values in the zencart_plugin.json.  
** This is not yet supported/approved by Zen-Cart.com **  
My hopes are this will make it easier for moderation in the future  

## Tips for installer files:

* 1_0_0.php has some comments to help you out.
* You can use the $configuration_group_id, to Identify the configuration Group whenever needed.
* Each installer file is what determines the version number, and it will always look for a newer version. So if the current zencart has version 1.2.3 of your module and you add an installer 1_2_2.php it won't install it because it is already at version.
* If you add a file 1_2_3.php it will run it and change the version number to 1.2.2. ** No need to do that in the installer **
* Best Practice is to add a short blurb about what changed in the version, so everyone understands why the version changed.
* Use a 3 part version example 1.5.4.

### Module Versions
* 1.0.0
    * Initial Release
* 1.1.0
    * Improved instructions in sample installer file (bislewl)
    * Added ability to only load on some admin pages to prevent it from slowing admin pages (bislewl)
    * Added sort order to MYSQL insert (Jono H.)
    * Converted readme.txt to README.md for easier reading (Jono H.)
    * Moved this text to language folder so it's easy to change for different admin languages (zen4all)
    * Use CURL, with fallback options when seeking plugin update availability (bislewl)
    * Added zencart_plugin.json file (bislewl)