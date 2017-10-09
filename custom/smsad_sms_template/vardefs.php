<?php

if (!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/* * *******************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 * ****************************************************************************** */

$dictionary['smsad_sms_template'] = array(
	'table' => 'smsad_sms_template', 'comment' => 'Templates used in email processing',
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'vname' => 'LBL_ID',
			'type' => 'id',
			'required' => true,
			'reportable' => false,
			'comment' => 'Unique identifier'
		),
		'date_entered' => array(
			'name' => 'date_entered',
			'vname' => 'LBL_DATE_ENTERED',
			'type' => 'datetime',
			'required' => true,
			'comment' => 'Date record created'
		),
		'date_modified' => array(
			'name' => 'date_modified',
			'vname' => 'LBL_DATE_MODIFIED',
			'type' => 'datetime',
			'required' => true,
			'comment' => 'Date record last modified'
		),
		'modified_user_id' => array(
			'name' => 'modified_user_id',
			'rname' => 'user_name',
			'id_name' => 'modified_user_id',
			'vname' => 'LBL_ASSIGNED_TO',
			'type' => 'assigned_user_name',
			'table' => 'users',
			'reportable' => true,
			'isnull' => 'false',
			'dbType' => 'id',
			'comment' => 'User who last modified record'
		),
		'created_by' => array(
			'name' => 'created_by',
			'vname' => 'LBL_CREATED_BY',
			'type' => 'varchar',
			'len' => '36',
			'comment' => 'User who created record'
		),
		'published' => array(
			'name' => 'published',
			'vname' => 'LBL_PUBLISHED',
			'type' => 'varchar',
			'len' => '3',
			'comment' => ''
		),
		'document_name' => array(
			'name' => 'document_name',
			'vname' => 'LBL_NAME',
			'type' => 'varchar',
			'len' => '255',
			'comment' => 'Sms template name',
			'importable' => 'required',
			'required' => true
		),
		'description' => array(
			'name' => 'description',
			'vname' => 'LBL_DESCRIPTION',
			'type' => 'text',
			'comment' => 'Sms template description'
		),
		'subject' => array(
			'name' => 'subject',
			'vname' => 'LBL_SUBJECT',
			'type' => 'varchar',
			'len' => '255',
			'comment' => 'Email subject to be used in resulting email'
		),
		'body' => array(
			'name' => 'body',
			'vname' => 'LBL_BODY',
			'type' => 'text',
			'comment' => 'Plain text body to be used in resulting email'
		),
		'body_html' => array(
			'name' => 'body_html',
			'vname' => 'LBL_PLAIN_TEXT',
			'type' => 'html',
			'comment' => 'HTML formatted email body to be used in resulting email'
		),
		'deleted' => array(
			'name' => 'deleted',
			'vname' => 'LBL_DELETED',
			'type' => 'bool',
			'required' => false,
			'reportable' => false,
			'comment' => 'Record deletion indicator'
		),
		'assigned_user_id' => array(
			'name' => 'assigned_user_id',
			'rname' => 'user_name',
			'id_name' => 'assigned_user_id',
			'vname' => 'LBL_ASSIGNED_TO_ID',
			'group' => 'assigned_user_name',
			'type' => 'relate',
			'table' => 'users',
			'module' => 'Users',
			'reportable' => true,
			'isnull' => 'false',
			'dbType' => 'id',
			'audited' => true,
			'comment' => 'User ID assigned to record',
			'duplicate_merge' => 'disabled'
		),
		'assigned_user_name' => array(
			'name' => 'assigned_user_name',
			'link' => 'assigned_user_link',
			'vname' => 'LBL_ASSIGNED_TO_NAME',
			'rname' => 'user_name',
			'type' => 'relate',
			'reportable' => false,
			'source' => 'non-db',
			'table' => 'users',
			'id_name' => 'assigned_user_id',
			'module' => 'Users',
			'duplicate_merge' => 'disabled'
		),
		'assigned_user_link' => array(
			'name' => 'assigned_user_link',
			'type' => 'link',
			'relationship' => 'smsad_sms_template_assigned_user',
			'vname' => 'LBL_ASSIGNED_TO_USER',
			'link_type' => 'one',
			'module' => 'Users',
			'bean_name' => 'User',
			'source' => 'non-db',
			'duplicate_merge' => 'enabled',
			'rname' => 'user_name',
			'id_name' => 'assigned_user_id',
			'table' => 'users',
		),
		'text_only' => array(
			'name' => 'text_only',
			'vname' => 'LBL_TEXT_ONLY',
			'type' => 'bool',
			'required' => false,
			'reportable' => false,
			'comment' => 'Should be checked if sms template is to be sent in text only'
		),
		'type' => array(
			'name' => 'type',
			'vname' => 'LBL_TYPE',
			'type' => 'enum',
			'required' => false,
			'reportable' => false,
			'options' => 'smsad_sms_template_type_list',
			'comment' => 'Type of the sms template'
		),
		'category_id' => array(
			'name' => 'category_id',
			'vname' => 'LBL_SUBCATEGORY',
			'type' => 'enum',
			'len' => '100',
			'required' => false,
			'reportable' => false,
			'options' => 'smsad_sms_template_category_dom',
			'comment' => 'Category'
		),
		'subcategory_id' => array(
			'name' => 'subcategory_id',
			'vname' => 'LBL_CATEGORY',
			'type' => 'enum',
			'len' => '100',
			'required' => false,
			'reportable' => false,
			'options' => 'smsad_sms_template_subcategory_dom',
			'comment' => 'Sub-Category'
		),
		'status_id' => array(
			'name' => 'status_id',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'len' => '100',
			'required' => false,
			'reportable' => false,
			'options' => 'document_status_dom',
			'comment' => 'Status'
		),
	),
	'indices' => array(
		array(
			'name' => 'smsad_sms_templatespk',
			'type' => 'primary',
			'fields' => array('id')
		),
		array(
			'name' => 'idx_smsad_sms_template_name',
			'type' => 'index',
			'fields' => array('name')
		)
	),
	'relationships' => array(
		'smsad_sms_template_assigned_user' =>
		array('lhs_module' => 'Users', 'lhs_table' => 'users', 'lhs_key' => 'id',
			'rhs_module' => 'smsad_sms_template', 'rhs_table' => 'smsad_sms_template', 'rhs_key' => 'assigned_user_id',
			'relationship_type' => 'one-to-many')
	),
);

VardefManager::createVardef('smsad_sms_template', 'smsad_sms_template', array('security_groups',
));
