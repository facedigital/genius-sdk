<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Complete ServiceType
 * @subpackage Services
 */
class Complete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CompleteRegistration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CompleteRegistration $parameters
     * @return \StructType\CompleteRegistrationResponse|bool
     */
    public function CompleteRegistration(\StructType\CompleteRegistration $parameters)
    {
        try {
            $this->setResult($resultCompleteRegistration = $this->getSoapClient()->__soapCall('CompleteRegistration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCompleteRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CompleteRegistrationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
