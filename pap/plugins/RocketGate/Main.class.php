<?php
/**
 *   @copyright Copyright (c) 2007 Quality Unit s.r.o.
 *   @author Martin Pullmann
 *   @package PostAffiliatePro
 *   @since Version 1.0.0
 *
 *   Licensed under the Quality Unit, s.r.o. Standard End User License Agreement,
 *   Version 1.0 (the "License"); you may not use this file except in compliance
 *   with the License. You may obtain a copy of the License at
 *   http://www.postaffiliatepro.com/licenses/license
 *
 */

/**
 * @package PostAffiliatePro plugins
 */
class RocketGate_Main extends Gpf_Plugins_Handler {

    /**
     * @return RocketGate_Main
     */
    public static function getHandlerInstance() {
        return new RocketGate_Main();
    }

    public function initSettings($context) {
        $context->addDbSetting(RocketGate_Config::CUSTOM_SEPARATOR, '');
    }
}
?>
