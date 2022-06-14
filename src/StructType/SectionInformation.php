<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SectionInformation StructType
 * @subpackage Structs
 */
class SectionInformation extends AbstractStructBase
{
    /**
     * The CourseID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $CourseID;
    /**
     * The SectionName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SectionName = null;
    /**
     * The SectionLMSID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SectionLMSID = null;
    /**
     * The Cap
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    protected ?int $Cap;
    /**
     * The InstructorUserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InstructorUserName = null;
    /**
     * Constructor method for SectionInformation
     * @uses SectionInformation::setCourseID()
     * @uses SectionInformation::setSectionName()
     * @uses SectionInformation::setSectionLMSID()
     * @uses SectionInformation::setCap()
     * @uses SectionInformation::setInstructorUserName()
     * @param int $courseID
     * @param string $sectionName
     * @param string $sectionLMSID
     * @param int $cap
     * @param string $instructorUserName
     */
    public function __construct(int $courseID, ?string $sectionName = null, ?string $sectionLMSID = null, ?int $cap, ?string $instructorUserName = null)
    {
        $this
            ->setCourseID($courseID)
            ->setSectionName($sectionName)
            ->setSectionLMSID($sectionLMSID)
            ->setCap($cap)
            ->setInstructorUserName($instructorUserName);
    }
    /**
     * Get CourseID value
     * @return int
     */
    public function getCourseID(): int
    {
        return $this->CourseID;
    }
    /**
     * Set CourseID value
     * @param int $courseID
     * @return \StructType\SectionInformation
     */
    public function setCourseID(int $courseID): self
    {
        // validation for constraint: int
        if (!is_null($courseID) && !(is_int($courseID) || ctype_digit($courseID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($courseID, true), gettype($courseID)), __LINE__);
        }
        $this->CourseID = $courseID;
        
        return $this;
    }
    /**
     * Get SectionName value
     * @return string|null
     */
    public function getSectionName(): ?string
    {
        return $this->SectionName;
    }
    /**
     * Set SectionName value
     * @param string $sectionName
     * @return \StructType\SectionInformation
     */
    public function setSectionName(?string $sectionName = null): self
    {
        // validation for constraint: string
        if (!is_null($sectionName) && !is_string($sectionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sectionName, true), gettype($sectionName)), __LINE__);
        }
        $this->SectionName = $sectionName;
        
        return $this;
    }
    /**
     * Get SectionLMSID value
     * @return string|null
     */
    public function getSectionLMSID(): ?string
    {
        return $this->SectionLMSID;
    }
    /**
     * Set SectionLMSID value
     * @param string $sectionLMSID
     * @return \StructType\SectionInformation
     */
    public function setSectionLMSID(?string $sectionLMSID = null): self
    {
        // validation for constraint: string
        if (!is_null($sectionLMSID) && !is_string($sectionLMSID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sectionLMSID, true), gettype($sectionLMSID)), __LINE__);
        }
        $this->SectionLMSID = $sectionLMSID;
        
        return $this;
    }
    /**
     * Get Cap value
     * @return int
     */
    public function getCap(): int
    {
        return $this->Cap;
    }
    /**
     * Set Cap value
     * @param int $cap
     * @return \StructType\SectionInformation
     */
    public function setCap(?int $cap): self
    {
        // validation for constraint: int
        if (!is_null($cap) && !(is_int($cap) || ctype_digit($cap))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cap, true), gettype($cap)), __LINE__);
        }
        $this->Cap = $cap;
        
        return $this;
    }
    /**
     * Get InstructorUserName value
     * @return string|null
     */
    public function getInstructorUserName(): ?string
    {
        return $this->InstructorUserName;
    }
    /**
     * Set InstructorUserName value
     * @param string $instructorUserName
     * @return \StructType\SectionInformation
     */
    public function setInstructorUserName(?string $instructorUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($instructorUserName) && !is_string($instructorUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructorUserName, true), gettype($instructorUserName)), __LINE__);
        }
        $this->InstructorUserName = $instructorUserName;
        
        return $this;
    }
}
