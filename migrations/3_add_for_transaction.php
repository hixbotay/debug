<?php 
$db = JFactory::getDbo();
$db->setQuery("ALTER TABLE #__fvn_transaction add created datetime, add content text;")->execute();
