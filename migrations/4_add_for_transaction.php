<?php 
$db = JFactory::getDbo();
$db->setQuery("ALTER TABLE #__fvn_orders modify end date;")->execute();
