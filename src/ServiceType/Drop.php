<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Drop ServiceType
 * @subpackage Services
 */
class Drop extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DropRegistration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DropRegistration $parameters
     * @return \StructType\DropRegistrationResponse|bool
     */
    public function DropRegistration(\StructType\DropRegistration $parameters)
    {
        try {
            $this->setResult($resultDropRegistration = $this->getSoapClient()->__soapCall('DropRegistration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDropRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DropRegistrationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
