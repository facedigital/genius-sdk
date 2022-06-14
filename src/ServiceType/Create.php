<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateCourse
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCourse $parameters
     * @return \StructType\CreateCourseResponse|bool
     */
    public function CreateCourse(\StructType\CreateCourse $parameters)
    {
        try {
            $this->setResult($resultCreateCourse = $this->getSoapClient()->__soapCall('CreateCourse', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateCourse;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateSection
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateSection $parameters
     * @return \StructType\CreateSectionResponse|bool
     */
    public function CreateSection(\StructType\CreateSection $parameters)
    {
        try {
            $this->setResult($resultCreateSection = $this->getSoapClient()->__soapCall('CreateSection', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateSection;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateLearner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateLearner $parameters
     * @return \StructType\CreateLearnerResponse|bool
     */
    public function CreateLearner(\StructType\CreateLearner $parameters)
    {
        try {
            $this->setResult($resultCreateLearner = $this->getSoapClient()->__soapCall('CreateLearner', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateLearner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateRegistration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateRegistration $parameters
     * @return \StructType\CreateRegistrationResponse|bool
     */
    public function CreateRegistration(\StructType\CreateRegistration $parameters)
    {
        try {
            $this->setResult($resultCreateRegistration = $this->getSoapClient()->__soapCall('CreateRegistration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CreateCourseResponse|\StructType\CreateLearnerResponse|\StructType\CreateRegistrationResponse|\StructType\CreateSectionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
