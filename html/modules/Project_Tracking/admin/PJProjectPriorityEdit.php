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

$pagetitle = ': ' . _PJ_TITLE . ': ' . _PJ_PROJECTS . ': ' . _PJ_EDITPRIORITY;

$priority_id = intval($priority_id);

if($priority_id < 1) {
	header('Location: ' . $admin_file . '.php?op=PJProjectPriorityList');
}

include('header.php');

$priority = pjprojectpriority_info($priority_id);

pjadmin_menu(_PJ_PROJECTS . ': ' . _PJ_EDITPRIORITY);
echo '<br />'."\n";

OpenTable();
echo '<form method="post" action="' . $admin_file . '.php">'."\n";
echo '<table align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
echo '<tr><td bgcolor="' . $bgcolor2 . '">' . _PJ_PRIORITYNAME . ':</td>'."\n";
echo '<td><input type="text" name="priority_name" size="30" value="' . $priority['priority_name'] . '" /></td></tr>'."\n";
echo '<tr><td colspan="2" align="center"><input type="submit" value="' . _PJ_UPDATEPROJECTPRIORITY . '" />'."\n";
echo '<input type="hidden" name="op" value="PJProjectPriorityUpdate" />'."\n";
echo '<input type="hidden" name="priority_id" value="' . $priority_id . '" />'."\n";
echo '</td></tr>'."\n";
echo '</table>'."\n";
echo '</form>'."\n";
CloseTable();

pj_copy();

include('footer.php');

?>