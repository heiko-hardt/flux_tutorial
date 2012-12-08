<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Pi1',
    'Flux tutorial: example plugin'
);

/* added by tutorial ###################################################################################################
##################################################################################################################### */

/*
 * important informations:
 *  extension key:   flux_tutorial
 *  plugin key:      pi1
 *
 *  become:
 *  pluginSignature: fluxtutorial_pi1
 */

$TCA['tt_content']['types']['list']['subtypes_addlist']['fluxtutorial_pi1'] = 'pi_flexform';

// public static function registerFluidFlexFormPlugin($extensionKey, $pluginSignature, $templateFilename, $variables=array(), $section=NULL, $paths=NULL)
Tx_Flux_Core::registerFluidFlexFormPlugin(
    $_EXTKEY,
    'fluxtutorial_pi1',
    'EXT:flux_tutorial/Configuration/FlexForms/DynamicFlexForm.xml',
    array(
        'defaultValue1' => 'someDefaultValue'
    ),
    'Configuration',
    array()

);

/* added end ######################################################################################################## */

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Flux Tutorial');

?>