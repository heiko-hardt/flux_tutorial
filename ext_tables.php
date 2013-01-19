<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Pi1',
    'Flux tutorial: example plugin'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Flux Tutorial');

/* added by tutorial (current style) ###################################################################################
##################################################################################################################### */

/*
 * important informations:
 *  extension key:   flux_tutorial
 *  plugin key:      pi1
 *
 *  become:
 *  pluginSignature: fluxtutorial_pi1
 */

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_addlist']['fluxtutorial_pi1'] = 'pi_flexform';

Tx_Flux_Core::registerConfigurationProvider('Tx_FluxTutorial_Provider_Configuration_PluginConfigurationProvider');
/* added end ######################################################################################################## */

?>