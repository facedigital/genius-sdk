<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://trevisansandbox.geniussis.com/publicapi.asmx?WSDL',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://trevisansandbox.geniussis.com/publicapi.asmx?WSDL',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
/**
 * Sample call for CreateCourse operation/method
 */
if ($create->CreateCourse(new \StructType\CreateCourse()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateSection operation/method
 */
if ($create->CreateSection(new \StructType\CreateSection()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateLearner operation/method
 */
if ($create->CreateLearner(new \StructType\CreateLearner()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateRegistration operation/method
 */
if ($create->CreateRegistration(new \StructType\CreateRegistration()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
/**
 * Sample call for UpdateCourse operation/method
 */
if ($update->UpdateCourse(new \StructType\UpdateCourse()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateSection operation/method
 */
if ($update->UpdateSection(new \StructType\UpdateSection()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \ServiceType\Run($options);
/**
 * Sample call for RunQuery operation/method
 */
if ($run->RunQuery(new \StructType\RunQuery()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \ServiceType\Save($options);
/**
 * Sample call for SaveAffiliation operation/method
 */
if ($save->SaveAffiliation(new \StructType\SaveAffiliation()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveUser operation/method
 */
if ($save->SaveUser(new \StructType\SaveUser()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetAffiliations operation/method
 */
if ($get->GetAffiliations(new \StructType\GetAffiliations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUsers operation/method
 */
if ($get->GetUsers(new \StructType\GetUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStudentFinancialStatus operation/method
 */
if ($get->GetStudentFinancialStatus(new \StructType\GetStudentFinancialStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEnvironmentInfo operation/method
 */
if ($get->GetEnvironmentInfo(new \StructType\GetEnvironmentInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Drop ServiceType
 */
$drop = new \ServiceType\Drop($options);
/**
 * Sample call for DropRegistration operation/method
 */
if ($drop->DropRegistration(new \StructType\DropRegistration()) !== false) {
    print_r($drop->getResult());
} else {
    print_r($drop->getLastError());
}
/**
 * Samples for Complete ServiceType
 */
$complete = new \ServiceType\Complete($options);
/**
 * Sample call for CompleteRegistration operation/method
 */
if ($complete->CompleteRegistration(new \StructType\CompleteRegistration()) !== false) {
    print_r($complete->getResult());
} else {
    print_r($complete->getLastError());
}
/**
 * Samples for Transfer ServiceType
 */
$transfer = new \ServiceType\Transfer($options);
/**
 * Sample call for TransferRegistration operation/method
 */
if ($transfer->TransferRegistration(new \StructType\TransferRegistration()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Samples for Associate ServiceType
 */
$associate = new \ServiceType\Associate($options);
/**
 * Sample call for AssociateLearnerToCoach operation/method
 */
if ($associate->AssociateLearnerToCoach(new \StructType\AssociateLearnerToCoach()) !== false) {
    print_r($associate->getResult());
} else {
    print_r($associate->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \ServiceType\Remove($options);
/**
 * Sample call for RemoveLearnerFromCoach operation/method
 */
if ($remove->RemoveLearnerFromCoach(new \StructType\RemoveLearnerFromCoach()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
/**
 * Sample call for SendTestEmail operation/method
 */
if ($send->SendTestEmail(new \StructType\SendTestEmail()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
