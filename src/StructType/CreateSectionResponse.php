<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSectionResponse StructType
 * @subpackage Structs
 */
class CreateSectionResponse extends AbstractStructBase
{
    /**
     * The CreateSectionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CreateMethodResult|null
     */
    protected ?\StructType\CreateMethodResult $CreateSectionResult = null;
    /**
     * Constructor method for CreateSectionResponse
     * @uses CreateSectionResponse::setCreateSectionResult()
     * @param \StructType\CreateMethodResult $createSectionResult
     */
    public function __construct(?\StructType\CreateMethodResult $createSectionResult = null)
    {
        $this
            ->setCreateSectionResult($createSectionResult);
    }
    /**
     * Get CreateSectionResult value
     * @return \StructType\CreateMethodResult|null
     */
    public function getCreateSectionResult(): ?\StructType\CreateMethodResult
    {
        return $this->CreateSectionResult;
    }
    /**
     * Set CreateSectionResult value
     * @param \StructType\CreateMethodResult $createSectionResult
     * @return \StructType\CreateSectionResponse
     */
    public function setCreateSectionResult(?\StructType\CreateMethodResult $createSectionResult = null): self
    {
        $this->CreateSectionResult = $createSectionResult;
        
        return $this;
    }
}
