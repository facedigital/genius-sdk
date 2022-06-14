<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StudentFinancialStatusRequest StructType
 * @subpackage Structs
 */
class StudentFinancialStatusRequest extends AbstractStructBase
{
    /**
     * The CPF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CPF = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * Constructor method for StudentFinancialStatusRequest
     * @uses StudentFinancialStatusRequest::setCPF()
     * @uses StudentFinancialStatusRequest::setEmail()
     * @uses StudentFinancialStatusRequest::setPhone()
     * @uses StudentFinancialStatusRequest::setToken()
     * @param string $cPF
     * @param string $email
     * @param string $phone
     * @param string $token
     */
    public function __construct(?string $cPF = null, ?string $email = null, ?string $phone = null, ?string $token = null)
    {
        $this
            ->setCPF($cPF)
            ->setEmail($email)
            ->setPhone($phone)
            ->setToken($token);
    }
    /**
     * Get CPF value
     * @return string|null
     */
    public function getCPF(): ?string
    {
        return $this->CPF;
    }
    /**
     * Set CPF value
     * @param string $cPF
     * @return \StructType\StudentFinancialStatusRequest
     */
    public function setCPF(?string $cPF = null): self
    {
        // validation for constraint: string
        if (!is_null($cPF) && !is_string($cPF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPF, true), gettype($cPF)), __LINE__);
        }
        $this->CPF = $cPF;
        
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
     * @return \StructType\StudentFinancialStatusRequest
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
     * Get Phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \StructType\StudentFinancialStatusRequest
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        
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
     * @return \StructType\StudentFinancialStatusRequest
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
