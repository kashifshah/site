<?
	# Defines the absolute location of the installed software
	$site_base = 'http://www.qt21.eu/infrastructure';

	#defines the path for the includes folder relative to the base of the installed software
	$incBase = 'includes/';
	
	#functions to include common content
	function addSmallHeader ($title="MQ Metric Builder") { global $incBase; include ($incBase.'smallHeader.php'); }
	function addHeader ($title="MQ Metric Builder") { global $incBase; include ($incBase.'header.php'); }
	function addFooter () { global $incBase; include ($incBase.'footer.php'); }
	function addLangCodes () { global $incBase; include ($incBase.'isoLangCodes.php'); }
	function addCountryCodes () { global $incBase; include ($incBase.'isoCountryCodes.php'); }
?>