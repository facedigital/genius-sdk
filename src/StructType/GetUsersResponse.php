<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersResponse StructType
 * @subpackage Structs
 */
class GetUsersResponse extends AbstractStructBase
{
    /**
     * The GetUsersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetUsersResult|null
     */
    protected ?\StructType\GetUsersResult $GetUsersResult = null;
    /**
     * Constructor method for GetUsersResponse
     * @uses GetUsersResponse::setGetUsersResult()
     * @param \StructType\GetUsersResult $getUsersResult
     */
    public function __construct(?\StructType\GetUsersResult $getUsersResult = null)
    {
        $this
            ->setGetUsersResult($getUsersResult);
    }
    /**
     * Get GetUsersResult value
     * @return \StructType\GetUsersResult|null
     */
    public function getGetUsersResult(): ?\StructType\GetUsersResult
    {
        return $this->GetUsersResult;
    }
    /**
     * Set GetUsersResult value
     * @param \StructType\GetUsersResult $getUsersResult
     * @return \StructType\GetUsersResponse
     */
    public function setGetUsersResult(?\StructType\GetUsersResult $getUsersResult = null): self
    {
        $this->GetUsersResult = $getUsersResult;
        
        return $this;
    }
}
