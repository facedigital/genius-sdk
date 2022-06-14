<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLearnerResponse StructType
 * @subpackage Structs
 */
class CreateLearnerResponse extends AbstractStructBase
{
    /**
     * The CreateLearnerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreateLearnerResult = null;
    /**
     * Constructor method for CreateLearnerResponse
     * @uses CreateLearnerResponse::setCreateLearnerResult()
     * @param string $createLearnerResult
     */
    public function __construct(?string $createLearnerResult = null)
    {
        $this
            ->setCreateLearnerResult($createLearnerResult);
    }
    /**
     * Get CreateLearnerResult value
     * @return string|null
     */
    public function getCreateLearnerResult(): ?string
    {
        return $this->CreateLearnerResult;
    }
    /**
     * Set CreateLearnerResult value
     * @param string $createLearnerResult
     * @return \StructType\CreateLearnerResponse
     */
    public function setCreateLearnerResult(?string $createLearnerResult = null): self
    {
        // validation for constraint: string
        if (!is_null($createLearnerResult) && !is_string($createLearnerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createLearnerResult, true), gettype($createLearnerResult)), __LINE__);
        }
        $this->CreateLearnerResult = $createLearnerResult;
        
        return $this;
    }
}
