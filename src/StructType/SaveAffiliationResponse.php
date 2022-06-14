<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAffiliationResponse StructType
 * @subpackage Structs
 */
class SaveAffiliationResponse extends AbstractStructBase
{
    /**
     * The SaveAffiliationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaveAffiliationResult = null;
    /**
     * Constructor method for SaveAffiliationResponse
     * @uses SaveAffiliationResponse::setSaveAffiliationResult()
     * @param string $saveAffiliationResult
     */
    public function __construct(?string $saveAffiliationResult = null)
    {
        $this
            ->setSaveAffiliationResult($saveAffiliationResult);
    }
    /**
     * Get SaveAffiliationResult value
     * @return string|null
     */
    public function getSaveAffiliationResult(): ?string
    {
        return $this->SaveAffiliationResult;
    }
    /**
     * Set SaveAffiliationResult value
     * @param string $saveAffiliationResult
     * @return \StructType\SaveAffiliationResponse
     */
    public function setSaveAffiliationResult(?string $saveAffiliationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($saveAffiliationResult) && !is_string($saveAffiliationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saveAffiliationResult, true), gettype($saveAffiliationResult)), __LINE__);
        }
        $this->SaveAffiliationResult = $saveAffiliationResult;
        
        return $this;
    }
}
