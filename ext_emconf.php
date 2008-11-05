<?php

########################################################################
# Extension Manager/Repository config file for ext: "tinymce_rte"
#
# Auto generated 04-11-2008 22:08
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TinyMCE RTE',
	'description' => 'a straight TinyMCE port for TYPO3 (partly based on tinyrte)',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.1.4',
	'dependencies' => 'cms',
	'conflicts' => 'rtehtmlarea,tinyrte',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1,mod2,mod3',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => 'typo3temp/tinymce_rte/',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'webteam',
	'author_email' => 'typo3@webteam.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '4.1.0-4.2.99',
		),
		'conflicts' => array(
			'rtehtmlarea' => '',
			'tinyrte' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:293:{s:20:"class.ext_update.php";s:4:"7110";s:29:"class.tx_tinymce_rte_base.php";s:4:"b962";s:33:"class.ux_t3lib_parsehtml_proc.php";s:4:"7b07";s:12:"ext_icon.gif";s:4:"0e8d";s:17:"ext_localconf.php";s:4:"bc5e";s:14:"ext_tables.php";s:4:"b565";s:14:"doc/manual.sxw";s:4:"94ee";s:21:"mod1/browse_links.php";s:4:"b7ea";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"de9c";s:31:"mod1/locallang_browse_links.xml";s:4:"da57";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"38ca";s:35:"mod2/locallang_rte_select_image.xml";s:4:"8d3f";s:25:"mod2/rte_select_image.php";s:4:"1ed5";s:14:"mod3/changelog";s:4:"fabe";s:13:"mod3/conf.php";s:4:"e2f7";s:15:"mod3/config.php";s:4:"0bbe";s:12:"mod3/rpc.php";s:4:"3827";s:29:"mod3/classes/EnchantSpell.php";s:4:"2b48";s:28:"mod3/classes/GoogleSpell.php";s:4:"6de8";s:23:"mod3/classes/PSpell.php";s:4:"bd98";s:28:"mod3/classes/PSpellShell.php";s:4:"3bc7";s:29:"mod3/classes/SpellChecker.php";s:4:"cb64";s:27:"mod3/classes/utils/JSON.php";s:4:"45c8";s:29:"mod3/classes/utils/Logger.php";s:4:"ca90";s:25:"mod3/includes/general.php";s:4:"4573";s:28:"patcher/class.pmkpatcher.php";s:4:"4bd4";s:26:"patcher/diffs/advlink.diff";s:4:"364c";s:29:"patcher/diffs/fullscreen.diff";s:4:"a5ee";s:32:"pi1/class.tx_tinymce_rte_pi1.php";s:4:"a346";s:40:"res/tinymce_templates/simpleReplace.html";s:4:"3f27";s:33:"res/tinymce_templates/static.html";s:4:"13b0";s:24:"res/tiny_mce/license.txt";s:4:"0571";s:24:"res/tiny_mce/tiny_mce.js";s:4:"d5ad";s:29:"res/tiny_mce/tiny_mce_gzip.js";s:4:"440d";s:30:"res/tiny_mce/tiny_mce_gzip.php";s:4:"e6d5";s:30:"res/tiny_mce/tiny_mce_popup.js";s:4:"d0c0";s:28:"res/tiny_mce/tiny_mce_src.js";s:4:"778e";s:24:"res/tiny_mce/langs/de.js";s:4:"1318";s:24:"res/tiny_mce/langs/en.js";s:4:"25c1";s:43:"res/tiny_mce/plugins/advhr/editor_plugin.js";s:4:"7134";s:47:"res/tiny_mce/plugins/advhr/editor_plugin_src.js";s:4:"e518";s:35:"res/tiny_mce/plugins/advhr/rule.htm";s:4:"a3c4";s:40:"res/tiny_mce/plugins/advhr/css/advhr.css";s:4:"15df";s:37:"res/tiny_mce/plugins/advhr/js/rule.js";s:4:"ef46";s:42:"res/tiny_mce/plugins/advhr/langs/de_dlg.js";s:4:"9bdb";s:42:"res/tiny_mce/plugins/advhr/langs/en_dlg.js";s:4:"297a";s:46:"res/tiny_mce/plugins/advimage/editor_plugin.js";s:4:"848a";s:50:"res/tiny_mce/plugins/advimage/editor_plugin_src.js";s:4:"baa8";s:39:"res/tiny_mce/plugins/advimage/image.htm";s:4:"b5a3";s:46:"res/tiny_mce/plugins/advimage/css/advimage.css";s:4:"1ccd";s:44:"res/tiny_mce/plugins/advimage/img/sample.gif";s:4:"b9c7";s:41:"res/tiny_mce/plugins/advimage/js/image.js";s:4:"21e1";s:45:"res/tiny_mce/plugins/advimage/langs/de_dlg.js";s:4:"e729";s:45:"res/tiny_mce/plugins/advimage/langs/en_dlg.js";s:4:"3b21";s:45:"res/tiny_mce/plugins/advlink/editor_plugin.js";s:4:"519f";s:49:"res/tiny_mce/plugins/advlink/editor_plugin_src.js";s:4:"cb2b";s:37:"res/tiny_mce/plugins/advlink/link.htm";s:4:"ab46";s:44:"res/tiny_mce/plugins/advlink/css/advlink.css";s:4:"aaf2";s:42:"res/tiny_mce/plugins/advlink/js/advlink.js";s:4:"0075";s:44:"res/tiny_mce/plugins/advlink/langs/de_dlg.js";s:4:"8319";s:44:"res/tiny_mce/plugins/advlink/langs/en_dlg.js";s:4:"38dc";s:46:"res/tiny_mce/plugins/autosave/editor_plugin.js";s:4:"f54e";s:50:"res/tiny_mce/plugins/autosave/editor_plugin_src.js";s:4:"0597";s:44:"res/tiny_mce/plugins/bbcode/editor_plugin.js";s:4:"1938";s:48:"res/tiny_mce/plugins/bbcode/editor_plugin_src.js";s:4:"9579";s:46:"res/tiny_mce/plugins/compat2x/editor_plugin.js";s:4:"c3d0";s:50:"res/tiny_mce/plugins/compat2x/editor_plugin_src.js";s:4:"c1f8";s:49:"res/tiny_mce/plugins/contextmenu/editor_plugin.js";s:4:"47f5";s:53:"res/tiny_mce/plugins/contextmenu/editor_plugin_src.js";s:4:"d0a1";s:52:"res/tiny_mce/plugins/directionality/editor_plugin.js";s:4:"7713";s:56:"res/tiny_mce/plugins/directionality/editor_plugin_src.js";s:4:"c921";s:46:"res/tiny_mce/plugins/emotions/editor_plugin.js";s:4:"fc11";s:50:"res/tiny_mce/plugins/emotions/editor_plugin_src.js";s:4:"ec9d";s:42:"res/tiny_mce/plugins/emotions/emotions.htm";s:4:"f495";s:49:"res/tiny_mce/plugins/emotions/img/smiley-cool.gif";s:4:"e26e";s:48:"res/tiny_mce/plugins/emotions/img/smiley-cry.gif";s:4:"e72b";s:55:"res/tiny_mce/plugins/emotions/img/smiley-embarassed.gif";s:4:"d591";s:58:"res/tiny_mce/plugins/emotions/img/smiley-foot-in-mouth.gif";s:4:"9052";s:50:"res/tiny_mce/plugins/emotions/img/smiley-frown.gif";s:4:"5993";s:53:"res/tiny_mce/plugins/emotions/img/smiley-innocent.gif";s:4:"ec04";s:49:"res/tiny_mce/plugins/emotions/img/smiley-kiss.gif";s:4:"4ae8";s:53:"res/tiny_mce/plugins/emotions/img/smiley-laughing.gif";s:4:"b691";s:56:"res/tiny_mce/plugins/emotions/img/smiley-money-mouth.gif";s:4:"11c1";s:51:"res/tiny_mce/plugins/emotions/img/smiley-sealed.gif";s:4:"28b9";s:50:"res/tiny_mce/plugins/emotions/img/smiley-smile.gif";s:4:"c676";s:54:"res/tiny_mce/plugins/emotions/img/smiley-surprised.gif";s:4:"eff5";s:55:"res/tiny_mce/plugins/emotions/img/smiley-tongue-out.gif";s:4:"5ec3";s:54:"res/tiny_mce/plugins/emotions/img/smiley-undecided.gif";s:4:"3c0c";s:49:"res/tiny_mce/plugins/emotions/img/smiley-wink.gif";s:4:"4ae6";s:49:"res/tiny_mce/plugins/emotions/img/smiley-yell.gif";s:4:"19bb";s:44:"res/tiny_mce/plugins/emotions/js/emotions.js";s:4:"ca78";s:45:"res/tiny_mce/plugins/emotions/langs/de_dlg.js";s:4:"2247";s:45:"res/tiny_mce/plugins/emotions/langs/en_dlg.js";s:4:"1ed9";s:39:"res/tiny_mce/plugins/example/dialog.htm";s:4:"9159";s:45:"res/tiny_mce/plugins/example/editor_plugin.js";s:4:"8258";s:49:"res/tiny_mce/plugins/example/editor_plugin_src.js";s:4:"3795";s:44:"res/tiny_mce/plugins/example/img/example.gif";s:4:"6036";s:41:"res/tiny_mce/plugins/example/js/dialog.js";s:4:"8324";s:40:"res/tiny_mce/plugins/example/langs/en.js";s:4:"78c8";s:44:"res/tiny_mce/plugins/example/langs/en_dlg.js";s:4:"7aec";s:46:"res/tiny_mce/plugins/fullpage/editor_plugin.js";s:4:"91ac";s:50:"res/tiny_mce/plugins/fullpage/editor_plugin_src.js";s:4:"2979";s:42:"res/tiny_mce/plugins/fullpage/fullpage.htm";s:4:"4bcb";s:46:"res/tiny_mce/plugins/fullpage/css/fullpage.css";s:4:"0a4e";s:44:"res/tiny_mce/plugins/fullpage/js/fullpage.js";s:4:"5e54";s:45:"res/tiny_mce/plugins/fullpage/langs/de_dlg.js";s:4:"59e5";s:45:"res/tiny_mce/plugins/fullpage/langs/en_dlg.js";s:4:"5808";s:48:"res/tiny_mce/plugins/fullscreen/editor_plugin.js";s:4:"af17";s:52:"res/tiny_mce/plugins/fullscreen/editor_plugin_src.js";s:4:"c490";s:46:"res/tiny_mce/plugins/fullscreen/fullscreen.htm";s:4:"d892";s:45:"res/tiny_mce/plugins/iespell/editor_plugin.js";s:4:"e4e4";s:49:"res/tiny_mce/plugins/iespell/editor_plugin_src.js";s:4:"14ee";s:50:"res/tiny_mce/plugins/inlinepopups/editor_plugin.js";s:4:"b2cb";s:54:"res/tiny_mce/plugins/inlinepopups/editor_plugin_src.js";s:4:"917b";s:46:"res/tiny_mce/plugins/inlinepopups/template.htm";s:4:"3d7e";s:62:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css";s:4:"5e33";s:65:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/alert.gif";s:4:"5664";s:66:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/button.gif";s:4:"9e91";s:67:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/buttons.gif";s:4:"1743";s:67:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/confirm.gif";s:4:"44f1";s:67:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/corners.gif";s:4:"2e89";s:70:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/horizontal.gif";s:4:"0365";s:68:"res/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/vertical.gif";s:4:"1938";s:52:"res/tiny_mce/plugins/insertdatetime/editor_plugin.js";s:4:"0fba";s:56:"res/tiny_mce/plugins/insertdatetime/editor_plugin_src.js";s:4:"6b6d";s:43:"res/tiny_mce/plugins/layer/editor_plugin.js";s:4:"67ea";s:47:"res/tiny_mce/plugins/layer/editor_plugin_src.js";s:4:"ceda";s:43:"res/tiny_mce/plugins/media/editor_plugin.js";s:4:"9bee";s:47:"res/tiny_mce/plugins/media/editor_plugin_src.js";s:4:"f592";s:36:"res/tiny_mce/plugins/media/media.htm";s:4:"7259";s:42:"res/tiny_mce/plugins/media/css/content.css";s:4:"4d54";s:40:"res/tiny_mce/plugins/media/css/media.css";s:4:"ed1c";s:40:"res/tiny_mce/plugins/media/img/flash.gif";s:4:"6c69";s:45:"res/tiny_mce/plugins/media/img/flv_player.swf";s:4:"fe01";s:44:"res/tiny_mce/plugins/media/img/quicktime.gif";s:4:"9a6a";s:44:"res/tiny_mce/plugins/media/img/realmedia.gif";s:4:"b973";s:44:"res/tiny_mce/plugins/media/img/shockwave.gif";s:4:"baa6";s:40:"res/tiny_mce/plugins/media/img/trans.gif";s:4:"12bf";s:47:"res/tiny_mce/plugins/media/img/windowsmedia.gif";s:4:"c327";s:38:"res/tiny_mce/plugins/media/js/embed.js";s:4:"39eb";s:38:"res/tiny_mce/plugins/media/js/media.js";s:4:"fd31";s:42:"res/tiny_mce/plugins/media/langs/de_dlg.js";s:4:"3181";s:42:"res/tiny_mce/plugins/media/langs/en_dlg.js";s:4:"b067";s:49:"res/tiny_mce/plugins/nonbreaking/editor_plugin.js";s:4:"9374";s:53:"res/tiny_mce/plugins/nonbreaking/editor_plugin_src.js";s:4:"1e0a";s:49:"res/tiny_mce/plugins/noneditable/editor_plugin.js";s:4:"f305";s:53:"res/tiny_mce/plugins/noneditable/editor_plugin_src.js";s:4:"fe72";s:47:"res/tiny_mce/plugins/pagebreak/editor_plugin.js";s:4:"a1c5";s:51:"res/tiny_mce/plugins/pagebreak/editor_plugin_src.js";s:4:"3296";s:46:"res/tiny_mce/plugins/pagebreak/css/content.css";s:4:"d966";s:48:"res/tiny_mce/plugins/pagebreak/img/pagebreak.gif";s:4:"4887";s:44:"res/tiny_mce/plugins/pagebreak/img/trans.gif";s:4:"12bf";s:36:"res/tiny_mce/plugins/paste/blank.htm";s:4:"a2d0";s:43:"res/tiny_mce/plugins/paste/editor_plugin.js";s:4:"5b14";s:47:"res/tiny_mce/plugins/paste/editor_plugin_src.js";s:4:"446a";s:40:"res/tiny_mce/plugins/paste/pastetext.htm";s:4:"afa1";s:40:"res/tiny_mce/plugins/paste/pasteword.htm";s:4:"233d";s:40:"res/tiny_mce/plugins/paste/css/blank.css";s:4:"5840";s:44:"res/tiny_mce/plugins/paste/css/pasteword.css";s:4:"e1df";s:42:"res/tiny_mce/plugins/paste/js/pastetext.js";s:4:"5d07";s:42:"res/tiny_mce/plugins/paste/js/pasteword.js";s:4:"5760";s:42:"res/tiny_mce/plugins/paste/langs/de_dlg.js";s:4:"8d6d";s:42:"res/tiny_mce/plugins/paste/langs/en_dlg.js";s:4:"aa38";s:45:"res/tiny_mce/plugins/preview/editor_plugin.js";s:4:"7bcb";s:49:"res/tiny_mce/plugins/preview/editor_plugin_src.js";s:4:"c24d";s:41:"res/tiny_mce/plugins/preview/example.html";s:4:"9b92";s:41:"res/tiny_mce/plugins/preview/preview.html";s:4:"68ed";s:46:"res/tiny_mce/plugins/preview/jscripts/embed.js";s:4:"39eb";s:43:"res/tiny_mce/plugins/print/editor_plugin.js";s:4:"6557";s:47:"res/tiny_mce/plugins/print/editor_plugin_src.js";s:4:"9609";s:37:"res/tiny_mce/plugins/safari/blank.htm";s:4:"c9a4";s:44:"res/tiny_mce/plugins/safari/editor_plugin.js";s:4:"1290";s:48:"res/tiny_mce/plugins/safari/editor_plugin_src.js";s:4:"de66";s:42:"res/tiny_mce/plugins/save/editor_plugin.js";s:4:"b9cc";s:46:"res/tiny_mce/plugins/save/editor_plugin_src.js";s:4:"068c";s:51:"res/tiny_mce/plugins/searchreplace/editor_plugin.js";s:4:"3154";s:55:"res/tiny_mce/plugins/searchreplace/editor_plugin_src.js";s:4:"1246";s:52:"res/tiny_mce/plugins/searchreplace/searchreplace.htm";s:4:"06c9";s:56:"res/tiny_mce/plugins/searchreplace/css/searchreplace.css";s:4:"ad0a";s:54:"res/tiny_mce/plugins/searchreplace/js/searchreplace.js";s:4:"8782";s:50:"res/tiny_mce/plugins/searchreplace/langs/de_dlg.js";s:4:"be77";s:50:"res/tiny_mce/plugins/searchreplace/langs/en_dlg.js";s:4:"5f73";s:50:"res/tiny_mce/plugins/spellchecker/editor_plugin.js";s:4:"aed8";s:54:"res/tiny_mce/plugins/spellchecker/editor_plugin_src.js";s:4:"afcc";s:49:"res/tiny_mce/plugins/spellchecker/css/content.css";s:4:"ac0c";s:47:"res/tiny_mce/plugins/spellchecker/img/wline.gif";s:4:"c136";s:43:"res/tiny_mce/plugins/style/editor_plugin.js";s:4:"a33c";s:47:"res/tiny_mce/plugins/style/editor_plugin_src.js";s:4:"10ec";s:36:"res/tiny_mce/plugins/style/props.htm";s:4:"d4e3";s:40:"res/tiny_mce/plugins/style/css/props.css";s:4:"3442";s:38:"res/tiny_mce/plugins/style/js/props.js";s:4:"704c";s:42:"res/tiny_mce/plugins/style/langs/de_dlg.js";s:4:"0d5e";s:42:"res/tiny_mce/plugins/style/langs/en_dlg.js";s:4:"1e06";s:35:"res/tiny_mce/plugins/table/cell.htm";s:4:"44bd";s:43:"res/tiny_mce/plugins/table/editor_plugin.js";s:4:"aa25";s:47:"res/tiny_mce/plugins/table/editor_plugin_src.js";s:4:"a9ed";s:42:"res/tiny_mce/plugins/table/merge_cells.htm";s:4:"e2c8";s:34:"res/tiny_mce/plugins/table/row.htm";s:4:"862d";s:36:"res/tiny_mce/plugins/table/table.htm";s:4:"8eaf";s:39:"res/tiny_mce/plugins/table/css/cell.css";s:4:"5639";s:38:"res/tiny_mce/plugins/table/css/row.css";s:4:"81a7";s:40:"res/tiny_mce/plugins/table/css/table.css";s:4:"f5e6";s:37:"res/tiny_mce/plugins/table/js/cell.js";s:4:"9721";s:44:"res/tiny_mce/plugins/table/js/merge_cells.js";s:4:"254f";s:36:"res/tiny_mce/plugins/table/js/row.js";s:4:"2693";s:38:"res/tiny_mce/plugins/table/js/table.js";s:4:"db3f";s:42:"res/tiny_mce/plugins/table/langs/de_dlg.js";s:4:"0a02";s:42:"res/tiny_mce/plugins/table/langs/en_dlg.js";s:4:"9828";s:39:"res/tiny_mce/plugins/template/blank.htm";s:4:"9553";s:46:"res/tiny_mce/plugins/template/editor_plugin.js";s:4:"345d";s:50:"res/tiny_mce/plugins/template/editor_plugin_src.js";s:4:"d366";s:42:"res/tiny_mce/plugins/template/template.htm";s:4:"767d";s:46:"res/tiny_mce/plugins/template/css/template.css";s:4:"5b2c";s:44:"res/tiny_mce/plugins/template/js/template.js";s:4:"48fe";s:45:"res/tiny_mce/plugins/template/langs/de_dlg.js";s:4:"d113";s:45:"res/tiny_mce/plugins/template/langs/en_dlg.js";s:4:"9096";s:49:"res/tiny_mce/plugins/visualchars/editor_plugin.js";s:4:"8fec";s:53:"res/tiny_mce/plugins/visualchars/editor_plugin_src.js";s:4:"4d1e";s:40:"res/tiny_mce/plugins/xhtmlxtras/abbr.htm";s:4:"8b3e";s:43:"res/tiny_mce/plugins/xhtmlxtras/acronym.htm";s:4:"5252";s:46:"res/tiny_mce/plugins/xhtmlxtras/attributes.htm";s:4:"4de6";s:40:"res/tiny_mce/plugins/xhtmlxtras/cite.htm";s:4:"b7d8";s:39:"res/tiny_mce/plugins/xhtmlxtras/del.htm";s:4:"fceb";s:48:"res/tiny_mce/plugins/xhtmlxtras/editor_plugin.js";s:4:"6c23";s:52:"res/tiny_mce/plugins/xhtmlxtras/editor_plugin_src.js";s:4:"db74";s:39:"res/tiny_mce/plugins/xhtmlxtras/ins.htm";s:4:"f0cf";s:50:"res/tiny_mce/plugins/xhtmlxtras/css/attributes.css";s:4:"abc1";s:45:"res/tiny_mce/plugins/xhtmlxtras/css/popup.css";s:4:"ed53";s:42:"res/tiny_mce/plugins/xhtmlxtras/js/abbr.js";s:4:"892a";s:45:"res/tiny_mce/plugins/xhtmlxtras/js/acronym.js";s:4:"1f21";s:48:"res/tiny_mce/plugins/xhtmlxtras/js/attributes.js";s:4:"1741";s:42:"res/tiny_mce/plugins/xhtmlxtras/js/cite.js";s:4:"e040";s:41:"res/tiny_mce/plugins/xhtmlxtras/js/del.js";s:4:"1a3e";s:52:"res/tiny_mce/plugins/xhtmlxtras/js/element_common.js";s:4:"179f";s:41:"res/tiny_mce/plugins/xhtmlxtras/js/ins.js";s:4:"4062";s:47:"res/tiny_mce/plugins/xhtmlxtras/langs/de_dlg.js";s:4:"2544";s:47:"res/tiny_mce/plugins/xhtmlxtras/langs/en_dlg.js";s:4:"31b9";s:38:"res/tiny_mce/themes/advanced/about.htm";s:4:"5a95";s:39:"res/tiny_mce/themes/advanced/anchor.htm";s:4:"b2e2";s:40:"res/tiny_mce/themes/advanced/charmap.htm";s:4:"a5fd";s:45:"res/tiny_mce/themes/advanced/color_picker.htm";s:4:"41df";s:47:"res/tiny_mce/themes/advanced/editor_template.js";s:4:"4df4";s:51:"res/tiny_mce/themes/advanced/editor_template_src.js";s:4:"8e9f";s:38:"res/tiny_mce/themes/advanced/image.htm";s:4:"c9a4";s:37:"res/tiny_mce/themes/advanced/link.htm";s:4:"08e2";s:46:"res/tiny_mce/themes/advanced/source_editor.htm";s:4:"1fd2";s:48:"res/tiny_mce/themes/advanced/img/colorpicker.jpg";s:4:"02ae";s:42:"res/tiny_mce/themes/advanced/img/icons.gif";s:4:"e893";s:40:"res/tiny_mce/themes/advanced/js/about.js";s:4:"7330";s:41:"res/tiny_mce/themes/advanced/js/anchor.js";s:4:"b7a2";s:42:"res/tiny_mce/themes/advanced/js/charmap.js";s:4:"0c12";s:47:"res/tiny_mce/themes/advanced/js/color_picker.js";s:4:"560e";s:40:"res/tiny_mce/themes/advanced/js/image.js";s:4:"1f4e";s:39:"res/tiny_mce/themes/advanced/js/link.js";s:4:"ddc3";s:48:"res/tiny_mce/themes/advanced/js/source_editor.js";s:4:"2fcd";s:40:"res/tiny_mce/themes/advanced/langs/de.js";s:4:"0f04";s:44:"res/tiny_mce/themes/advanced/langs/de_dlg.js";s:4:"167e";s:40:"res/tiny_mce/themes/advanced/langs/en.js";s:4:"91c9";s:44:"res/tiny_mce/themes/advanced/langs/en_dlg.js";s:4:"c855";s:54:"res/tiny_mce/themes/advanced/skins/default/content.css";s:4:"fb2b";s:53:"res/tiny_mce/themes/advanced/skins/default/dialog.css";s:4:"fc40";s:49:"res/tiny_mce/themes/advanced/skins/default/ui.css";s:4:"9a29";s:58:"res/tiny_mce/themes/advanced/skins/default/img/buttons.png";s:4:"1e0a";s:56:"res/tiny_mce/themes/advanced/skins/default/img/items.gif";s:4:"5cb4";s:61:"res/tiny_mce/themes/advanced/skins/default/img/menu_arrow.gif";s:4:"e217";s:61:"res/tiny_mce/themes/advanced/skins/default/img/menu_check.gif";s:4:"c7d0";s:59:"res/tiny_mce/themes/advanced/skins/default/img/progress.gif";s:4:"50c5";s:55:"res/tiny_mce/themes/advanced/skins/default/img/tabs.gif";s:4:"93f9";s:51:"res/tiny_mce/themes/advanced/skins/o2k7/content.css";s:4:"00e4";s:50:"res/tiny_mce/themes/advanced/skins/o2k7/dialog.css";s:4:"92d7";s:46:"res/tiny_mce/themes/advanced/skins/o2k7/ui.css";s:4:"8c39";s:52:"res/tiny_mce/themes/advanced/skins/o2k7/ui_black.css";s:4:"1eb2";s:53:"res/tiny_mce/themes/advanced/skins/o2k7/ui_silver.css";s:4:"9071";s:57:"res/tiny_mce/themes/advanced/skins/o2k7/img/button_bg.png";s:4:"8c9b";s:63:"res/tiny_mce/themes/advanced/skins/o2k7/img/button_bg_black.png";s:4:"a5ad";s:64:"res/tiny_mce/themes/advanced/skins/o2k7/img/button_bg_silver.png";s:4:"5690";s:45:"res/tiny_mce/themes/simple/editor_template.js";s:4:"45f4";s:49:"res/tiny_mce/themes/simple/editor_template_src.js";s:4:"96ac";s:40:"res/tiny_mce/themes/simple/img/icons.gif";s:4:"7491";s:38:"res/tiny_mce/themes/simple/langs/de.js";s:4:"28a9";s:38:"res/tiny_mce/themes/simple/langs/en.js";s:4:"6588";s:52:"res/tiny_mce/themes/simple/skins/default/content.css";s:4:"0f70";s:47:"res/tiny_mce/themes/simple/skins/default/ui.css";s:4:"c46c";s:49:"res/tiny_mce/themes/simple/skins/o2k7/content.css";s:4:"eb7a";s:44:"res/tiny_mce/themes/simple/skins/o2k7/ui.css";s:4:"f0ec";s:55:"res/tiny_mce/themes/simple/skins/o2k7/img/button_bg.png";s:4:"405c";s:38:"res/tiny_mce/utils/editable_selects.js";s:4:"367f";s:32:"res/tiny_mce/utils/form_utils.js";s:4:"3b6b";s:28:"res/tiny_mce/utils/mctabs.js";s:4:"faad";s:30:"res/tiny_mce/utils/validate.js";s:4:"a1ce";s:22:"static/pageTSConfig.ts";s:4:"d757";}',
	'suggests' => array(
	),
);

?>