<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 13; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'English Canadian COA - General',
    'package' => 'chart_en_CA-general',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_CA-general.sql',
  ),
  1 => 
  array (
    'name' => 'Requisitions',
    'package' => 'requisitions',
    'version' => '2.3.13-4',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/requisitions',
  ),
  2 => 
  array (
    'name' => 'Cash Flow Statement Report',
    'package' => 'rep_cash_flow_statement',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_cash_flow_statement',
  ),
  3 => 
  array (
    'name' => 'Inventory History',
    'package' => 'rep_inventory_history',
    'version' => '2.3.2-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_inventory_history',
  ),
  4 => 
  array (
    'package' => 'HR_and_Payroll',
    'name' => 'HR_and_Payroll',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/HR_and_Payroll',
    'active' => false,
  ),
  5 => 
  array (
    'package' => 'HR_and_Payroll',
    'name' => 'HR_and_Payroll',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/HR_and_Payroll',
    'active' => false,
  ),
  6 => 
  array (
    'package' => 'HumanResourceManagement',
    'name' => 'HumanResourceManagement',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/HumanResourceManagement',
    'active' => false,
  ),
  8 => 
  array (
    'package' => 'bipulpayroll',
    'name' => 'bipulpayroll',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bipulpayroll',
    'active' => false,
  ),
  10 => 
  array (
    'package' => 'payroll',
    'name' => 'payroll',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/payroll',
    'active' => false,
  ),
  11 => 
  array (
    'name' => 'Theme Anterp',
    'package' => 'anterp',
    'version' => '2.3.0-5',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/anterp',
  ),
  12 => 
  array (
    'name' => 'Theme Dynamic',
    'package' => 'dynamic',
    'version' => '2.3.10-5',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/dynamic',
  ),
);
?>