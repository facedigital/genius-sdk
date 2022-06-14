<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetAffiliations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAffiliations $parameters
     * @return \StructType\GetAffiliationsResponse|bool
     */
    public function GetAffiliations(\StructType\GetAffiliations $parameters)
    {
        try {
            $this->setResult($resultGetAffiliations = $this->getSoapClient()->__soapCall('GetAffiliations', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAffiliations;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUsers $parameters
     * @return \StructType\GetUsersResponse|bool
     */
    public function GetUsers(\StructType\GetUsers $parameters)
    {
        try {
            $this->setResult($resultGetUsers = $this->getSoapClient()->__soapCall('GetUsers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUsers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStudentFinancialStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStudentFinancialStatus $parameters
     * @return \StructType\GetStudentFinancialStatusResponse|bool
     */
    public function GetStudentFinancialStatus(\StructType\GetStudentFinancialStatus $parameters)
    {
        try {
            $this->setResult($resultGetStudentFinancialStatus = $this->getSoapClient()->__soapCall('GetStudentFinancialStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStudentFinancialStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEnvironmentInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEnvironmentInfo $parameters
     * @return \StructType\GetEnvironmentInfoResponse|bool
     */
    public function GetEnvironmentInfo(\StructType\GetEnvironmentInfo $parameters)
    {
        try {
            $this->setResult($resultGetEnvironmentInfo = $this->getSoapClient()->__soapCall('GetEnvironmentInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEnvironmentInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAffiliationsResponse|\StructType\GetEnvironmentInfoResponse|\StructType\GetStudentFinancialStatusResponse|\StructType\GetUsersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
