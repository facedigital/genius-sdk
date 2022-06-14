<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveLearnerFromCoachResponse StructType
 * @subpackage Structs
 */
class RemoveLearnerFromCoachResponse extends AbstractStructBase
{
    /**
     * The RemoveLearnerFromCoachResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RemoveLearnerFromCoachResult = null;
    /**
     * Constructor method for RemoveLearnerFromCoachResponse
     * @uses RemoveLearnerFromCoachResponse::setRemoveLearnerFromCoachResult()
     * @param string $removeLearnerFromCoachResult
     */
    public function __construct(?string $removeLearnerFromCoachResult = null)
    {
        $this
            ->setRemoveLearnerFromCoachResult($removeLearnerFromCoachResult);
    }
    /**
     * Get RemoveLearnerFromCoachResult value
     * @return string|null
     */
    public function getRemoveLearnerFromCoachResult(): ?string
    {
        return $this->RemoveLearnerFromCoachResult;
    }
    /**
     * Set RemoveLearnerFromCoachResult value
     * @param string $removeLearnerFromCoachResult
     * @return \StructType\RemoveLearnerFromCoachResponse
     */
    public function setRemoveLearnerFromCoachResult(?string $removeLearnerFromCoachResult = null): self
    {
        // validation for constraint: string
        if (!is_null($removeLearnerFromCoachResult) && !is_string($removeLearnerFromCoachResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($removeLearnerFromCoachResult, true), gettype($removeLearnerFromCoachResult)), __LINE__);
        }
        $this->RemoveLearnerFromCoachResult = $removeLearnerFromCoachResult;
        
        return $this;
    }
}
