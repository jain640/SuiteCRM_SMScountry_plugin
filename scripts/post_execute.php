<?php
if (! defined('sugarEntry') || ! sugarEntry) die('Not A Valid Entry Point');

	global $sugar_config;	
	
	// Perform a Quick Repair and Rebuild
	
	$autoexecute = false; //do not execute any SQL
	$show_output = true; //output to the screen
	require_once("modules/Administration/QuickRepairAndRebuild.php");
	$randc = new RepairAndClear();
	$randc->repairAndClearAll(array('clearAll'),array(translate('LBL_ALL_MODULES')), $autoexecute,$show_output);
	 
	// Rebuild JS Lang Files
	
	require_once("include/SugarObjects/LanguageManager.php"); 
	//remove the js language files
    LanguageManager::removeJSLanguageFiles();
    //remove language cache files
    LanguageManager::clearLanguageCache();
	
