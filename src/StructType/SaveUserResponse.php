<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserResponse StructType
 * @subpackage Structs
 */
class SaveUserResponse extends AbstractStructBase
{
    /**
     * The SaveUserResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaveUserResult = null;
    /**
     * Constructor method for SaveUserResponse
     * @uses SaveUserResponse::setSaveUserResult()
     * @param string $saveUserResult
     */
    public function __construct(?string $saveUserResult = null)
    {
        $this
            ->setSaveUserResult($saveUserResult);
    }
    /**
     * Get SaveUserResult value
     * @return string|null
     */
    public function getSaveUserResult(): ?string
    {
        return $this->SaveUserResult;
    }
    /**
     * Set SaveUserResult value
     * @param string $saveUserResult
     * @return \StructType\SaveUserResponse
     */
    public function setSaveUserResult(?string $saveUserResult = null): self
    {
        // validation for constraint: string
        if (!is_null($saveUserResult) && !is_string($saveUserResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saveUserResult, true), gettype($saveUserResult)), __LINE__);
        }
        $this->SaveUserResult = $saveUserResult;
        
        return $this;
    }
}
