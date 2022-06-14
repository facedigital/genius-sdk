<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSectionResponse StructType
 * @subpackage Structs
 */
class UpdateSectionResponse extends AbstractStructBase
{
    /**
     * The UpdateSectionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MethodResult|null
     */
    protected ?\StructType\MethodResult $UpdateSectionResult = null;
    /**
     * Constructor method for UpdateSectionResponse
     * @uses UpdateSectionResponse::setUpdateSectionResult()
     * @param \StructType\MethodResult $updateSectionResult
     */
    public function __construct(?\StructType\MethodResult $updateSectionResult = null)
    {
        $this
            ->setUpdateSectionResult($updateSectionResult);
    }
    /**
     * Get UpdateSectionResult value
     * @return \StructType\MethodResult|null
     */
    public function getUpdateSectionResult(): ?\StructType\MethodResult
    {
        return $this->UpdateSectionResult;
    }
    /**
     * Set UpdateSectionResult value
     * @param \StructType\MethodResult $updateSectionResult
     * @return \StructType\UpdateSectionResponse
     */
    public function setUpdateSectionResult(?\StructType\MethodResult $updateSectionResult = null): self
    {
        $this->UpdateSectionResult = $updateSectionResult;
        
        return $this;
    }
}
