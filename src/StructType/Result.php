<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Result StructType
 * @subpackage Structs
 */
class Result extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Success;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * Constructor method for Result
     * @uses Result::setSuccess()
     * @uses Result::setMessage()
     * @param bool $success
     * @param string $message
     */
    public function __construct(bool $success, ?string $message = null)
    {
        $this
            ->setSuccess($success)
            ->setMessage($message);
    }
    /**
     * Get Success value
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \StructType\Result
     */
    public function setSuccess(bool $success): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\Result
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
}
