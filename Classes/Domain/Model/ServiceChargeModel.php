<?php
namespace ServiceChargeExtension\Servicechargeextension\Domain\Model;

/***
 *
 * This file is part of the "ServiceChargeExtension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Mayank, Aishwarya <mayank.khurana@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * ServiceChargeModel
 */
class ServiceChargeModel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * servicetype
     *
     * @var string
     */
    protected $servicetype = '';

    /**
     * chargesinINR
     *
     * @var int
     */
    protected $chargesinINR = 0;

    /**
     * mindaystodeliver
     *
     * @var int
     */
    protected $mindaystodeliver = 0;

    /**
     * rangeofareainkm
     *
     * @var int
     */
    protected $rangeofareainkm = 0;

    /**
     * Returns the servicetype
     *
     * @return string $servicetype
     */
    public function getServicetype()
    {
        return $this->servicetype;
    }

    /**
     * Sets the servicetype
     *
     * @param string $servicetype
     * @return void
     */
    public function setServicetype($servicetype)
    {
        $this->servicetype = $servicetype;
    }

    /**
     * Returns the chargesinINR
     *
     * @return int $chargesinINR
     */
    public function getChargesinINR()
    {
        return $this->chargesinINR;
    }

    /**
     * Sets the chargesinINR
     *
     * @param int $chargesinINR
     * @return void
     */
    public function setChargesinINR($chargesinINR)
    {
        $this->chargesinINR = $chargesinINR;
    }

    /**
     * Returns the mindaystodeliver
     *
     * @return int $mindaystodeliver
     */
    public function getMindaystodeliver()
    {
        return $this->mindaystodeliver;
    }

    /**
     * Sets the mindaystodeliver
     *
     * @param int $mindaystodeliver
     * @return void
     */
    public function setMindaystodeliver($mindaystodeliver)
    {
        $this->mindaystodeliver = $mindaystodeliver;
    }

    /**
     * Returns the rangeofareainkm
     *
     * @return int $rangeofareainkm
     */
    public function getRangeofareainkm()
    {
        return $this->rangeofareainkm;
    }

    /**
     * Sets the rangeofareainkm
     *
     * @param int $rangeofareainkm
     * @return void
     */
    public function setRangeofareainkm($rangeofareainkm)
    {
        $this->rangeofareainkm = $rangeofareainkm;
    }
}
