<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRegistrationResponse StructType
 * @subpackage Structs
 */
class CompleteRegistrationResponse extends AbstractStructBase
{
    /**
     * The CompleteRegistrationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompleteRegistrationResult = null;
    /**
     * Constructor method for CompleteRegistrationResponse
     * @uses CompleteRegistrationResponse::setCompleteRegistrationResult()
     * @param string $completeRegistrationResult
     */
    public function __construct(?string $completeRegistrationResult = null)
    {
        $this
            ->setCompleteRegistrationResult($completeRegistrationResult);
    }
    /**
     * Get CompleteRegistrationResult value
     * @return string|null
     */
    public function getCompleteRegistrationResult(): ?string
    {
        return $this->CompleteRegistrationResult;
    }
    /**
     * Set CompleteRegistrationResult value
     * @param string $completeRegistrationResult
     * @return \StructType\CompleteRegistrationResponse
     */
    public function setCompleteRegistrationResult(?string $completeRegistrationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($completeRegistrationResult) && !is_string($completeRegistrationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completeRegistrationResult, true), gettype($completeRegistrationResult)), __LINE__);
        }
        $this->CompleteRegistrationResult = $completeRegistrationResult;
        
        return $this;
    }
}
