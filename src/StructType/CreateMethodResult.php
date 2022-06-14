<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMethodResult StructType
 * @subpackage Structs
 */
class CreateMethodResult extends AbstractStructBase
{
    /**
     * The NewID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $NewID;
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
     * Constructor method for CreateMethodResult
     * @uses CreateMethodResult::setNewID()
     * @uses CreateMethodResult::setIsSuccess()
     * @uses CreateMethodResult::setErrorMessage()
     * @param int $newID
     * @param bool $isSuccess
     * @param string $errorMessage
     */
    public function __construct(int $newID, bool $isSuccess, ?string $errorMessage = null)
    {
        $this
            ->setNewID($newID)
            ->setIsSuccess($isSuccess)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get NewID value
     * @return int
     */
    public function getNewID(): int
    {
        return $this->NewID;
    }
    /**
     * Set NewID value
     * @param int $newID
     * @return \StructType\CreateMethodResult
     */
    public function setNewID(int $newID): self
    {
        // validation for constraint: int
        if (!is_null($newID) && !(is_int($newID) || ctype_digit($newID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newID, true), gettype($newID)), __LINE__);
        }
        $this->NewID = $newID;
        
        return $this;
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
     * @return \StructType\CreateMethodResult
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
     * @return \StructType\CreateMethodResult
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
