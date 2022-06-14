<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStudentFinancialStatus StructType
 * @subpackage Structs
 */
class GetStudentFinancialStatus extends AbstractStructBase
{
    /**
     * The requestData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StudentFinancialStatusRequest|null
     */
    protected ?\StructType\StudentFinancialStatusRequest $requestData = null;
    /**
     * Constructor method for GetStudentFinancialStatus
     * @uses GetStudentFinancialStatus::setRequestData()
     * @param \StructType\StudentFinancialStatusRequest $requestData
     */
    public function __construct(?\StructType\StudentFinancialStatusRequest $requestData = null)
    {
        $this
            ->setRequestData($requestData);
    }
    /**
     * Get requestData value
     * @return \StructType\StudentFinancialStatusRequest|null
     */
    public function getRequestData(): ?\StructType\StudentFinancialStatusRequest
    {
        return $this->requestData;
    }
    /**
     * Set requestData value
     * @param \StructType\StudentFinancialStatusRequest $requestData
     * @return \StructType\GetStudentFinancialStatus
     */
    public function setRequestData(?\StructType\StudentFinancialStatusRequest $requestData = null): self
    {
        $this->requestData = $requestData;
        
        return $this;
    }
}
