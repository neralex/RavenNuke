<?php

/***********************************************************/
/* NukeScripts Network (webmaster@nukescripts.net) 			*/
/* http://www.nukescripts.net 						*/
/* Copyright � 2000-2005 by NukeScripts Network 			*/
/***********************************************************/
/*"I�t�rn�ti�n�liz�ti�n"							*/
/* Project Tracking 					 			*/
/* http://www.ravennuke.com	 						*/
/* Copyright � 2013 by RavenNuke�		 			*/
/* Author: Palbin (matt@phpnuke-guild.org)					*/
/* Description of changes: Made 100% XHTML 1.0 Transitional	*/
/*	Compliant.  Bugs fixes and major code formating changes	*/
/***********************************************************/

if (!defined('ADMIN_FILE')) {
	die ('Access Denied');
}

$pidrep = intval($pidrep);
$pid = intval($pid);

$result = $db->sql_query('UPDATE ' . $prefix . '_nsnpj_reports_types SET type_weight="' . $weight . '" WHERE type_id="' . $pidrep . '"');
$result2 = $db->sql_query('UPDATE ' . $prefix . '_nsnpj_projects SET type_weight="' . $weightrep . '" WHERE type_id="' . $pid . '"');

header('Location: ' . $admin_file . '.php?op=PJReportTypeList');

?>