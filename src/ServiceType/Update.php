<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateCourse
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateCourse $parameters
     * @return \StructType\UpdateCourseResponse|bool
     */
    public function UpdateCourse(\StructType\UpdateCourse $parameters)
    {
        try {
            $this->setResult($resultUpdateCourse = $this->getSoapClient()->__soapCall('UpdateCourse', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateCourse;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateSection
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateSection $parameters
     * @return \StructType\UpdateSectionResponse|bool
     */
    public function UpdateSection(\StructType\UpdateSection $parameters)
    {
        try {
            $this->setResult($resultUpdateSection = $this->getSoapClient()->__soapCall('UpdateSection', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateSection;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UpdateCourseResponse|\StructType\UpdateSectionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
