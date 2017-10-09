<?php
// created: 2017-01-08 16:43:34
$dictionary["smsad_sms_template_smsad_sms"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'smsad_sms_template_smsad_sms' => 
    array (
      'lhs_module' => 'smsad_sms_template',
      'lhs_table' => 'smsad_sms_template',
      'lhs_key' => 'id',
      'rhs_module' => 'smsad_SMS',
      'rhs_table' => 'smsad_sms',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'smsad_sms_template_smsad_sms_c',
      'join_key_lhs' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
      'join_key_rhs' => 'smsad_sms_template_smsad_smssmsad_sms_idb',
    ),
  ),
  'table' => 'smsad_sms_template_smsad_sms_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'smsad_sms_template_smsad_smssmsad_sms_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'smsad_sms_template_smsad_smsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'smsad_sms_template_smsad_sms_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'smsad_sms_template_smsad_smssmsad_sms_template_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'smsad_sms_template_smsad_sms_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'smsad_sms_template_smsad_smssmsad_sms_idb',
      ),
    ),
  ),
);