<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUser StructType
 * @subpackage Structs
 */
class SaveUser extends AbstractStructBase
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
     * The FirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The AffiliationID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AffiliationID = null;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Role = null;
    /**
     * The LearningPathName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LearningPathName = null;
    /**
     * Constructor method for SaveUser
     * @uses SaveUser::setToken()
     * @uses SaveUser::setFirstName()
     * @uses SaveUser::setLastName()
     * @uses SaveUser::setEmail()
     * @uses SaveUser::setAffiliationID()
     * @uses SaveUser::setUsername()
     * @uses SaveUser::setRole()
     * @uses SaveUser::setLearningPathName()
     * @param string $token
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $affiliationID
     * @param string $username
     * @param string $role
     * @param string $learningPathName
     */
    public function __construct(?string $token = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $affiliationID = null, ?string $username = null, ?string $role = null, ?string $learningPathName = null)
    {
        $this
            ->setToken($token)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setAffiliationID($affiliationID)
            ->setUsername($username)
            ->setRole($role)
            ->setLearningPathName($learningPathName);
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
     * @return \StructType\SaveUser
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
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\SaveUser
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\SaveUser
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        
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
     * @return \StructType\SaveUser
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
     * @return \StructType\SaveUser
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
     * @return \StructType\SaveUser
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
     * @return \StructType\SaveUser
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
     * Get LearningPathName value
     * @return string|null
     */
    public function getLearningPathName(): ?string
    {
        return $this->LearningPathName;
    }
    /**
     * Set LearningPathName value
     * @param string $learningPathName
     * @return \StructType\SaveUser
     */
    public function setLearningPathName(?string $learningPathName = null): self
    {
        // validation for constraint: string
        if (!is_null($learningPathName) && !is_string($learningPathName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($learningPathName, true), gettype($learningPathName)), __LINE__);
        }
        $this->LearningPathName = $learningPathName;
        
        return $this;
    }
}
