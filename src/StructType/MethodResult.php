<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MethodResult StructType
 * @subpackage Structs
 */
class MethodResult extends AbstractStructBase
{
    /**
     * The IsSuccess
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsSuccess;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * Constructor method for MethodResult
     * @uses MethodResult::setIsSuccess()
     * @uses MethodResult::setErrorMessage()
     * @param bool $isSuccess
     * @param string $errorMessage
     */
    public function __construct(bool $isSuccess, ?string $errorMessage = null)
    {
        $this
            ->setIsSuccess($isSuccess)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get IsSuccess value
     * @return bool
     */
    public function getIsSuccess(): bool
    {
        return $this->IsSuccess;
    }
    /**
     * Set IsSuccess value
     * @param bool $isSuccess
     * @return \StructType\MethodResult
     */
    public function setIsSuccess(bool $isSuccess): self
    {
        // validation for constraint: boolean
        if (!is_null($isSuccess) && !is_bool($isSuccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSuccess, true), gettype($isSuccess)), __LINE__);
        }
        $this->IsSuccess = $isSuccess;
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \StructType\MethodResult
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
}
