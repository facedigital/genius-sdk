<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'CreateCourse' => '\\StructType\\CreateCourse',
            'CourseInformation' => '\\StructType\\CourseInformation',
            'CreateCourseResponse' => '\\StructType\\CreateCourseResponse',
            'CreateMethodResult' => '\\StructType\\CreateMethodResult',
            'UpdateCourse' => '\\StructType\\UpdateCourse',
            'UpdateCourseResponse' => '\\StructType\\UpdateCourseResponse',
            'MethodResult' => '\\StructType\\MethodResult',
            'CreateSection' => '\\StructType\\CreateSection',
            'SectionInformation' => '\\StructType\\SectionInformation',
            'CreateSectionResponse' => '\\StructType\\CreateSectionResponse',
            'UpdateSection' => '\\StructType\\UpdateSection',
            'UpdateSectionResponse' => '\\StructType\\UpdateSectionResponse',
            'RunQuery' => '\\StructType\\RunQuery',
            'RunQueryResponse' => '\\StructType\\RunQueryResponse',
            'RunQueryResult' => '\\StructType\\RunQueryResult',
            'SaveAffiliation' => '\\StructType\\SaveAffiliation',
            'SaveAffiliationResponse' => '\\StructType\\SaveAffiliationResponse',
            'GetAffiliations' => '\\StructType\\GetAffiliations',
            'GetAffiliationsResponse' => '\\StructType\\GetAffiliationsResponse',
            'GetAffiliationsResult' => '\\StructType\\GetAffiliationsResult',
            'CreateLearner' => '\\StructType\\CreateLearner',
            'ArrayOfString' => '\\ArrayType\\ArrayOfString',
            'CreateLearnerResponse' => '\\StructType\\CreateLearnerResponse',
            'CreateRegistration' => '\\StructType\\CreateRegistration',
            'CreateRegistrationResponse' => '\\StructType\\CreateRegistrationResponse',
            'DropRegistration' => '\\StructType\\DropRegistration',
            'DropRegistrationResponse' => '\\StructType\\DropRegistrationResponse',
            'CompleteRegistration' => '\\StructType\\CompleteRegistration',
            'CompleteRegistrationResponse' => '\\StructType\\CompleteRegistrationResponse',
            'TransferRegistration' => '\\StructType\\TransferRegistration',
            'TransferRegistrationResponse' => '\\StructType\\TransferRegistrationResponse',
            'SaveUser' => '\\StructType\\SaveUser',
            'SaveUserResponse' => '\\StructType\\SaveUserResponse',
            'GetUsers' => '\\StructType\\GetUsers',
            'GetUsersResponse' => '\\StructType\\GetUsersResponse',
            'GetUsersResult' => '\\StructType\\GetUsersResult',
            'AssociateLearnerToCoach' => '\\StructType\\AssociateLearnerToCoach',
            'AssociateLearnerToCoachResponse' => '\\StructType\\AssociateLearnerToCoachResponse',
            'RemoveLearnerFromCoach' => '\\StructType\\RemoveLearnerFromCoach',
            'RemoveLearnerFromCoachResponse' => '\\StructType\\RemoveLearnerFromCoachResponse',
            'SendTestEmail' => '\\StructType\\SendTestEmail',
            'SendTestEmailResponse' => '\\StructType\\SendTestEmailResponse',
            'GetStudentFinancialStatus' => '\\StructType\\GetStudentFinancialStatus',
            'StudentFinancialStatusRequest' => '\\StructType\\StudentFinancialStatusRequest',
            'GetStudentFinancialStatusResponse' => '\\StructType\\GetStudentFinancialStatusResponse',
            'StudentFinancialStatusResult' => '\\StructType\\StudentFinancialStatusResult',
            'Result' => '\\StructType\\Result',
            'ArrayOfStudentFinancialDebts' => '\\ArrayType\\ArrayOfStudentFinancialDebts',
            'StudentFinancialDebts' => '\\StructType\\StudentFinancialDebts',
            'GetEnvironmentInfo' => '\\StructType\\GetEnvironmentInfo',
            'GetEnvironmentInfoResponse' => '\\StructType\\GetEnvironmentInfoResponse',
            'EnvironmentInfo' => '\\StructType\\EnvironmentInfo',
            'DataSet' => '\\StructType\\DataSet',
        ];
    }
}
