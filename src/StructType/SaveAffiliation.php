<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAffiliation StructType
 * @subpackage Structs
 */
class SaveAffiliation extends AbstractStructBase
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
     * The AffiliationID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AffiliationID = null;
    /**
     * The AffiliationName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AffiliationName = null;
    /**
     * The BlackboardRole
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BlackboardRole = null;
    /**
     * Constructor method for SaveAffiliation
     * @uses SaveAffiliation::setToken()
     * @uses SaveAffiliation::setAffiliationID()
     * @uses SaveAffiliation::setAffiliationName()
     * @uses SaveAffiliation::setBlackboardRole()
     * @param string $token
     * @param string $affiliationID
     * @param string $affiliationName
     * @param string $blackboardRole
     */
    public function __construct(?string $token = null, ?string $affiliationID = null, ?string $affiliationName = null, ?string $blackboardRole = null)
    {
        $this
            ->setToken($token)
            ->setAffiliationID($affiliationID)
            ->setAffiliationName($affiliationName)
            ->setBlackboardRole($blackboardRole);
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
     * @return \StructType\SaveAffiliation
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
     * Get AffiliationID value
     * @return string|null
     */
    public function getAffiliationID(): ?string
    {
        return $this->AffiliationID;
    }
    /**
     * Set AffiliationID value
     * @param string $affiliationID
     * @return \StructType\SaveAffiliation
     */
    public function setAffiliationID(?string $affiliationID = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationID) && !is_string($affiliationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationID, true), gettype($affiliationID)), __LINE__);
        }
        $this->AffiliationID = $affiliationID;
        
        return $this;
    }
    /**
     * Get AffiliationName value
     * @return string|null
     */
    public function getAffiliationName(): ?string
    {
        return $this->AffiliationName;
    }
    /**
     * Set AffiliationName value
     * @param string $affiliationName
     * @return \StructType\SaveAffiliation
     */
    public function setAffiliationName(?string $affiliationName = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationName) && !is_string($affiliationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationName, true), gettype($affiliationName)), __LINE__);
        }
        $this->AffiliationName = $affiliationName;
        
        return $this;
    }
    /**
     * Get BlackboardRole value
     * @return string|null
     */
    public function getBlackboardRole(): ?string
    {
        return $this->BlackboardRole;
    }
    /**
     * Set BlackboardRole value
     * @param string $blackboardRole
     * @return \StructType\SaveAffiliation
     */
    public function setBlackboardRole(?string $blackboardRole = null): self
    {
        // validation for constraint: string
        if (!is_null($blackboardRole) && !is_string($blackboardRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blackboardRole, true), gettype($blackboardRole)), __LINE__);
        }
        $this->BlackboardRole = $blackboardRole;
        
        return $this;
    }
}
