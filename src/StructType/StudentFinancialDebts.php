<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StudentFinancialDebts StructType
 * @subpackage Structs
 */
class StudentFinancialDebts extends AbstractStructBase
{
    /**
     * The Program
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Program = null;
    /**
     * The Invoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Invoice = null;
    /**
     * The TotalCharges
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    protected ?float $TotalCharges;
    /**
     * The TotalCredits
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    protected ?float $TotalCredits;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    protected ?float $Balance;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $DueDate;
    /**
     * Constructor method for StudentFinancialDebts
     * @uses StudentFinancialDebts::setProgram()
     * @uses StudentFinancialDebts::setInvoice()
     * @uses StudentFinancialDebts::setTotalCharges()
     * @uses StudentFinancialDebts::setTotalCredits()
     * @uses StudentFinancialDebts::setBalance()
     * @uses StudentFinancialDebts::setDueDate()
     * @param string $program
     * @param string $invoice
     * @param float $totalCharges
     * @param float $totalCredits
     * @param float $balance
     * @param string $dueDate
     */
    public function __construct(?string $program = null, ?string $invoice = null, ?float $totalCharges, ?float $totalCredits, ?float $balance, ?string $dueDate)
    {
        $this
            ->setProgram($program)
            ->setInvoice($invoice)
            ->setTotalCharges($totalCharges)
            ->setTotalCredits($totalCredits)
            ->setBalance($balance)
            ->setDueDate($dueDate);
    }
    /**
     * Get Program value
     * @return string|null
     */
    public function getProgram(): ?string
    {
        return $this->Program;
    }
    /**
     * Set Program value
     * @param string $program
     * @return \StructType\StudentFinancialDebts
     */
    public function setProgram(?string $program = null): self
    {
        // validation for constraint: string
        if (!is_null($program) && !is_string($program)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($program, true), gettype($program)), __LINE__);
        }
        $this->Program = $program;
        
        return $this;
    }
    /**
     * Get Invoice value
     * @return string|null
     */
    public function getInvoice(): ?string
    {
        return $this->Invoice;
    }
    /**
     * Set Invoice value
     * @param string $invoice
     * @return \StructType\StudentFinancialDebts
     */
    public function setInvoice(?string $invoice = null): self
    {
        // validation for constraint: string
        if (!is_null($invoice) && !is_string($invoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoice, true), gettype($invoice)), __LINE__);
        }
        $this->Invoice = $invoice;
        
        return $this;
    }
    /**
     * Get TotalCharges value
     * @return float
     */
    public function getTotalCharges(): float
    {
        return $this->TotalCharges;
    }
    /**
     * Set TotalCharges value
     * @param float $totalCharges
     * @return \StructType\StudentFinancialDebts
     */
    public function setTotalCharges(?float $totalCharges): self
    {
        // validation for constraint: float
        if (!is_null($totalCharges) && !(is_float($totalCharges) || is_numeric($totalCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCharges, true), gettype($totalCharges)), __LINE__);
        }
        $this->TotalCharges = $totalCharges;
        
        return $this;
    }
    /**
     * Get TotalCredits value
     * @return float
     */
    public function getTotalCredits(): float
    {
        return $this->TotalCredits;
    }
    /**
     * Set TotalCredits value
     * @param float $totalCredits
     * @return \StructType\StudentFinancialDebts
     */
    public function setTotalCredits(?float $totalCredits): self
    {
        // validation for constraint: float
        if (!is_null($totalCredits) && !(is_float($totalCredits) || is_numeric($totalCredits))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCredits, true), gettype($totalCredits)), __LINE__);
        }
        $this->TotalCredits = $totalCredits;
        
        return $this;
    }
    /**
     * Get Balance value
     * @return float
     */
    public function getBalance(): float
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param float $balance
     * @return \StructType\StudentFinancialDebts
     */
    public function setBalance(?float $balance): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get DueDate value
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \StructType\StudentFinancialDebts
     */
    public function setDueDate(?string $dueDate): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        
        return $this;
    }
}
