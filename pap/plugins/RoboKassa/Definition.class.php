<?php

/**
 *   @copyright Copyright (c) 2007 Quality Unit s.r.o.
 *   @author Maros Galik
 *   @package PostAffiliatePro
 *   @since Version 1.0.0
 *
 *   Licensed under the Quality Unit, s.r.o. Standard End User License Agreement,
 *   Version 1.0 (the "License"); you may not use this file except in compliance
 *   with the License. You may obtain a copy of the License at
 *   http://www.postaffiliatepro.com/licenses/license
 *
 */

class RoboKassa_Definition extends Gpf_Plugins_Definition  {
    public function __construct() {
        $this->codeName = 'RoboKassa';
        $this->name = $this->_('RoboKassa integration plugin');
        $this->description = $this->_('This plugin handles RoboKassa notifications (integration of Post Affiliate with RoboKassa).');
        $this->version = '1.0.0';
        $this->configurationClassName = 'RoboKassa_Config';
        $this->addRequirement('PapCore', '4.0.4.6');
        $this->addImplementation('Core.defineSettings', 'RoboKassa_Main', 'initSettings');        
    }
}
?>
