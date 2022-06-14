<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociateLearnerToCoachResponse StructType
 * @subpackage Structs
 */
class AssociateLearnerToCoachResponse extends AbstractStructBase
{
    /**
     * The AssociateLearnerToCoachResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssociateLearnerToCoachResult = null;
    /**
     * Constructor method for AssociateLearnerToCoachResponse
     * @uses AssociateLearnerToCoachResponse::setAssociateLearnerToCoachResult()
     * @param string $associateLearnerToCoachResult
     */
    public function __construct(?string $associateLearnerToCoachResult = null)
    {
        $this
            ->setAssociateLearnerToCoachResult($associateLearnerToCoachResult);
    }
    /**
     * Get AssociateLearnerToCoachResult value
     * @return string|null
     */
    public function getAssociateLearnerToCoachResult(): ?string
    {
        return $this->AssociateLearnerToCoachResult;
    }
    /**
     * Set AssociateLearnerToCoachResult value
     * @param string $associateLearnerToCoachResult
     * @return \StructType\AssociateLearnerToCoachResponse
     */
    public function setAssociateLearnerToCoachResult(?string $associateLearnerToCoachResult = null): self
    {
        // validation for constraint: string
        if (!is_null($associateLearnerToCoachResult) && !is_string($associateLearnerToCoachResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($associateLearnerToCoachResult, true), gettype($associateLearnerToCoachResult)), __LINE__);
        }
        $this->AssociateLearnerToCoachResult = $associateLearnerToCoachResult;
        
        return $this;
    }
}
