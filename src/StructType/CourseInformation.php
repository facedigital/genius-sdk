<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CourseInformation StructType
 * @subpackage Structs
 */
class CourseInformation extends AbstractStructBase
{
    /**
     * The CourseName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CourseName = null;
    /**
     * The CourseLMSID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CourseLMSID = null;
    /**
     * Constructor method for CourseInformation
     * @uses CourseInformation::setCourseName()
     * @uses CourseInformation::setCourseLMSID()
     * @param string $courseName
     * @param string $courseLMSID
     */
    public function __construct(?string $courseName = null, ?string $courseLMSID = null)
    {
        $this
            ->setCourseName($courseName)
            ->setCourseLMSID($courseLMSID);
    }
    /**
     * Get CourseName value
     * @return string|null
     */
    public function getCourseName(): ?string
    {
        return $this->CourseName;
    }
    /**
     * Set CourseName value
     * @param string $courseName
     * @return \StructType\CourseInformation
     */
    public function setCourseName(?string $courseName = null): self
    {
        // validation for constraint: string
        if (!is_null($courseName) && !is_string($courseName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($courseName, true), gettype($courseName)), __LINE__);
        }
        $this->CourseName = $courseName;
        
        return $this;
    }
    /**
     * Get CourseLMSID value
     * @return string|null
     */
    public function getCourseLMSID(): ?string
    {
        return $this->CourseLMSID;
    }
    /**
     * Set CourseLMSID value
     * @param string $courseLMSID
     * @return \StructType\CourseInformation
     */
    public function setCourseLMSID(?string $courseLMSID = null): self
    {
        // validation for constraint: string
        if (!is_null($courseLMSID) && !is_string($courseLMSID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($courseLMSID, true), gettype($courseLMSID)), __LINE__);
        }
        $this->CourseLMSID = $courseLMSID;
        
        return $this;
    }
}
