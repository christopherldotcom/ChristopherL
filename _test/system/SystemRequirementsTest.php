<?php
/**
 * Class SystemRequirementsTest
 *
 * Tests include:
 *  testPHPUnitVersion      Verifies PHPUnit compatibility
 *  testPHPVersion          Verifies PHP is version 5.6 or newer
 *  testSmartyVersion       Verifies Smarty is version 3 or newer
 *  testCompleteInstall     Verifies all files exist
 */
class SystemRequirementsTest extends PHPUnit\Framework\TestCase
{
	public function testPHPUnitVersion()
	{
		$this->assertGreaterThanOrEqual(6.0, floatval(PHPUnit\Runner\Version::id()), '---Please upgrade to PHPUnit 6.0 or newer.');
	}

	/**
	 * @depends testPHPUnitVersion
	 */
	public function testPHPVersion()
	{
		$this->assertGreaterThanOrEqual(5.6, floatval(phpversion()));
	}

	/**
	 * @depends testPHPUnitVersion
	 */
	public function testSmartyVersion()
	{
		require_once('include/libs/smarty/Smarty.class.php');
		$smarty = new Smarty();

		$this->assertGreaterThanOrEqual(3, floatval($smarty::SMARTY_VERSION));
	}

	/**
	 * @depends testPHPUnitVersion
	 */
	public function testCompleteInstall()
	{
		$files = array(
		'.editorconfig',
		'.github/CODE_OF_CONDUCT.md',
		'.github/CONTRIBUTING.md',
		'.github/ISSUE_TEMPLATE.md',
		'.github/PULL_REQUEST_TEMPLATE.md',
		'.htaccess',
		'404.php',
		'LICENSE',
		'README.md',
		'_build/gulpfile.js',
		'_build/javascript/core.js',
		'_build/javascript/vendor/featherlight.js',
		'_build/javascript/vendor/parsley.js',
		'_build/package-lock.json',
		'_build/package.json',
		'_build/sass/_/_mixins.scss',
		'_build/sass/_/_settings.scss',
		'_build/sass/_/_typography.scss',
		'_build/sass/main.scss',
		'_build/sass/partials/_aside.scss',
		'_build/sass/partials/_footer.scss',
		'_build/sass/partials/_forms.scss',
		'_build/sass/partials/_header.scss',
		'_build/sass/partials/_hero.scss',
		'_build/sass/partials/_layout.scss',
		'_build/sass/partials/_lightbox.scss',
		'_build/sass/partials/_media.scss',
		'_build/sass/partials/_nav.scss',
		'_build/sass/partials/_section.scss',
		'_build/sass/partials/_social.scss',
		'_build/sass/vendor/_featherlight.scss',
		'_build/sass/vendor/_mailchimp.scss',
		'_build/sass/vendor/_normalize.scss',
		'_build/sass/vendor/_skeleton.scss',
		'_test/phpunit.xml',
		'_test/system/SystemRequirementsTest.php',
		'_test/unit/AjaxHandlerTest.php',
		'_test/unit/ConfigurationTest.php',
		'_test/unit/FunctionsIncludeTest.php',
		'about.php',
		'ajax.php',
		'contact.php',
		'css/font/fontello.eot',
		'css/font/fontello.svg',
		'css/font/fontello.ttf',
		'css/font/fontello.woff',
		'css/font/fontello.woff2',
		'css/styles.css',
		'css/styles.css.map',
		'development.php',
		'download/christopherl_public_key.asc',
		'humans.txt',
		'img/apple-touch-icon.png',
		'img/at-desk.jpg',
		'img/favicon.png',
		'img/footer-head.png',
		'img/helios_history.png',
		'img/heros/404.jpg',
		'img/heros/about.jpg',
		'img/heros/contact.jpg',
		'img/heros/development.jpg',
		'img/heros/homepage.jpg',
		'img/heros/marketing.jpg',
		'img/logo.png',
		'img/logos/analytics.png',
		'img/logos/apache.png',
		'img/logos/html_css.png',
		'img/logos/hubspot.png',
		'img/logos/javascript.png',
		'img/logos/mailchimp.png',
		'img/logos/mysql.png',
		'img/logos/optimizely.png',
		'img/logos/others_dev.png',
		'img/logos/others_marketing.png',
		'img/logos/php.png',
		'img/logos/salesforce.png',
		'img/pushpin.png',
		'img/pushpin_bw.png',
		'img/shia.png',
		'img/social/404.jpg',
		'img/social/about.jpg',
		'img/social/contact.jpg',
		'img/social/development.jpg',
		'img/social/home.jpg',
		'img/social/marketing.jpg',
		'img/stocking-hat.jpg',
		'img/tshirts.jpg',
		'include/config.inc.dist.php',
		'include/email.inc.php',
		'include/functions.inc.php',
		'include/libs/smarty/Autoloader.php',
		'include/libs/smarty/Smarty.class.php',
		'include/libs/smarty/SmartyBC.class.php',
		'include/libs/smarty/debug.tpl',
		'include/libs/smarty/plugins/block.textformat.php',
		'include/libs/smarty/plugins/function.counter.php',
		'include/libs/smarty/plugins/function.cycle.php',
		'include/libs/smarty/plugins/function.fetch.php',
		'include/libs/smarty/plugins/function.html_checkboxes.php',
		'include/libs/smarty/plugins/function.html_image.php',
		'include/libs/smarty/plugins/function.html_options.php',
		'include/libs/smarty/plugins/function.html_radios.php',
		'include/libs/smarty/plugins/function.html_select_date.php',
		'include/libs/smarty/plugins/function.html_select_time.php',
		'include/libs/smarty/plugins/function.html_table.php',
		'include/libs/smarty/plugins/function.mailto.php',
		'include/libs/smarty/plugins/function.math.php',
		'include/libs/smarty/plugins/modifier.capitalize.php',
		'include/libs/smarty/plugins/modifier.date_format.php',
		'include/libs/smarty/plugins/modifier.debug_print_var.php',
		'include/libs/smarty/plugins/modifier.escape.php',
		'include/libs/smarty/plugins/modifier.regex_replace.php',
		'include/libs/smarty/plugins/modifier.replace.php',
		'include/libs/smarty/plugins/modifier.spacify.php',
		'include/libs/smarty/plugins/modifier.truncate.php',
		'include/libs/smarty/plugins/modifiercompiler.cat.php',
		'include/libs/smarty/plugins/modifiercompiler.count_characters.php',
		'include/libs/smarty/plugins/modifiercompiler.count_paragraphs.php',
		'include/libs/smarty/plugins/modifiercompiler.count_sentences.php',
		'include/libs/smarty/plugins/modifiercompiler.count_words.php',
		'include/libs/smarty/plugins/modifiercompiler.default.php',
		'include/libs/smarty/plugins/modifiercompiler.escape.php',
		'include/libs/smarty/plugins/modifiercompiler.from_charset.php',
		'include/libs/smarty/plugins/modifiercompiler.indent.php',
		'include/libs/smarty/plugins/modifiercompiler.lower.php',
		'include/libs/smarty/plugins/modifiercompiler.noprint.php',
		'include/libs/smarty/plugins/modifiercompiler.string_format.php',
		'include/libs/smarty/plugins/modifiercompiler.strip.php',
		'include/libs/smarty/plugins/modifiercompiler.strip_tags.php',
		'include/libs/smarty/plugins/modifiercompiler.to_charset.php',
		'include/libs/smarty/plugins/modifiercompiler.unescape.php',
		'include/libs/smarty/plugins/modifiercompiler.upper.php',
		'include/libs/smarty/plugins/modifiercompiler.wordwrap.php',
		'include/libs/smarty/plugins/outputfilter.trimwhitespace.php',
		'include/libs/smarty/plugins/shared.escape_special_chars.php',
		'include/libs/smarty/plugins/shared.literal_compiler_param.php',
		'include/libs/smarty/plugins/shared.make_timestamp.php',
		'include/libs/smarty/plugins/shared.mb_str_replace.php',
		'include/libs/smarty/plugins/shared.mb_unicode.php',
		'include/libs/smarty/plugins/shared.mb_wordwrap.php',
		'include/libs/smarty/plugins/variablefilter.htmlspecialchars.php',
		'include/libs/smarty/sysplugins/smarty_cacheresource.php',
		'include/libs/smarty/sysplugins/smarty_cacheresource_custom.php',
		'include/libs/smarty/sysplugins/smarty_cacheresource_keyvaluestore.php',
		'include/libs/smarty/sysplugins/smarty_data.php',
		'include/libs/smarty/sysplugins/smarty_internal_block.php',
		'include/libs/smarty/sysplugins/smarty_internal_cacheresource_file.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_append.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_assign.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_block.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_break.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_call.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_capture.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_config_load.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_continue.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_debug.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_eval.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_extends.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_for.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_foreach.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_function.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_if.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_include.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_include_php.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_insert.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_ldelim.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_make_nocache.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_nocache.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_block_plugin.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_foreachsection.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_function_plugin.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_modifier.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_object_block_function.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_object_function.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_php.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_print_expression.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_registered_block.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_registered_function.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_private_special_variable.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_rdelim.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_section.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_setfilter.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_shared_inheritance.php',
		'include/libs/smarty/sysplugins/smarty_internal_compile_while.php',
		'include/libs/smarty/sysplugins/smarty_internal_compilebase.php',
		'include/libs/smarty/sysplugins/smarty_internal_config_file_compiler.php',
		'include/libs/smarty/sysplugins/smarty_internal_configfilelexer.php',
		'include/libs/smarty/sysplugins/smarty_internal_configfileparser.php',
		'include/libs/smarty/sysplugins/smarty_internal_data.php',
		'include/libs/smarty/sysplugins/smarty_internal_debug.php',
		'include/libs/smarty/sysplugins/smarty_internal_extension_clear.php',
		'include/libs/smarty/sysplugins/smarty_internal_extension_handler.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_addautoloadfilters.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_adddefaultmodifiers.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_append.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_appendbyref.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_assignbyref.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_assignglobal.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearallassign.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearallcache.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearassign.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearcache.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearcompiledtemplate.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_clearconfig.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_compileallconfig.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_compilealltemplates.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_configload.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_createdata.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getautoloadfilters.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getconfigvars.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getdebugtemplate.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getdefaultmodifiers.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getglobal.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getregisteredobject.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_getstreamvariable.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_gettags.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_gettemplatevars.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_loadfilter.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_loadplugin.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_mustcompile.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registercacheresource.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerclass.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerdefaultconfighandler.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerfilter.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerobject.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerplugin.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_registerresource.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_setautoloadfilters.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_setdebugtemplate.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_setdefaultmodifiers.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unloadfilter.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unregistercacheresource.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unregisterfilter.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unregisterobject.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unregisterplugin.php',
		'include/libs/smarty/sysplugins/smarty_internal_method_unregisterresource.php',
		'include/libs/smarty/sysplugins/smarty_internal_nocache_insert.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_code.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_dq.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_dqcontent.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_tag.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_template.php',
		'include/libs/smarty/sysplugins/smarty_internal_parsetree_text.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_eval.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_extends.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_file.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_php.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_registered.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_stream.php',
		'include/libs/smarty/sysplugins/smarty_internal_resource_string.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_cachemodify.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_capture.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_codeframe.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_filterhandler.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_foreach.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_getincludepath.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_inheritance.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_make_nocache.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_tplfunction.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_updatecache.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_updatescope.php',
		'include/libs/smarty/sysplugins/smarty_internal_runtime_writefile.php',
		'include/libs/smarty/sysplugins/smarty_internal_smartytemplatecompiler.php',
		'include/libs/smarty/sysplugins/smarty_internal_template.php',
		'include/libs/smarty/sysplugins/smarty_internal_templatebase.php',
		'include/libs/smarty/sysplugins/smarty_internal_templatecompilerbase.php',
		'include/libs/smarty/sysplugins/smarty_internal_templatelexer.php',
		'include/libs/smarty/sysplugins/smarty_internal_templateparser.php',
		'include/libs/smarty/sysplugins/smarty_internal_testinstall.php',
		'include/libs/smarty/sysplugins/smarty_internal_undefined.php',
		'include/libs/smarty/sysplugins/smarty_resource.php',
		'include/libs/smarty/sysplugins/smarty_resource_custom.php',
		'include/libs/smarty/sysplugins/smarty_resource_recompiled.php',
		'include/libs/smarty/sysplugins/smarty_resource_uncompiled.php',
		'include/libs/smarty/sysplugins/smarty_security.php',
		'include/libs/smarty/sysplugins/smarty_template_cached.php',
		'include/libs/smarty/sysplugins/smarty_template_compiled.php',
		'include/libs/smarty/sysplugins/smarty_template_config.php',
		'include/libs/smarty/sysplugins/smarty_template_resource_base.php',
		'include/libs/smarty/sysplugins/smarty_template_source.php',
		'include/libs/smarty/sysplugins/smarty_undefined_variable.php',
		'include/libs/smarty/sysplugins/smarty_variable.php',
		'include/libs/smarty/sysplugins/smartycompilerexception.php',
		'include/libs/smarty/sysplugins/smartyexception.php',
		'include/templates/base.tpl',
		'include/templates/includes/footer.tpl',
		'include/templates/includes/header.tpl',
		'include/templates/includes/meta.tpl',
		'include/templates/includes/scripts.tpl',
		'index.php',
		'js/global.min.js',
		'marketing.php',
		'robots.txt',
		'sitemap.xml'
		);

		foreach($files as $file){
			$this->assertEquals(1, file_exists($file), "File Missing: {$file}");
		}
	}
}
