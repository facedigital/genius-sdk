<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStudentFinancialStatusResponse StructType
 * @subpackage Structs
 */
class GetStudentFinancialStatusResponse extends AbstractStructBase
{
    /**
     * The GetStudentFinancialStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StudentFinancialStatusResult|null
     */
    protected ?\StructType\StudentFinancialStatusResult $GetStudentFinancialStatusResult = null;
    /**
     * Constructor method for GetStudentFinancialStatusResponse
     * @uses GetStudentFinancialStatusResponse::setGetStudentFinancialStatusResult()
     * @param \StructType\StudentFinancialStatusResult $getStudentFinancialStatusResult
     */
    public function __construct(?\StructType\StudentFinancialStatusResult $getStudentFinancialStatusResult = null)
    {
        $this
            ->setGetStudentFinancialStatusResult($getStudentFinancialStatusResult);
    }
    /**
     * Get GetStudentFinancialStatusResult value
     * @return \StructType\StudentFinancialStatusResult|null
     */
    public function getGetStudentFinancialStatusResult(): ?\StructType\StudentFinancialStatusResult
    {
        return $this->GetStudentFinancialStatusResult;
    }
    /**
     * Set GetStudentFinancialStatusResult value
     * @param \StructType\StudentFinancialStatusResult $getStudentFinancialStatusResult
     * @return \StructType\GetStudentFinancialStatusResponse
     */
    public function setGetStudentFinancialStatusResult(?\StructType\StudentFinancialStatusResult $getStudentFinancialStatusResult = null): self
    {
        $this->GetStudentFinancialStatusResult = $getStudentFinancialStatusResult;
        
        return $this;
    }
}
