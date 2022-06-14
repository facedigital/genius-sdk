<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnvironmentInfo StructType
 * @subpackage Structs
 */
class GetEnvironmentInfo extends AbstractStructBase
{
    /**
     * The secret
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $secret = null;
    /**
     * Constructor method for GetEnvironmentInfo
     * @uses GetEnvironmentInfo::setSecret()
     * @param string $secret
     */
    public function __construct(?string $secret = null)
    {
        $this
            ->setSecret($secret);
    }
    /**
     * Get secret value
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }
    /**
     * Set secret value
     * @param string $secret
     * @return \StructType\GetEnvironmentInfo
     */
    public function setSecret(?string $secret = null): self
    {
        // validation for constraint: string
        if (!is_null($secret) && !is_string($secret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secret, true), gettype($secret)), __LINE__);
        }
        $this->secret = $secret;
        
        return $this;
    }
}
