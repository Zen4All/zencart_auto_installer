<?php
// use $configuration_group_id where needed

// For Admin Pages
/*
$zc150 = (PROJECT_VERSION_MAJOR > 1 || (PROJECT_VERSION_MAJOR == 1 && substr(PROJECT_VERSION_MINOR, 0, 3) >= 5));
if ($zc150) { // continue Zen Cart 1.5.0
  // delete configuration menu
  $db->Execute("DELETE FROM ".TABLE_ADMIN_PAGES." WHERE page_key = 'configMODULE' LIMIT 1;");
  // add configuration menu
  if (!zen_page_key_exists('configMODULE')) {
    if ((int)$configuration_group_id > 0) {
      zen_register_admin_page('configMODULE',
                              'BOX_MODULE', 
                              'FILENAME_CONFIGURATION',
                              'gID=' . $configuration_group_id, 
                              'configuration', 
                              'Y',
                              $configuration_group_id);
        
      $messageStack->add('Enabled MODULE Configuration Menu.', 'success');
    }
  }
}
 * 
 */