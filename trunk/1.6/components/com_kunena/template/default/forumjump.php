<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 *
 * Based on FireBoard Component
 * @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.bestofjoomla.com
 *
 * Based on Joomlaboard Component
 * @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @author TSMF & Jan de Graaff
 **/

// MOS Intruder Alerts
defined ( '_JEXEC' ) or die ();

$catid = JRequest::getInt ( 'catid', 0 );

$options = array ();
$options [] = JHTML::_ ( 'select.option', '0', _KUNENA_FORUM_TOP );
$lists ['parent'] = CKunenaTools::forumSelectList ( 'forumjump', $catid, $options, 'class="inputbox fbs" size="1" onchange = "this.form.submit()"', true );
?>
<form id="jumpto" name="jumpto" method="post" target="_self"
	action="<?php
	echo CKunenaLink::GetKunenaURL ();
	?>"><span class="right"> <input type="hidden"
	name="func" value="showcat" />
		<?php
		echo $lists ['parent'];
		?>
	<input type="submit" name="Go" class="kbutton ks"
	value="<?php
	echo _KUNENA_GO;
	?>" /> </span>
</form>