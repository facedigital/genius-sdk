<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTestEmail StructType
 * @subpackage Structs
 */
class SendTestEmail extends AbstractStructBase
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
     * The SenderName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderName = null;
    /**
     * The SenderEmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderEmailAddress = null;
    /**
     * The RecipientEmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecipientEmailAddress = null;
    /**
     * Constructor method for SendTestEmail
     * @uses SendTestEmail::setToken()
     * @uses SendTestEmail::setSenderName()
     * @uses SendTestEmail::setSenderEmailAddress()
     * @uses SendTestEmail::setRecipientEmailAddress()
     * @param string $token
     * @param string $senderName
     * @param string $senderEmailAddress
     * @param string $recipientEmailAddress
     */
    public function __construct(?string $token = null, ?string $senderName = null, ?string $senderEmailAddress = null, ?string $recipientEmailAddress = null)
    {
        $this
            ->setToken($token)
            ->setSenderName($senderName)
            ->setSenderEmailAddress($senderEmailAddress)
            ->setRecipientEmailAddress($recipientEmailAddress);
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
     * @return \StructType\SendTestEmail
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
     * Get SenderName value
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return $this->SenderName;
    }
    /**
     * Set SenderName value
     * @param string $senderName
     * @return \StructType\SendTestEmail
     */
    public function setSenderName(?string $senderName = null): self
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderName, true), gettype($senderName)), __LINE__);
        }
        $this->SenderName = $senderName;
        
        return $this;
    }
    /**
     * Get SenderEmailAddress value
     * @return string|null
     */
    public function getSenderEmailAddress(): ?string
    {
        return $this->SenderEmailAddress;
    }
    /**
     * Set SenderEmailAddress value
     * @param string $senderEmailAddress
     * @return \StructType\SendTestEmail
     */
    public function setSenderEmailAddress(?string $senderEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmailAddress) && !is_string($senderEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmailAddress, true), gettype($senderEmailAddress)), __LINE__);
        }
        $this->SenderEmailAddress = $senderEmailAddress;
        
        return $this;
    }
    /**
     * Get RecipientEmailAddress value
     * @return string|null
     */
    public function getRecipientEmailAddress(): ?string
    {
        return $this->RecipientEmailAddress;
    }
    /**
     * Set RecipientEmailAddress value
     * @param string $recipientEmailAddress
     * @return \StructType\SendTestEmail
     */
    public function setRecipientEmailAddress(?string $recipientEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientEmailAddress) && !is_string($recipientEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmailAddress, true), gettype($recipientEmailAddress)), __LINE__);
        }
        $this->RecipientEmailAddress = $recipientEmailAddress;
        
        return $this;
    }
}
