<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DropRegistrationResponse StructType
 * @subpackage Structs
 */
class DropRegistrationResponse extends AbstractStructBase
{
    /**
     * The DropRegistrationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DropRegistrationResult = null;
    /**
     * Constructor method for DropRegistrationResponse
     * @uses DropRegistrationResponse::setDropRegistrationResult()
     * @param string $dropRegistrationResult
     */
    public function __construct(?string $dropRegistrationResult = null)
    {
        $this
            ->setDropRegistrationResult($dropRegistrationResult);
    }
    /**
     * Get DropRegistrationResult value
     * @return string|null
     */
    public function getDropRegistrationResult(): ?string
    {
        return $this->DropRegistrationResult;
    }
    /**
     * Set DropRegistrationResult value
     * @param string $dropRegistrationResult
     * @return \StructType\DropRegistrationResponse
     */
    public function setDropRegistrationResult(?string $dropRegistrationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($dropRegistrationResult) && !is_string($dropRegistrationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dropRegistrationResult, true), gettype($dropRegistrationResult)), __LINE__);
        }
        $this->DropRegistrationResult = $dropRegistrationResult;
        
        return $this;
    }
}
