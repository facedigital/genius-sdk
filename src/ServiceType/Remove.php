<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RemoveLearnerFromCoach
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RemoveLearnerFromCoach $parameters
     * @return \StructType\RemoveLearnerFromCoachResponse|bool
     */
    public function RemoveLearnerFromCoach(\StructType\RemoveLearnerFromCoach $parameters)
    {
        try {
            $this->setResult($resultRemoveLearnerFromCoach = $this->getSoapClient()->__soapCall('RemoveLearnerFromCoach', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveLearnerFromCoach;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RemoveLearnerFromCoachResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
