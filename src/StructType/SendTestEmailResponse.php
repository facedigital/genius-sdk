<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTestEmailResponse StructType
 * @subpackage Structs
 */
class SendTestEmailResponse extends AbstractStructBase
{
    /**
     * The SendTestEmailResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SendTestEmailResult = null;
    /**
     * Constructor method for SendTestEmailResponse
     * @uses SendTestEmailResponse::setSendTestEmailResult()
     * @param string $sendTestEmailResult
     */
    public function __construct(?string $sendTestEmailResult = null)
    {
        $this
            ->setSendTestEmailResult($sendTestEmailResult);
    }
    /**
     * Get SendTestEmailResult value
     * @return string|null
     */
    public function getSendTestEmailResult(): ?string
    {
        return $this->SendTestEmailResult;
    }
    /**
     * Set SendTestEmailResult value
     * @param string $sendTestEmailResult
     * @return \StructType\SendTestEmailResponse
     */
    public function setSendTestEmailResult(?string $sendTestEmailResult = null): self
    {
        // validation for constraint: string
        if (!is_null($sendTestEmailResult) && !is_string($sendTestEmailResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendTestEmailResult, true), gettype($sendTestEmailResult)), __LINE__);
        }
        $this->SendTestEmailResult = $sendTestEmailResult;
        
        return $this;
    }
}
