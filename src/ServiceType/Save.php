<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SaveAffiliation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAffiliation $parameters
     * @return \StructType\SaveAffiliationResponse|bool
     */
    public function SaveAffiliation(\StructType\SaveAffiliation $parameters)
    {
        try {
            $this->setResult($resultSaveAffiliation = $this->getSoapClient()->__soapCall('SaveAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveUser $parameters
     * @return \StructType\SaveUserResponse|bool
     */
    public function SaveUser(\StructType\SaveUser $parameters)
    {
        try {
            $this->setResult($resultSaveUser = $this->getSoapClient()->__soapCall('SaveUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SaveAffiliationResponse|\StructType\SaveUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
