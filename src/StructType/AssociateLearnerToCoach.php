<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociateLearnerToCoach StructType
 * @subpackage Structs
 */
class AssociateLearnerToCoach extends AbstractStructBase
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
     * The LearnerUsername
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LearnerUsername = null;
    /**
     * The CoachUserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CoachUserName = null;
    /**
     * Constructor method for AssociateLearnerToCoach
     * @uses AssociateLearnerToCoach::setToken()
     * @uses AssociateLearnerToCoach::setLearnerUsername()
     * @uses AssociateLearnerToCoach::setCoachUserName()
     * @param string $token
     * @param string $learnerUsername
     * @param string $coachUserName
     */
    public function __construct(?string $token = null, ?string $learnerUsername = null, ?string $coachUserName = null)
    {
        $this
            ->setToken($token)
            ->setLearnerUsername($learnerUsername)
            ->setCoachUserName($coachUserName);
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
     * @return \StructType\AssociateLearnerToCoach
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
     * Get LearnerUsername value
     * @return string|null
     */
    public function getLearnerUsername(): ?string
    {
        return $this->LearnerUsername;
    }
    /**
     * Set LearnerUsername value
     * @param string $learnerUsername
     * @return \StructType\AssociateLearnerToCoach
     */
    public function setLearnerUsername(?string $learnerUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($learnerUsername) && !is_string($learnerUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($learnerUsername, true), gettype($learnerUsername)), __LINE__);
        }
        $this->LearnerUsername = $learnerUsername;
        
        return $this;
    }
    /**
     * Get CoachUserName value
     * @return string|null
     */
    public function getCoachUserName(): ?string
    {
        return $this->CoachUserName;
    }
    /**
     * Set CoachUserName value
     * @param string $coachUserName
     * @return \StructType\AssociateLearnerToCoach
     */
    public function setCoachUserName(?string $coachUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($coachUserName) && !is_string($coachUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coachUserName, true), gettype($coachUserName)), __LINE__);
        }
        $this->CoachUserName = $coachUserName;
        
        return $this;
    }
}
