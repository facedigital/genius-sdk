<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCourseResponse StructType
 * @subpackage Structs
 */
class CreateCourseResponse extends AbstractStructBase
{
    /**
     * The CreateCourseResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CreateMethodResult|null
     */
    protected ?\StructType\CreateMethodResult $CreateCourseResult = null;
    /**
     * Constructor method for CreateCourseResponse
     * @uses CreateCourseResponse::setCreateCourseResult()
     * @param \StructType\CreateMethodResult $createCourseResult
     */
    public function __construct(?\StructType\CreateMethodResult $createCourseResult = null)
    {
        $this
            ->setCreateCourseResult($createCourseResult);
    }
    /**
     * Get CreateCourseResult value
     * @return \StructType\CreateMethodResult|null
     */
    public function getCreateCourseResult(): ?\StructType\CreateMethodResult
    {
        return $this->CreateCourseResult;
    }
    /**
     * Set CreateCourseResult value
     * @param \StructType\CreateMethodResult $createCourseResult
     * @return \StructType\CreateCourseResponse
     */
    public function setCreateCourseResult(?\StructType\CreateMethodResult $createCourseResult = null): self
    {
        $this->CreateCourseResult = $createCourseResult;
        
        return $this;
    }
}
