<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsers StructType
 * @subpackage Structs
 */
class GetUsers extends AbstractStructBase
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
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Role = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * Constructor method for GetUsers
     * @uses GetUsers::setToken()
     * @uses GetUsers::setAffiliationID()
     * @uses GetUsers::setRole()
     * @uses GetUsers::setEmail()
     * @uses GetUsers::setUsername()
     * @param string $token
     * @param string $affiliationID
     * @param string $role
     * @param string $email
     * @param string $username
     */
    public function __construct(?string $token = null, ?string $affiliationID = null, ?string $role = null, ?string $email = null, ?string $username = null)
    {
        $this
            ->setToken($token)
            ->setAffiliationID($affiliationID)
            ->setRole($role)
            ->setEmail($email)
            ->setUsername($username);
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
     * @return \StructType\GetUsers
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
     * @return \StructType\GetUsers
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
     * Get Role value
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @param string $role
     * @return \StructType\GetUsers
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->Role = $role;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\GetUsers
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
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
     * @return \StructType\GetUsers
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
