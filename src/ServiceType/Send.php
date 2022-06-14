<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SendTestEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTestEmail $parameters
     * @return \StructType\SendTestEmailResponse|bool
     */
    public function SendTestEmail(\StructType\SendTestEmail $parameters)
    {
        try {
            $this->setResult($resultSendTestEmail = $this->getSoapClient()->__soapCall('SendTestEmail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendTestEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SendTestEmailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
