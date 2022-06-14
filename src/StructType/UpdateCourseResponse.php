<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateCourseResponse StructType
 * @subpackage Structs
 */
class UpdateCourseResponse extends AbstractStructBase
{
    /**
     * The UpdateCourseResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MethodResult|null
     */
    protected ?\StructType\MethodResult $UpdateCourseResult = null;
    /**
     * Constructor method for UpdateCourseResponse
     * @uses UpdateCourseResponse::setUpdateCourseResult()
     * @param \StructType\MethodResult $updateCourseResult
     */
    public function __construct(?\StructType\MethodResult $updateCourseResult = null)
    {
        $this
            ->setUpdateCourseResult($updateCourseResult);
    }
    /**
     * Get UpdateCourseResult value
     * @return \StructType\MethodResult|null
     */
    public function getUpdateCourseResult(): ?\StructType\MethodResult
    {
        return $this->UpdateCourseResult;
    }
    /**
     * Set UpdateCourseResult value
     * @param \StructType\MethodResult $updateCourseResult
     * @return \StructType\UpdateCourseResponse
     */
    public function setUpdateCourseResult(?\StructType\MethodResult $updateCourseResult = null): self
    {
        $this->UpdateCourseResult = $updateCourseResult;
        
        return $this;
    }
}
