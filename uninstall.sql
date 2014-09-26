SET @configuration_group_id=0;
SELECT @configuration_group_id:=configuration_group_id
FROM configuration
WHERE configuration_key= 'PHYSICAL_ATTRIBUTES_VERSION'
LIMIT 1;
DELETE FROM configuration WHERE configuration_group_id = @configuration_group_id;
DELETE FROM configuration_group WHERE configuration_group_id = @configuration_group_id;
DELETE FROM admin_pages WHERE page_key = 'configPhysAttr';
DELETE FROM admin_pages WHERE page_key = 'catalogPhysAttr';