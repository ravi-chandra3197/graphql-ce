<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Webapi\Model;

/**
 * This class gives access to consolidated web API configuration from <Module_Name>/etc/webapi.xml files.
 *
 * @api
 */
interface ConfigInterface
{
    /**
     * Return services loaded from cache if enabled or from files merged previously
     *
     * @return array
     */
    public function getServices();
}
