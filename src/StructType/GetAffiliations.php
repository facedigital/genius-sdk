<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAffiliations StructType
 * @subpackage Structs
 */
class GetAffiliations extends AbstractStructBase
{
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * Constructor method for GetAffiliations
     * @uses GetAffiliations::setToken()
     * @param string $token
     */
    public function __construct(?string $token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \StructType\GetAffiliations
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;
        
        return $this;
    }
}
