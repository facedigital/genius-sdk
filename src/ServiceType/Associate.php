<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Associate ServiceType
 * @subpackage Services
 */
class Associate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AssociateLearnerToCoach
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AssociateLearnerToCoach $parameters
     * @return \StructType\AssociateLearnerToCoachResponse|bool
     */
    public function AssociateLearnerToCoach(\StructType\AssociateLearnerToCoach $parameters)
    {
        try {
            $this->setResult($resultAssociateLearnerToCoach = $this->getSoapClient()->__soapCall('AssociateLearnerToCoach', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAssociateLearnerToCoach;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AssociateLearnerToCoachResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
