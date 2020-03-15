<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Contracts;

use Slince\Shopify\Model\Province;

interface ProvinceManagerInterface extends ManagerInterface
{
    /**
     * Finds provinces.
     *
     * @param int $countryId
     *
     * @return Province[]
     */
    public function findAll($countryId, array $query = []);

    /**
     * Finds a province.
     *
     * @param int $countryId
     * @param int $id
     *
     * @return Province
     */
    public function find($countryId, $id);

    /**
     * Gets the count.
     *
     * @param int $countryId
     *
     * @return int
     */
    public function count($countryId, array $query = []);

    /**
     * Updates the province.
     *
     * @param int $countryId
     * @param int $id
     *
     * @return Province
     */
    public function update($countryId, $id, array $data);
}