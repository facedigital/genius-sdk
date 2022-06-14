<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLearner StructType
 * @subpackage Structs
 */
class CreateLearner extends AbstractStructBase
{
    /**
     * The IsForeigner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsForeigner;
    /**
     * The liveInBrazil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $liveInBrazil;
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
     * The SocialName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SocialName = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DOB = null;
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
     * The SSN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SSN = null;
    /**
     * The AddressZIPCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressZIPCode = null;
    /**
     * The AddressStreet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressStreet = null;
    /**
     * The AddressNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressNumber = null;
    /**
     * The AddressComplement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressComplement = null;
    /**
     * The AddressNeighborhood
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressNeighborhood = null;
    /**
     * The AddressCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressCity = null;
    /**
     * The AddressState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressState = null;
    /**
     * The AddressCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressCountry = null;
    /**
     * The CityOfBirth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CityOfBirth = null;
    /**
     * The StateOfBirth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOfBirth = null;
    /**
     * The Race
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Race = null;
    /**
     * The SpecialNeed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfString|null
     */
    protected ?\ArrayType\ArrayOfString $SpecialNeed = null;
    /**
     * The Mothername
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mothername = null;
    /**
     * The ProgramCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProgramCode = null;
    /**
     * The LmsTermIndex
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LmsTermIndex = null;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TotalAmount = null;
    /**
     * The DownPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DownPayment = null;
    /**
     * The DownPaymentDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DownPaymentDate = null;
    /**
     * The DownPaymentDiscount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DownPaymentDiscount = null;
    /**
     * The DiscountDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountDescription = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Balance = null;
    /**
     * The Installments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Installments = null;
    /**
     * The RecurrentPaymentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecurrentPaymentId = null;
    /**
     * The InvoicingStartDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoicingStartDate = null;
    /**
     * The PaymentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentId = null;
    /**
     * The PlannedNumberOfDisciplines
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlannedNumberOfDisciplines = null;
    /**
     * The PlannedDisciplinesFirstSeries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlannedDisciplinesFirstSeries = null;
    /**
     * The entranceType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entranceType = null;
    /**
     * The foreignerDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $foreignerDocument = null;
    /**
     * Constructor method for CreateLearner
     * @uses CreateLearner::setIsForeigner()
     * @uses CreateLearner::setLiveInBrazil()
     * @uses CreateLearner::setToken()
     * @uses CreateLearner::setFirstName()
     * @uses CreateLearner::setLastName()
     * @uses CreateLearner::setSocialName()
     * @uses CreateLearner::setGender()
     * @uses CreateLearner::setDOB()
     * @uses CreateLearner::setEmail()
     * @uses CreateLearner::setPhone()
     * @uses CreateLearner::setSSN()
     * @uses CreateLearner::setAddressZIPCode()
     * @uses CreateLearner::setAddressStreet()
     * @uses CreateLearner::setAddressNumber()
     * @uses CreateLearner::setAddressComplement()
     * @uses CreateLearner::setAddressNeighborhood()
     * @uses CreateLearner::setAddressCity()
     * @uses CreateLearner::setAddressState()
     * @uses CreateLearner::setAddressCountry()
     * @uses CreateLearner::setCityOfBirth()
     * @uses CreateLearner::setStateOfBirth()
     * @uses CreateLearner::setRace()
     * @uses CreateLearner::setSpecialNeed()
     * @uses CreateLearner::setMothername()
     * @uses CreateLearner::setProgramCode()
     * @uses CreateLearner::setLmsTermIndex()
     * @uses CreateLearner::setTotalAmount()
     * @uses CreateLearner::setDownPayment()
     * @uses CreateLearner::setDownPaymentDate()
     * @uses CreateLearner::setDownPaymentDiscount()
     * @uses CreateLearner::setDiscountDescription()
     * @uses CreateLearner::setBalance()
     * @uses CreateLearner::setInstallments()
     * @uses CreateLearner::setRecurrentPaymentId()
     * @uses CreateLearner::setInvoicingStartDate()
     * @uses CreateLearner::setPaymentId()
     * @uses CreateLearner::setPlannedNumberOfDisciplines()
     * @uses CreateLearner::setPlannedDisciplinesFirstSeries()
     * @uses CreateLearner::setEntranceType()
     * @uses CreateLearner::setForeignerDocument()
     * @param bool $isForeigner
     * @param bool $liveInBrazil
     * @param string $token
     * @param string $firstName
     * @param string $lastName
     * @param string $socialName
     * @param string $gender
     * @param string $dOB
     * @param string $email
     * @param string $phone
     * @param string $sSN
     * @param string $addressZIPCode
     * @param string $addressStreet
     * @param string $addressNumber
     * @param string $addressComplement
     * @param string $addressNeighborhood
     * @param string $addressCity
     * @param string $addressState
     * @param string $addressCountry
     * @param string $cityOfBirth
     * @param string $stateOfBirth
     * @param string $race
     * @param \ArrayType\ArrayOfString $specialNeed
     * @param string $mothername
     * @param string $programCode
     * @param string $lmsTermIndex
     * @param string $totalAmount
     * @param string $downPayment
     * @param string $downPaymentDate
     * @param string $downPaymentDiscount
     * @param string $discountDescription
     * @param string $balance
     * @param string $installments
     * @param string $recurrentPaymentId
     * @param string $invoicingStartDate
     * @param string $paymentId
     * @param string $plannedNumberOfDisciplines
     * @param string $plannedDisciplinesFirstSeries
     * @param string $entranceType
     * @param string $foreignerDocument
     */
    public function __construct(bool $isForeigner, bool $liveInBrazil, ?string $token = null, ?string $firstName = null, ?string $lastName = null, ?string $socialName = null, ?string $gender = null, ?string $dOB = null, ?string $email = null, ?string $phone = null, ?string $sSN = null, ?string $addressZIPCode = null, ?string $addressStreet = null, ?string $addressNumber = null, ?string $addressComplement = null, ?string $addressNeighborhood = null, ?string $addressCity = null, ?string $addressState = null, ?string $addressCountry = null, ?string $cityOfBirth = null, ?string $stateOfBirth = null, ?string $race = null, ?\ArrayType\ArrayOfString $specialNeed = null, ?string $mothername = null, ?string $programCode = null, ?string $lmsTermIndex = null, ?string $totalAmount = null, ?string $downPayment = null, ?string $downPaymentDate = null, ?string $downPaymentDiscount = null, ?string $discountDescription = null, ?string $balance = null, ?string $installments = null, ?string $recurrentPaymentId = null, ?string $invoicingStartDate = null, ?string $paymentId = null, ?string $plannedNumberOfDisciplines = null, ?string $plannedDisciplinesFirstSeries = null, ?string $entranceType = null, ?string $foreignerDocument = null)
    {
        $this
            ->setIsForeigner($isForeigner)
            ->setLiveInBrazil($liveInBrazil)
            ->setToken($token)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setSocialName($socialName)
            ->setGender($gender)
            ->setDOB($dOB)
            ->setEmail($email)
            ->setPhone($phone)
            ->setSSN($sSN)
            ->setAddressZIPCode($addressZIPCode)
            ->setAddressStreet($addressStreet)
            ->setAddressNumber($addressNumber)
            ->setAddressComplement($addressComplement)
            ->setAddressNeighborhood($addressNeighborhood)
            ->setAddressCity($addressCity)
            ->setAddressState($addressState)
            ->setAddressCountry($addressCountry)
            ->setCityOfBirth($cityOfBirth)
            ->setStateOfBirth($stateOfBirth)
            ->setRace($race)
            ->setSpecialNeed($specialNeed)
            ->setMothername($mothername)
            ->setProgramCode($programCode)
            ->setLmsTermIndex($lmsTermIndex)
            ->setTotalAmount($totalAmount)
            ->setDownPayment($downPayment)
            ->setDownPaymentDate($downPaymentDate)
            ->setDownPaymentDiscount($downPaymentDiscount)
            ->setDiscountDescription($discountDescription)
            ->setBalance($balance)
            ->setInstallments($installments)
            ->setRecurrentPaymentId($recurrentPaymentId)
            ->setInvoicingStartDate($invoicingStartDate)
            ->setPaymentId($paymentId)
            ->setPlannedNumberOfDisciplines($plannedNumberOfDisciplines)
            ->setPlannedDisciplinesFirstSeries($plannedDisciplinesFirstSeries)
            ->setEntranceType($entranceType)
            ->setForeignerDocument($foreignerDocument);
    }
    /**
     * Get IsForeigner value
     * @return bool
     */
    public function getIsForeigner(): bool
    {
        return $this->IsForeigner;
    }
    /**
     * Set IsForeigner value
     * @param bool $isForeigner
     * @return \StructType\CreateLearner
     */
    public function setIsForeigner(bool $isForeigner): self
    {
        // validation for constraint: boolean
        if (!is_null($isForeigner) && !is_bool($isForeigner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForeigner, true), gettype($isForeigner)), __LINE__);
        }
        $this->IsForeigner = $isForeigner;
        
        return $this;
    }
    /**
     * Get liveInBrazil value
     * @return bool
     */
    public function getLiveInBrazil(): bool
    {
        return $this->liveInBrazil;
    }
    /**
     * Set liveInBrazil value
     * @param bool $liveInBrazil
     * @return \StructType\CreateLearner
     */
    public function setLiveInBrazil(bool $liveInBrazil): self
    {
        // validation for constraint: boolean
        if (!is_null($liveInBrazil) && !is_bool($liveInBrazil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($liveInBrazil, true), gettype($liveInBrazil)), __LINE__);
        }
        $this->liveInBrazil = $liveInBrazil;
        
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
     * @return \StructType\CreateLearner
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
     * @return \StructType\CreateLearner
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
     * @return \StructType\CreateLearner
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
     * Get SocialName value
     * @return string|null
     */
    public function getSocialName(): ?string
    {
        return $this->SocialName;
    }
    /**
     * Set SocialName value
     * @param string $socialName
     * @return \StructType\CreateLearner
     */
    public function setSocialName(?string $socialName = null): self
    {
        // validation for constraint: string
        if (!is_null($socialName) && !is_string($socialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socialName, true), gettype($socialName)), __LINE__);
        }
        $this->SocialName = $socialName;
        
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \StructType\CreateLearner
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        
        return $this;
    }
    /**
     * Get DOB value
     * @return string|null
     */
    public function getDOB(): ?string
    {
        return $this->DOB;
    }
    /**
     * Set DOB value
     * @param string $dOB
     * @return \StructType\CreateLearner
     */
    public function setDOB(?string $dOB = null): self
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dOB, true), gettype($dOB)), __LINE__);
        }
        $this->DOB = $dOB;
        
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
     * @return \StructType\CreateLearner
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
     * @return \StructType\CreateLearner
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
     * Get SSN value
     * @return string|null
     */
    public function getSSN(): ?string
    {
        return $this->SSN;
    }
    /**
     * Set SSN value
     * @param string $sSN
     * @return \StructType\CreateLearner
     */
    public function setSSN(?string $sSN = null): self
    {
        // validation for constraint: string
        if (!is_null($sSN) && !is_string($sSN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSN, true), gettype($sSN)), __LINE__);
        }
        $this->SSN = $sSN;
        
        return $this;
    }
    /**
     * Get AddressZIPCode value
     * @return string|null
     */
    public function getAddressZIPCode(): ?string
    {
        return $this->AddressZIPCode;
    }
    /**
     * Set AddressZIPCode value
     * @param string $addressZIPCode
     * @return \StructType\CreateLearner
     */
    public function setAddressZIPCode(?string $addressZIPCode = null): self
    {
        // validation for constraint: string
        if (!is_null($addressZIPCode) && !is_string($addressZIPCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressZIPCode, true), gettype($addressZIPCode)), __LINE__);
        }
        $this->AddressZIPCode = $addressZIPCode;
        
        return $this;
    }
    /**
     * Get AddressStreet value
     * @return string|null
     */
    public function getAddressStreet(): ?string
    {
        return $this->AddressStreet;
    }
    /**
     * Set AddressStreet value
     * @param string $addressStreet
     * @return \StructType\CreateLearner
     */
    public function setAddressStreet(?string $addressStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($addressStreet) && !is_string($addressStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressStreet, true), gettype($addressStreet)), __LINE__);
        }
        $this->AddressStreet = $addressStreet;
        
        return $this;
    }
    /**
     * Get AddressNumber value
     * @return string|null
     */
    public function getAddressNumber(): ?string
    {
        return $this->AddressNumber;
    }
    /**
     * Set AddressNumber value
     * @param string $addressNumber
     * @return \StructType\CreateLearner
     */
    public function setAddressNumber(?string $addressNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($addressNumber) && !is_string($addressNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressNumber, true), gettype($addressNumber)), __LINE__);
        }
        $this->AddressNumber = $addressNumber;
        
        return $this;
    }
    /**
     * Get AddressComplement value
     * @return string|null
     */
    public function getAddressComplement(): ?string
    {
        return $this->AddressComplement;
    }
    /**
     * Set AddressComplement value
     * @param string $addressComplement
     * @return \StructType\CreateLearner
     */
    public function setAddressComplement(?string $addressComplement = null): self
    {
        // validation for constraint: string
        if (!is_null($addressComplement) && !is_string($addressComplement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressComplement, true), gettype($addressComplement)), __LINE__);
        }
        $this->AddressComplement = $addressComplement;
        
        return $this;
    }
    /**
     * Get AddressNeighborhood value
     * @return string|null
     */
    public function getAddressNeighborhood(): ?string
    {
        return $this->AddressNeighborhood;
    }
    /**
     * Set AddressNeighborhood value
     * @param string $addressNeighborhood
     * @return \StructType\CreateLearner
     */
    public function setAddressNeighborhood(?string $addressNeighborhood = null): self
    {
        // validation for constraint: string
        if (!is_null($addressNeighborhood) && !is_string($addressNeighborhood)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressNeighborhood, true), gettype($addressNeighborhood)), __LINE__);
        }
        $this->AddressNeighborhood = $addressNeighborhood;
        
        return $this;
    }
    /**
     * Get AddressCity value
     * @return string|null
     */
    public function getAddressCity(): ?string
    {
        return $this->AddressCity;
    }
    /**
     * Set AddressCity value
     * @param string $addressCity
     * @return \StructType\CreateLearner
     */
    public function setAddressCity(?string $addressCity = null): self
    {
        // validation for constraint: string
        if (!is_null($addressCity) && !is_string($addressCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressCity, true), gettype($addressCity)), __LINE__);
        }
        $this->AddressCity = $addressCity;
        
        return $this;
    }
    /**
     * Get AddressState value
     * @return string|null
     */
    public function getAddressState(): ?string
    {
        return $this->AddressState;
    }
    /**
     * Set AddressState value
     * @param string $addressState
     * @return \StructType\CreateLearner
     */
    public function setAddressState(?string $addressState = null): self
    {
        // validation for constraint: string
        if (!is_null($addressState) && !is_string($addressState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressState, true), gettype($addressState)), __LINE__);
        }
        $this->AddressState = $addressState;
        
        return $this;
    }
    /**
     * Get AddressCountry value
     * @return string|null
     */
    public function getAddressCountry(): ?string
    {
        return $this->AddressCountry;
    }
    /**
     * Set AddressCountry value
     * @param string $addressCountry
     * @return \StructType\CreateLearner
     */
    public function setAddressCountry(?string $addressCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($addressCountry) && !is_string($addressCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressCountry, true), gettype($addressCountry)), __LINE__);
        }
        $this->AddressCountry = $addressCountry;
        
        return $this;
    }
    /**
     * Get CityOfBirth value
     * @return string|null
     */
    public function getCityOfBirth(): ?string
    {
        return $this->CityOfBirth;
    }
    /**
     * Set CityOfBirth value
     * @param string $cityOfBirth
     * @return \StructType\CreateLearner
     */
    public function setCityOfBirth(?string $cityOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($cityOfBirth) && !is_string($cityOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityOfBirth, true), gettype($cityOfBirth)), __LINE__);
        }
        $this->CityOfBirth = $cityOfBirth;
        
        return $this;
    }
    /**
     * Get StateOfBirth value
     * @return string|null
     */
    public function getStateOfBirth(): ?string
    {
        return $this->StateOfBirth;
    }
    /**
     * Set StateOfBirth value
     * @param string $stateOfBirth
     * @return \StructType\CreateLearner
     */
    public function setStateOfBirth(?string $stateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOfBirth) && !is_string($stateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOfBirth, true), gettype($stateOfBirth)), __LINE__);
        }
        $this->StateOfBirth = $stateOfBirth;
        
        return $this;
    }
    /**
     * Get Race value
     * @return string|null
     */
    public function getRace(): ?string
    {
        return $this->Race;
    }
    /**
     * Set Race value
     * @param string $race
     * @return \StructType\CreateLearner
     */
    public function setRace(?string $race = null): self
    {
        // validation for constraint: string
        if (!is_null($race) && !is_string($race)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($race, true), gettype($race)), __LINE__);
        }
        $this->Race = $race;
        
        return $this;
    }
    /**
     * Get SpecialNeed value
     * @return \ArrayType\ArrayOfString|null
     */
    public function getSpecialNeed(): ?\ArrayType\ArrayOfString
    {
        return $this->SpecialNeed;
    }
    /**
     * Set SpecialNeed value
     * @param \ArrayType\ArrayOfString $specialNeed
     * @return \StructType\CreateLearner
     */
    public function setSpecialNeed(?\ArrayType\ArrayOfString $specialNeed = null): self
    {
        $this->SpecialNeed = $specialNeed;
        
        return $this;
    }
    /**
     * Get Mothername value
     * @return string|null
     */
    public function getMothername(): ?string
    {
        return $this->Mothername;
    }
    /**
     * Set Mothername value
     * @param string $mothername
     * @return \StructType\CreateLearner
     */
    public function setMothername(?string $mothername = null): self
    {
        // validation for constraint: string
        if (!is_null($mothername) && !is_string($mothername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mothername, true), gettype($mothername)), __LINE__);
        }
        $this->Mothername = $mothername;
        
        return $this;
    }
    /**
     * Get ProgramCode value
     * @return string|null
     */
    public function getProgramCode(): ?string
    {
        return $this->ProgramCode;
    }
    /**
     * Set ProgramCode value
     * @param string $programCode
     * @return \StructType\CreateLearner
     */
    public function setProgramCode(?string $programCode = null): self
    {
        // validation for constraint: string
        if (!is_null($programCode) && !is_string($programCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programCode, true), gettype($programCode)), __LINE__);
        }
        $this->ProgramCode = $programCode;
        
        return $this;
    }
    /**
     * Get LmsTermIndex value
     * @return string|null
     */
    public function getLmsTermIndex(): ?string
    {
        return $this->LmsTermIndex;
    }
    /**
     * Set LmsTermIndex value
     * @param string $lmsTermIndex
     * @return \StructType\CreateLearner
     */
    public function setLmsTermIndex(?string $lmsTermIndex = null): self
    {
        // validation for constraint: string
        if (!is_null($lmsTermIndex) && !is_string($lmsTermIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lmsTermIndex, true), gettype($lmsTermIndex)), __LINE__);
        }
        $this->LmsTermIndex = $lmsTermIndex;
        
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return string|null
     */
    public function getTotalAmount(): ?string
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param string $totalAmount
     * @return \StructType\CreateLearner
     */
    public function setTotalAmount(?string $totalAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($totalAmount) && !is_string($totalAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->TotalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get DownPayment value
     * @return string|null
     */
    public function getDownPayment(): ?string
    {
        return $this->DownPayment;
    }
    /**
     * Set DownPayment value
     * @param string $downPayment
     * @return \StructType\CreateLearner
     */
    public function setDownPayment(?string $downPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($downPayment) && !is_string($downPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($downPayment, true), gettype($downPayment)), __LINE__);
        }
        $this->DownPayment = $downPayment;
        
        return $this;
    }
    /**
     * Get DownPaymentDate value
     * @return string|null
     */
    public function getDownPaymentDate(): ?string
    {
        return $this->DownPaymentDate;
    }
    /**
     * Set DownPaymentDate value
     * @param string $downPaymentDate
     * @return \StructType\CreateLearner
     */
    public function setDownPaymentDate(?string $downPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($downPaymentDate) && !is_string($downPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($downPaymentDate, true), gettype($downPaymentDate)), __LINE__);
        }
        $this->DownPaymentDate = $downPaymentDate;
        
        return $this;
    }
    /**
     * Get DownPaymentDiscount value
     * @return string|null
     */
    public function getDownPaymentDiscount(): ?string
    {
        return $this->DownPaymentDiscount;
    }
    /**
     * Set DownPaymentDiscount value
     * @param string $downPaymentDiscount
     * @return \StructType\CreateLearner
     */
    public function setDownPaymentDiscount(?string $downPaymentDiscount = null): self
    {
        // validation for constraint: string
        if (!is_null($downPaymentDiscount) && !is_string($downPaymentDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($downPaymentDiscount, true), gettype($downPaymentDiscount)), __LINE__);
        }
        $this->DownPaymentDiscount = $downPaymentDiscount;
        
        return $this;
    }
    /**
     * Get DiscountDescription value
     * @return string|null
     */
    public function getDiscountDescription(): ?string
    {
        return $this->DiscountDescription;
    }
    /**
     * Set DiscountDescription value
     * @param string $discountDescription
     * @return \StructType\CreateLearner
     */
    public function setDiscountDescription(?string $discountDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($discountDescription) && !is_string($discountDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountDescription, true), gettype($discountDescription)), __LINE__);
        }
        $this->DiscountDescription = $discountDescription;
        
        return $this;
    }
    /**
     * Get Balance value
     * @return string|null
     */
    public function getBalance(): ?string
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param string $balance
     * @return \StructType\CreateLearner
     */
    public function setBalance(?string $balance = null): self
    {
        // validation for constraint: string
        if (!is_null($balance) && !is_string($balance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get Installments value
     * @return string|null
     */
    public function getInstallments(): ?string
    {
        return $this->Installments;
    }
    /**
     * Set Installments value
     * @param string $installments
     * @return \StructType\CreateLearner
     */
    public function setInstallments(?string $installments = null): self
    {
        // validation for constraint: string
        if (!is_null($installments) && !is_string($installments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($installments, true), gettype($installments)), __LINE__);
        }
        $this->Installments = $installments;
        
        return $this;
    }
    /**
     * Get RecurrentPaymentId value
     * @return string|null
     */
    public function getRecurrentPaymentId(): ?string
    {
        return $this->RecurrentPaymentId;
    }
    /**
     * Set RecurrentPaymentId value
     * @param string $recurrentPaymentId
     * @return \StructType\CreateLearner
     */
    public function setRecurrentPaymentId(?string $recurrentPaymentId = null): self
    {
        // validation for constraint: string
        if (!is_null($recurrentPaymentId) && !is_string($recurrentPaymentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurrentPaymentId, true), gettype($recurrentPaymentId)), __LINE__);
        }
        $this->RecurrentPaymentId = $recurrentPaymentId;
        
        return $this;
    }
    /**
     * Get InvoicingStartDate value
     * @return string|null
     */
    public function getInvoicingStartDate(): ?string
    {
        return $this->InvoicingStartDate;
    }
    /**
     * Set InvoicingStartDate value
     * @param string $invoicingStartDate
     * @return \StructType\CreateLearner
     */
    public function setInvoicingStartDate(?string $invoicingStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoicingStartDate) && !is_string($invoicingStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoicingStartDate, true), gettype($invoicingStartDate)), __LINE__);
        }
        $this->InvoicingStartDate = $invoicingStartDate;
        
        return $this;
    }
    /**
     * Get PaymentId value
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->PaymentId;
    }
    /**
     * Set PaymentId value
     * @param string $paymentId
     * @return \StructType\CreateLearner
     */
    public function setPaymentId(?string $paymentId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentId) && !is_string($paymentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->PaymentId = $paymentId;
        
        return $this;
    }
    /**
     * Get PlannedNumberOfDisciplines value
     * @return string|null
     */
    public function getPlannedNumberOfDisciplines(): ?string
    {
        return $this->PlannedNumberOfDisciplines;
    }
    /**
     * Set PlannedNumberOfDisciplines value
     * @param string $plannedNumberOfDisciplines
     * @return \StructType\CreateLearner
     */
    public function setPlannedNumberOfDisciplines(?string $plannedNumberOfDisciplines = null): self
    {
        // validation for constraint: string
        if (!is_null($plannedNumberOfDisciplines) && !is_string($plannedNumberOfDisciplines)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plannedNumberOfDisciplines, true), gettype($plannedNumberOfDisciplines)), __LINE__);
        }
        $this->PlannedNumberOfDisciplines = $plannedNumberOfDisciplines;
        
        return $this;
    }
    /**
     * Get PlannedDisciplinesFirstSeries value
     * @return string|null
     */
    public function getPlannedDisciplinesFirstSeries(): ?string
    {
        return $this->PlannedDisciplinesFirstSeries;
    }
    /**
     * Set PlannedDisciplinesFirstSeries value
     * @param string $plannedDisciplinesFirstSeries
     * @return \StructType\CreateLearner
     */
    public function setPlannedDisciplinesFirstSeries(?string $plannedDisciplinesFirstSeries = null): self
    {
        // validation for constraint: string
        if (!is_null($plannedDisciplinesFirstSeries) && !is_string($plannedDisciplinesFirstSeries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plannedDisciplinesFirstSeries, true), gettype($plannedDisciplinesFirstSeries)), __LINE__);
        }
        $this->PlannedDisciplinesFirstSeries = $plannedDisciplinesFirstSeries;
        
        return $this;
    }
    /**
     * Get entranceType value
     * @return string|null
     */
    public function getEntranceType(): ?string
    {
        return $this->entranceType;
    }
    /**
     * Set entranceType value
     * @param string $entranceType
     * @return \StructType\CreateLearner
     */
    public function setEntranceType(?string $entranceType = null): self
    {
        // validation for constraint: string
        if (!is_null($entranceType) && !is_string($entranceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entranceType, true), gettype($entranceType)), __LINE__);
        }
        $this->entranceType = $entranceType;
        
        return $this;
    }
    /**
     * Get foreignerDocument value
     * @return string|null
     */
    public function getForeignerDocument(): ?string
    {
        return $this->foreignerDocument;
    }
    /**
     * Set foreignerDocument value
     * @param string $foreignerDocument
     * @return \StructType\CreateLearner
     */
    public function setForeignerDocument(?string $foreignerDocument = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignerDocument) && !is_string($foreignerDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignerDocument, true), gettype($foreignerDocument)), __LINE__);
        }
        $this->foreignerDocument = $foreignerDocument;
        
        return $this;
    }
}
