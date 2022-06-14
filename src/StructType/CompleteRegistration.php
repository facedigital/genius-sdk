<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRegistration StructType
 * @subpackage Structs
 */
class CompleteRegistration extends AbstractStructBase
{
    /**
     * The SectionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $SectionID;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * Constructor method for CompleteRegistration
     * @uses CompleteRegistration::setSectionID()
     * @uses CompleteRegistration::setToken()
     * @uses CompleteRegistration::setUsername()
     * @param int $sectionID
     * @param string $token
     * @param string $username
     */
    public function __construct(int $sectionID, ?string $token = null, ?string $username = null)
    {
        $this
            ->setSectionID($sectionID)
            ->setToken($token)
            ->setUsername($username);
    }
    /**
     * Get SectionID value
     * @return int
     */
    public function getSectionID(): int
    {
        return $this->SectionID;
    }
    /**
     * Set SectionID value
     * @param int $sectionID
     * @return \StructType\CompleteRegistration
     */
    public function setSectionID(int $sectionID): self
    {
        // validation for constraint: int
        if (!is_null($sectionID) && !(is_int($sectionID) || ctype_digit($sectionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sectionID, true), gettype($sectionID)), __LINE__);
        }
        $this->SectionID = $sectionID;
        
        return $this;
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
     * @return \StructType\CompleteRegistration
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
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \StructType\CompleteRegistration
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        
        return $this;
    }
}
