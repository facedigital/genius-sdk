<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferRegistration StructType
 * @subpackage Structs
 */
class TransferRegistration extends AbstractStructBase
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
     * The Username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * The ExistingSectionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExistingSectionID = null;
    /**
     * The NewSectionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NewSectionID = null;
    /**
     * Constructor method for TransferRegistration
     * @uses TransferRegistration::setToken()
     * @uses TransferRegistration::setUsername()
     * @uses TransferRegistration::setExistingSectionID()
     * @uses TransferRegistration::setNewSectionID()
     * @param string $token
     * @param string $username
     * @param string $existingSectionID
     * @param string $newSectionID
     */
    public function __construct(?string $token = null, ?string $username = null, ?string $existingSectionID = null, ?string $newSectionID = null)
    {
        $this
            ->setToken($token)
            ->setUsername($username)
            ->setExistingSectionID($existingSectionID)
            ->setNewSectionID($newSectionID);
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
     * @return \StructType\TransferRegistration
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
     * @return \StructType\TransferRegistration
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
     * Get ExistingSectionID value
     * @return string|null
     */
    public function getExistingSectionID(): ?string
    {
        return $this->ExistingSectionID;
    }
    /**
     * Set ExistingSectionID value
     * @param string $existingSectionID
     * @return \StructType\TransferRegistration
     */
    public function setExistingSectionID(?string $existingSectionID = null): self
    {
        // validation for constraint: string
        if (!is_null($existingSectionID) && !is_string($existingSectionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($existingSectionID, true), gettype($existingSectionID)), __LINE__);
        }
        $this->ExistingSectionID = $existingSectionID;
        
        return $this;
    }
    /**
     * Get NewSectionID value
     * @return string|null
     */
    public function getNewSectionID(): ?string
    {
        return $this->NewSectionID;
    }
    /**
     * Set NewSectionID value
     * @param string $newSectionID
     * @return \StructType\TransferRegistration
     */
    public function setNewSectionID(?string $newSectionID = null): self
    {
        // validation for constraint: string
        if (!is_null($newSectionID) && !is_string($newSectionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newSectionID, true), gettype($newSectionID)), __LINE__);
        }
        $this->NewSectionID = $newSectionID;
        
        return $this;
    }
}
