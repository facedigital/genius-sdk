<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRegistrationResponse StructType
 * @subpackage Structs
 */
class CreateRegistrationResponse extends AbstractStructBase
{
    /**
     * The CreateRegistrationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreateRegistrationResult = null;
    /**
     * Constructor method for CreateRegistrationResponse
     * @uses CreateRegistrationResponse::setCreateRegistrationResult()
     * @param string $createRegistrationResult
     */
    public function __construct(?string $createRegistrationResult = null)
    {
        $this
            ->setCreateRegistrationResult($createRegistrationResult);
    }
    /**
     * Get CreateRegistrationResult value
     * @return string|null
     */
    public function getCreateRegistrationResult(): ?string
    {
        return $this->CreateRegistrationResult;
    }
    /**
     * Set CreateRegistrationResult value
     * @param string $createRegistrationResult
     * @return \StructType\CreateRegistrationResponse
     */
    public function setCreateRegistrationResult(?string $createRegistrationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($createRegistrationResult) && !is_string($createRegistrationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createRegistrationResult, true), gettype($createRegistrationResult)), __LINE__);
        }
        $this->CreateRegistrationResult = $createRegistrationResult;
        
        return $this;
    }
}
