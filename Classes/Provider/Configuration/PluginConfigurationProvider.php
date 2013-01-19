<?php

/**
 * @package flux_tutorial
 * @subpackage Provider/Configuration
 */
class Tx_FluxTutorial_Provider_Configuration_PluginConfigurationProvider
    extends Tx_Flux_Provider_AbstractPluginConfigurationProvider
    implements Tx_Flux_Provider_PluginConfigurationProviderInterface {

    /**
     * NOTE: Still must be an empty string due to bug in TYPO3 core's hook call
     * @var string
     */
    protected $fieldName = 'pi_flexform';

    /**
     * @var string
     */
    protected $extensionKey = 'flux_tutorial';

    /**
     * @var string
     */
    protected $listType = 'fluxtutorial_pi1';

    /**
     * @var string
     */
    protected $configurationSectionName = 'Configuration';

    /**
     * @var array
     */
    protected $templateVariables = array();

    /**
     * @var array
     */
    protected $templatePaths = array(
        'layoutRootPath'   => 'EXT:flux_tutorial/Resources/Private/Layouts/',
        'templateRootPath' => 'EXT:flux_tutorial/Resources/Private/Templates/',
        'partialRootPath'  => 'EXT:flux_tutorial/Resources/Private/Partials/',
    );

    /**
     * @var string
     */
    protected $templatePathAndFilename = 'EXT:flux_tutorial/Configuration/FlexForms/DynamicFlexForm.xml';

}

?>