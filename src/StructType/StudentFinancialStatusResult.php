<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StudentFinancialStatusResult StructType
 * @subpackage Structs
 */
class StudentFinancialStatusResult extends Result
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The FullName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FullName = null;
    /**
     * The ActivePrograms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfString|null
     */
    protected ?\ArrayType\ArrayOfString $ActivePrograms = null;
    /**
     * The EnrollmentStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EnrollmentStatus = null;
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentStatus = null;
    /**
     * The FinancialDebts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfStudentFinancialDebts|null
     */
    protected ?\ArrayType\ArrayOfStudentFinancialDebts $FinancialDebts = null;
    /**
     * Constructor method for StudentFinancialStatusResult
     * @uses StudentFinancialStatusResult::setEmail()
     * @uses StudentFinancialStatusResult::setFullName()
     * @uses StudentFinancialStatusResult::setActivePrograms()
     * @uses StudentFinancialStatusResult::setEnrollmentStatus()
     * @uses StudentFinancialStatusResult::setPaymentStatus()
     * @uses StudentFinancialStatusResult::setFinancialDebts()
     * @param string $email
     * @param string $fullName
     * @param \ArrayType\ArrayOfString $activePrograms
     * @param string $enrollmentStatus
     * @param string $paymentStatus
     * @param \ArrayType\ArrayOfStudentFinancialDebts $financialDebts
     */
    public function __construct(?string $email = null, ?string $fullName = null, ?\ArrayType\ArrayOfString $activePrograms = null, ?string $enrollmentStatus = null, ?string $paymentStatus = null, ?\ArrayType\ArrayOfStudentFinancialDebts $financialDebts = null)
    {
        $this
            ->setEmail($email)
            ->setFullName($fullName)
            ->setActivePrograms($activePrograms)
            ->setEnrollmentStatus($enrollmentStatus)
            ->setPaymentStatus($paymentStatus)
            ->setFinancialDebts($financialDebts);
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
     * @return \StructType\StudentFinancialStatusResult
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
     * Get FullName value
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \StructType\StudentFinancialStatusResult
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        
        return $this;
    }
    /**
     * Get ActivePrograms value
     * @return \ArrayType\ArrayOfString|null
     */
    public function getActivePrograms(): ?\ArrayType\ArrayOfString
    {
        return $this->ActivePrograms;
    }
    /**
     * Set ActivePrograms value
     * @param \ArrayType\ArrayOfString $activePrograms
     * @return \StructType\StudentFinancialStatusResult
     */
    public function setActivePrograms(?\ArrayType\ArrayOfString $activePrograms = null): self
    {
        $this->ActivePrograms = $activePrograms;
        
        return $this;
    }
    /**
     * Get EnrollmentStatus value
     * @return string|null
     */
    public function getEnrollmentStatus(): ?string
    {
        return $this->EnrollmentStatus;
    }
    /**
     * Set EnrollmentStatus value
     * @param string $enrollmentStatus
     * @return \StructType\StudentFinancialStatusResult
     */
    public function setEnrollmentStatus(?string $enrollmentStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($enrollmentStatus) && !is_string($enrollmentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enrollmentStatus, true), gettype($enrollmentStatus)), __LINE__);
        }
        $this->EnrollmentStatus = $enrollmentStatus;
        
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @param string $paymentStatus
     * @return \StructType\StudentFinancialStatusResult
     */
    public function setPaymentStatus(?string $paymentStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentStatus) && !is_string($paymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentStatus, true), gettype($paymentStatus)), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        
        return $this;
    }
    /**
     * Get FinancialDebts value
     * @return \ArrayType\ArrayOfStudentFinancialDebts|null
     */
    public function getFinancialDebts(): ?\ArrayType\ArrayOfStudentFinancialDebts
    {
        return $this->FinancialDebts;
    }
    /**
     * Set FinancialDebts value
     * @param \ArrayType\ArrayOfStudentFinancialDebts $financialDebts
     * @return \StructType\StudentFinancialStatusResult
     */
    public function setFinancialDebts(?\ArrayType\ArrayOfStudentFinancialDebts $financialDebts = null): self
    {
        $this->FinancialDebts = $financialDebts;
        
        return $this;
    }
}
