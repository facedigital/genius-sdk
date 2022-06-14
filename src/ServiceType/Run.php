<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Run ServiceType
 * @subpackage Services
 */
class Run extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RunQuery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RunQuery $parameters
     * @return \StructType\RunQueryResponse|bool
     */
    public function RunQuery(\StructType\RunQuery $parameters)
    {
        try {
            $this->setResult($resultRunQuery = $this->getSoapClient()->__soapCall('RunQuery', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRunQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RunQueryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
