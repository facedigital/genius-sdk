<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfer ServiceType
 * @subpackage Services
 */
class Transfer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TransferRegistration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransferRegistration $parameters
     * @return \StructType\TransferRegistrationResponse|bool
     */
    public function TransferRegistration(\StructType\TransferRegistration $parameters)
    {
        try {
            $this->setResult($resultTransferRegistration = $this->getSoapClient()->__soapCall('TransferRegistration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TransferRegistrationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
