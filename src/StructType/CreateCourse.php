<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCourse StructType
 * @subpackage Structs
 */
class CreateCourse extends AbstractStructBase
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
     * The courseInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CourseInformation|null
     */
    protected ?\StructType\CourseInformation $courseInfo = null;
    /**
     * Constructor method for CreateCourse
     * @uses CreateCourse::setToken()
     * @uses CreateCourse::setCourseInfo()
     * @param string $token
     * @param \StructType\CourseInformation $courseInfo
     */
    public function __construct(?string $token = null, ?\StructType\CourseInformation $courseInfo = null)
    {
        $this
            ->setToken($token)
            ->setCourseInfo($courseInfo);
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
     * @return \StructType\CreateCourse
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
     * @return \StructType\CreateCourse
     */
    public function setCourseInfo(?\StructType\CourseInformation $courseInfo = null): self
    {
        $this->courseInfo = $courseInfo;
        
        return $this;
    }
}
