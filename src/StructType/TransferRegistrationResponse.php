<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferRegistrationResponse StructType
 * @subpackage Structs
 */
class TransferRegistrationResponse extends AbstractStructBase
{
    /**
     * The TransferRegistrationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransferRegistrationResult = null;
    /**
     * Constructor method for TransferRegistrationResponse
     * @uses TransferRegistrationResponse::setTransferRegistrationResult()
     * @param string $transferRegistrationResult
     */
    public function __construct(?string $transferRegistrationResult = null)
    {
        $this
            ->setTransferRegistrationResult($transferRegistrationResult);
    }
    /**
     * Get TransferRegistrationResult value
     * @return string|null
     */
    public function getTransferRegistrationResult(): ?string
    {
        return $this->TransferRegistrationResult;
    }
    /**
     * Set TransferRegistrationResult value
     * @param string $transferRegistrationResult
     * @return \StructType\TransferRegistrationResponse
     */
    public function setTransferRegistrationResult(?string $transferRegistrationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($transferRegistrationResult) && !is_string($transferRegistrationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferRegistrationResult, true), gettype($transferRegistrationResult)), __LINE__);
        }
        $this->TransferRegistrationResult = $transferRegistrationResult;
        
        return $this;
    }
}
