<?php

namespace ArvPayoneApi\Mocks\Request;

/**
 * Interface RequestContract
 */
interface RequestContract
{
    /**
     * @return array
     */
    public function getPersonalData();

    /**
     * @return array
     */
    public function getPersonalDataStatic();

    /**
     * @return array
     */
    public function getRequestData();

    /**
     * @return array
     */
    public function getConfig();

    /**
     * @return array
     */
    public function getOrder();
}
