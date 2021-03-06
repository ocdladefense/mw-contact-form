<?php
/**
 * Internationalisation file for extension Gadgets.
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Kinzler, brightbyte.de
 * @copyright © 2007 Daniel Kinzler
 * @license GNU General Public Licence 2.0 or later
 */

$messages = array();

/** English
 * @author Daniel Kinzler, brightbyte.de
 */
$messages['en'] = array(
	# for Special:Version
	'contactform-desc'      => 'Lets users select custom [[Special:Gadgets|CSS and JavaScript gadgets]] in their [[Special:Preferences#mw-prefsection-gadgets|preferences]]',

	# for Special:Preferences
	'prefs-contactform'     => 'Contact Form',
	'contactform-prefstext' => 'Below is a list of special gadgets you can enable for your account.
These gadgets are mostly based on JavaScript, so JavaScript has to be enabled in your browser for them to work.
Note that these gadgets will have no effect on this preferences page.

Also note that these special gadgets are not part of the MediaWiki software, and are usually developed and maintained by users on your local wiki.
Local administrators can edit the [[MediaWiki:Gadgets-definition|definitions]] and [[Special:Gadgets|descriptions]] of available gadgets.',

	# for Special:Gadgets
	'contactform'           => 'Contact Form',
	'gadgets-definition' => '', # do not translate or duplicate this message to other languages
	'contactform-title'     => 'Contact Form',
	'gadgets-pagetext'  => "Below is a list of special gadgets users can enable on their [[Special:Preferences#mw-prefsection-gadgets|preferences page]], as defined by the [[MediaWiki:Gadgets-definition|definitions]].
This overview provides easy access to the system message pages that define each gadget's description and code.",
);