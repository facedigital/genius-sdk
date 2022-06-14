<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateCourse StructType
 * @subpackage Structs
 */
class UpdateCourse extends AbstractStructBase
{
    /**
     * The courseID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $courseID;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Token = null;
    /**
     * The courseInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CourseInformation|null
     */
    protected ?\StructType\CourseInformation $courseInfo = null;
    /**
     * Constructor method for UpdateCourse
     * @uses UpdateCourse::setCourseID()
     * @uses UpdateCourse::setToken()
     * @uses UpdateCourse::setCourseInfo()
     * @param int $courseID
     * @param string $token
     * @param \StructType\CourseInformation $courseInfo
     */
    public function __construct(int $courseID, ?string $token = null, ?\StructType\CourseInformation $courseInfo = null)
    {
        $this
            ->setCourseID($courseID)
            ->setToken($token)
            ->setCourseInfo($courseInfo);
    }
    /**
     * Get courseID value
     * @return int
     */
    public function getCourseID(): int
    {
        return $this->courseID;
    }
    /**
     * Set courseID value
     * @param int $courseID
     * @return \StructType\UpdateCourse
     */
    public function setCourseID(int $courseID): self
    {
        // validation for constraint: int
        if (!is_null($courseID) && !(is_int($courseID) || ctype_digit($courseID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($courseID, true), gettype($courseID)), __LINE__);
        }
        $this->courseID = $courseID;
        
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
     * @return \StructType\UpdateCourse
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
     * Get courseInfo value
     * @return \StructType\CourseInformation|null
     */
    public function getCourseInfo(): ?\StructType\CourseInformation
    {
        return $this->courseInfo;
    }
    /**
     * Set courseInfo value
     * @param \StructType\CourseInformation $courseInfo
     * @return \StructType\UpdateCourse
     */
    public function setCourseInfo(?\StructType\CourseInformation $courseInfo = null): self
    {
        $this->courseInfo = $courseInfo;
        
        return $this;
    }
}
