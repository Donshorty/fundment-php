# OpenAPIClient-php

<div><a href=\"/staging/\"><h1>Getting started</h1></a>
</div>



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_create_schema = new \OpenAPI\Client\Model\AccountCreateSchema(); // \OpenAPI\Client\Model\AccountCreateSchema

try {
    $result = $apiInstance->accountCreate($account_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://staging-api.fundment.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountCreate**](docs/Api/AccountsApi.md#accountcreate) | **POST** /account/ | Account Create
*AccountsApi* | [**accountCreateGoal**](docs/Api/AccountsApi.md#accountcreategoal) | **POST** /account/{ref}/goal/ | Account Create Goal
*AccountsApi* | [**accountPensionInfoUpdate**](docs/Api/AccountsApi.md#accountpensioninfoupdate) | **PATCH** /account/{ref}/pension-info | Account Pension Info Update
*AccountsApi* | [**accountRead**](docs/Api/AccountsApi.md#accountread) | **GET** /account/{ref} | Account Read
*AccountsApi* | [**accountUpdate**](docs/Api/AccountsApi.md#accountupdate) | **PATCH** /account/{ref} | Account Update
*AccountsApi* | [**accountsRead**](docs/Api/AccountsApi.md#accountsread) | **GET** /account/ | Accounts Read
*AdviserFirmsApi* | [**adviserFirmClientGroupAddClients**](docs/Api/AdviserFirmsApi.md#adviserfirmclientgroupaddclients) | **POST** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/batch | Adviser Firm Client Group Add Clients
*AdviserFirmsApi* | [**adviserFirmClientGroupDeleteClient**](docs/Api/AdviserFirmsApi.md#adviserfirmclientgroupdeleteclient) | **DELETE** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/{client_ref} | Adviser Firm Client Group Delete Client
*AdviserFirmsApi* | [**adviserFirmClientGroupUpdateClients**](docs/Api/AdviserFirmsApi.md#adviserfirmclientgroupupdateclients) | **PATCH** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/batch | Adviser Firm Client Group Update Clients
*AdviserFirmsApi* | [**adviserFirmCreate**](docs/Api/AdviserFirmsApi.md#adviserfirmcreate) | **POST** /adviser-firm/ | Adviser Firm Create
*AdviserFirmsApi* | [**adviserFirmCreateAddress**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateaddress) | **POST** /adviser-firm/{adviser_firm_ref}/address/ | Adviser Firm Create Address
*AdviserFirmsApi* | [**adviserFirmCreateAdviser**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateadviser) | **POST** /adviser-firm/{adviser_firm_ref}/adviser/ | Adviser Firm Create Adviser
*AdviserFirmsApi* | [**adviserFirmCreateClientGroup**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateclientgroup) | **POST** /adviser-firm/{adviser_firm_ref}/client-group/ | Adviser Firm Create Client Group
*AdviserFirmsApi* | [**adviserFirmCreateFee**](docs/Api/AdviserFirmsApi.md#adviserfirmcreatefee) | **POST** /adviser-firm/{adviser_firm_ref}/fee/ | Adviser Firm Create Fee
*AdviserFirmsApi* | [**adviserFirmCreateFeeScheduleLink**](docs/Api/AdviserFirmsApi.md#adviserfirmcreatefeeschedulelink) | **POST** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/ | Adviser Firm Create Fee Schedule Link
*AdviserFirmsApi* | [**adviserFirmCreateInvestmentManagementFirmLink**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateinvestmentmanagementfirmlink) | **POST** /adviser-firm/{adviser_firm_ref}/investment-management-firms-link/ | Adviser Firm Create Investment Management Firm Link
*AdviserFirmsApi* | [**adviserFirmCreateOption**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateoption) | **POST** /adviser-firm/{adviser_firm_ref}/option | Adviser Firm Create Option
*AdviserFirmsApi* | [**adviserFirmCreateRiskProfileProviderLink**](docs/Api/AdviserFirmsApi.md#adviserfirmcreateriskprofileproviderlink) | **POST** /adviser-firm/{adviser_firm_ref}/rpp-link/ | Adviser Firm Create Risk Profile Provider Link
*AdviserFirmsApi* | [**adviserFirmDeleteAdviser**](docs/Api/AdviserFirmsApi.md#adviserfirmdeleteadviser) | **DELETE** /adviser-firm/{adviser_firm_ref}/adviser/{ref} | Adviser Firm Delete Adviser
*AdviserFirmsApi* | [**adviserFirmDeleteClientGroup**](docs/Api/AdviserFirmsApi.md#adviserfirmdeleteclientgroup) | **DELETE** /adviser-firm/{adviser_firm_ref}/client-group/{ref} | Adviser Firm Delete Client Group
*AdviserFirmsApi* | [**adviserFirmDeleteFeeScheduleLink**](docs/Api/AdviserFirmsApi.md#adviserfirmdeletefeeschedulelink) | **PATCH** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/end/{ref} | Adviser Firm Delete Fee Schedule Link
*AdviserFirmsApi* | [**adviserFirmDeleteInvestmentManagementFirmLink**](docs/Api/AdviserFirmsApi.md#adviserfirmdeleteinvestmentmanagementfirmlink) | **DELETE** /adviser-firm/{adviser_firm_ref}/investment-management-firm-link/{ref} | Adviser Firm Delete Investment Management Firm Link
*AdviserFirmsApi* | [**adviserFirmDeleteRiskProfileProviderLink**](docs/Api/AdviserFirmsApi.md#adviserfirmdeleteriskprofileproviderlink) | **DELETE** /adviser-firm/{adviser_firm_ref}/rpp-link/{risk_profile_provider_ref} | Adviser Firm Delete Risk Profile Provider Link
*AdviserFirmsApi* | [**adviserFirmExport**](docs/Api/AdviserFirmsApi.md#adviserfirmexport) | **GET** /adviser-firm/{adviser_firm_ref}/export | Adviser Firm Export
*AdviserFirmsApi* | [**adviserFirmIntroduce**](docs/Api/AdviserFirmsApi.md#adviserfirmintroduce) | **POST** /adviser-firm/introduce/ | Adviser Firm Introduce
*AdviserFirmsApi* | [**adviserFirmPutLogo**](docs/Api/AdviserFirmsApi.md#adviserfirmputlogo) | **PUT** /adviser-firm/{adviser_firm_ref}/logo | Adviser Firm Put Logo
*AdviserFirmsApi* | [**adviserFirmRead**](docs/Api/AdviserFirmsApi.md#adviserfirmread) | **GET** /adviser-firm/{adviser_firm_ref} | Adviser Firm Read
*AdviserFirmsApi* | [**adviserFirmReadClientGroups**](docs/Api/AdviserFirmsApi.md#adviserfirmreadclientgroups) | **GET** /adviser-firm/{adviser_firm_ref}/client-group/ | Adviser Firm Read Client Groups
*AdviserFirmsApi* | [**adviserFirmReadFeeScheduleLinks**](docs/Api/AdviserFirmsApi.md#adviserfirmreadfeeschedulelinks) | **GET** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/ | Adviser Firm Read Fee Schedule Links
*AdviserFirmsApi* | [**adviserFirmReadFeeSchedules**](docs/Api/AdviserFirmsApi.md#adviserfirmreadfeeschedules) | **GET** /adviser-firm/{adviser_firm_ref}/fee-schedule | Adviser Firm Read Fee Schedules
*AdviserFirmsApi* | [**adviserFirmUpdate**](docs/Api/AdviserFirmsApi.md#adviserfirmupdate) | **PATCH** /adviser-firm/{adviser_firm_ref}/details | Adviser Firm Update
*AdviserFirmsApi* | [**adviserFirmUpdateAccessAdviser**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateaccessadviser) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser-access/{ref} | Adviser Firm Update Access Adviser
*AdviserFirmsApi* | [**adviserFirmUpdateAddress**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateaddress) | **PATCH** /adviser-firm/{adviser_firm_ref}/address/{ref} | Adviser Firm Update Address
*AdviserFirmsApi* | [**adviserFirmUpdateAdviser**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateadviser) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser/{ref} | Adviser Firm Update Adviser
*AdviserFirmsApi* | [**adviserFirmUpdateAdviserPassword**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateadviserpassword) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser/{ref}/update-password | Adviser Firm Update Adviser Password
*AdviserFirmsApi* | [**adviserFirmUpdateClientGroup**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateclientgroup) | **PATCH** /adviser-firm/{adviser_firm_ref}/client-group/{ref} | Adviser Firm Update Client Group
*AdviserFirmsApi* | [**adviserFirmUpdateFeeScheduleLinkToDefault**](docs/Api/AdviserFirmsApi.md#adviserfirmupdatefeeschedulelinktodefault) | **PATCH** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/default/{ref} | Adviser Firm Update Fee Schedule Link To Default
*AdviserFirmsApi* | [**adviserFirmUpdateInvestmentManagementFirmLink**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateinvestmentmanagementfirmlink) | **PATCH** /adviser-firm/{adviser_firm_ref}/investment-management-firm-link/{ref} | Adviser Firm Update Investment Management Firm Link
*AdviserFirmsApi* | [**adviserFirmUpdateOption**](docs/Api/AdviserFirmsApi.md#adviserfirmupdateoption) | **PATCH** /adviser-firm/{adviser_firm_ref}/option | Adviser Firm Update Option
*AdviserFirmsApi* | [**adviserFirmsRead**](docs/Api/AdviserFirmsApi.md#adviserfirmsread) | **GET** /adviser-firm/ | Adviser Firms Read
*AdviserFirmsApi* | [**advisersRead**](docs/Api/AdviserFirmsApi.md#advisersread) | **GET** /adviser-firm/adviser/ | Advisers Read
*AdviserNetworksApi* | [**adviserNetworkCreate**](docs/Api/AdviserNetworksApi.md#advisernetworkcreate) | **POST** /adviser-network/ | Adviser Network Create
*AdviserNetworksApi* | [**adviserNetworkFirmLinkCreate**](docs/Api/AdviserNetworksApi.md#advisernetworkfirmlinkcreate) | **POST** /adviser-network/{adviser_network_ref}/link | Adviser Network Firm Link Create
*AdviserNetworksApi* | [**adviserNetworkFirmLinkUpdate**](docs/Api/AdviserNetworksApi.md#advisernetworkfirmlinkupdate) | **PATCH** /adviser-network/{adviser_network_ref}/link/{network_link_ref} | Adviser Network Firm Link Update
*AdviserNetworksApi* | [**adviserNetworkLoginCreate**](docs/Api/AdviserNetworksApi.md#advisernetworklogincreate) | **POST** /adviser-network/{adviser_network_ref}/login | Adviser Network Login Create
*AdviserNetworksApi* | [**adviserNetworkLoginDelete**](docs/Api/AdviserNetworksApi.md#advisernetworklogindelete) | **DELETE** /adviser-network/{adviser_network_ref}/login/{network_login_ref} | Adviser Network Login Delete
*AdviserNetworksApi* | [**adviserNetworkLoginsRead**](docs/Api/AdviserNetworksApi.md#advisernetworkloginsread) | **GET** /adviser-network/{adviser_network_ref}/login | Adviser Network Logins Read
*AdviserNetworksApi* | [**adviserNetworkRead**](docs/Api/AdviserNetworksApi.md#advisernetworkread) | **GET** /adviser-network/{adviser_network_ref} | Adviser Network Read
*AdviserNetworksApi* | [**adviserNetworkUpdate**](docs/Api/AdviserNetworksApi.md#advisernetworkupdate) | **PATCH** /adviser-network/{adviser_network_ref} | Adviser Network Update
*AdviserNetworksApi* | [**adviserNetworksRead**](docs/Api/AdviserNetworksApi.md#advisernetworksread) | **GET** /adviser-network/ | Adviser Networks Read
*AuthenticationApi* | [**createMultiFactorAuthenticationRegisterOtpApp**](docs/Api/AuthenticationApi.md#createmultifactorauthenticationregisterotpapp) | **POST** /auth/mfa-otp-register-app | Create Multi Factor Authentication Register Otp App
*AuthenticationApi* | [**deleteMultiFactorAuthenticationRegisterOtpApp**](docs/Api/AuthenticationApi.md#deletemultifactorauthenticationregisterotpapp) | **DELETE** /auth/mfa-otp-register-app | Delete Multi Factor Authentication Register Otp App
*AuthenticationApi* | [**getMultiFactorAuthenticationRegisterOtpApps**](docs/Api/AuthenticationApi.md#getmultifactorauthenticationregisterotpapps) | **GET** /auth/mfa-otp-register-app | Get Multi Factor Authentication Register Otp Apps
*AuthenticationApi* | [**handleForgottenPassword**](docs/Api/AuthenticationApi.md#handleforgottenpassword) | **POST** /auth/forgotten-password | Handle Forgotten Password
*AuthenticationApi* | [**handleResetPassword**](docs/Api/AuthenticationApi.md#handleresetpassword) | **PATCH** /auth/reset-password | Handle Reset Password
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /auth/login | Login
*AuthenticationApi* | [**loginGoogle**](docs/Api/AuthenticationApi.md#logingoogle) | **GET** /auth/login/google | Login Google
*AuthenticationApi* | [**loginMicrosoft**](docs/Api/AuthenticationApi.md#loginmicrosoft) | **GET** /auth/login/microsoft | Login Microsoft
*AuthenticationApi* | [**logout**](docs/Api/AuthenticationApi.md#logout) | **POST** /auth/logout | Logout
*AuthenticationApi* | [**multiFactorAuthenticationIpAddressWhitelistDisable**](docs/Api/AuthenticationApi.md#multifactorauthenticationipaddresswhitelistdisable) | **DELETE** /auth/mfa-whitelist-ip-address/{ref} | Multi Factor Authentication Ip Address Whitelist Disable
*AuthenticationApi* | [**multiFactorAuthenticationIpAddressWhitelistEnable**](docs/Api/AuthenticationApi.md#multifactorauthenticationipaddresswhitelistenable) | **POST** /auth/mfa-whitelist-ip-address | Multi Factor Authentication Ip Address Whitelist Enable
*AuthenticationApi* | [**multiFactorAuthenticationMethods**](docs/Api/AuthenticationApi.md#multifactorauthenticationmethods) | **GET** /auth/mfa-otp-methods | Multi Factor Authentication Methods
*AuthenticationApi* | [**multiFactorAuthenticationSendOtp**](docs/Api/AuthenticationApi.md#multifactorauthenticationsendotp) | **POST** /auth/mfa-otp-send | Multi Factor Authentication Send Otp
*AuthenticationApi* | [**multiFactorAuthenticationUntrustDevice**](docs/Api/AuthenticationApi.md#multifactorauthenticationuntrustdevice) | **DELETE** /auth/mfa-untrust-device | Multi Factor Authentication Untrust Device
*AuthenticationApi* | [**multiFactorAuthenticationVerifyOtp**](docs/Api/AuthenticationApi.md#multifactorauthenticationverifyotp) | **POST** /auth/mfa-otp-verify | Multi Factor Authentication Verify Otp
*AuthenticationApi* | [**refresh**](docs/Api/AuthenticationApi.md#refresh) | **POST** /auth/refresh | Refresh
*AuthenticationApi* | [**swapTokenGoogle**](docs/Api/AuthenticationApi.md#swaptokengoogle) | **GET** /auth/swap-token/google | Swap Token Google
*AuthenticationApi* | [**swapTokenMicrosoft**](docs/Api/AuthenticationApi.md#swaptokenmicrosoft) | **GET** /auth/swap-token/microsoft | Swap Token Microsoft
*AuthenticationApi* | [**updateLoginEnabled**](docs/Api/AuthenticationApi.md#updateloginenabled) | **PATCH** /auth/login-status/{login_id} | Update Login Enabled
*BeneficiaryApi* | [**beneficiaryTypesCreate**](docs/Api/BeneficiaryApi.md#beneficiarytypescreate) | **POST** /beneficiary/ | Beneficiary Types Create
*BeneficiaryApi* | [**beneficiaryTypesRead**](docs/Api/BeneficiaryApi.md#beneficiarytypesread) | **GET** /beneficiary/ | Beneficiary Types Read
*BeneficiaryApi* | [**beneficiaryTypesUpdate**](docs/Api/BeneficiaryApi.md#beneficiarytypesupdate) | **PATCH** /beneficiary/{beneficiary_type_ref} | Beneficiary Types Update
*BulkActionsApi* | [**getBulkActions**](docs/Api/BulkActionsApi.md#getbulkactions) | **GET** /bulk-actions/ | Get Bulk Actions
*BulkActionsApi* | [**runBulkActions**](docs/Api/BulkActionsApi.md#runbulkactions) | **POST** /bulk-actions/ | Run Bulk Actions
*ClientsApi* | [**addAssociatedClients**](docs/Api/ClientsApi.md#addassociatedclients) | **PUT** /client/entity/{client_ref}/associate | Add Associated Clients
*ClientsApi* | [**clientCreate**](docs/Api/ClientsApi.md#clientcreate) | **POST** /client/ | Client Create
*ClientsApi* | [**clientCreateAddress**](docs/Api/ClientsApi.md#clientcreateaddress) | **POST** /client/{client_ref}/address/ | Client Create Address
*ClientsApi* | [**clientCreateDocument**](docs/Api/ClientsApi.md#clientcreatedocument) | **POST** /client/{client_ref}/document/ | Client Create Document
*ClientsApi* | [**clientCreateFeeSchedule**](docs/Api/ClientsApi.md#clientcreatefeeschedule) | **POST** /client/{client_ref}/fee-schedule/ | Client Create Fee Schedule
*ClientsApi* | [**clientCreateIsaLimit**](docs/Api/ClientsApi.md#clientcreateisalimit) | **POST** /client/{client_ref}/isa-limit | Client Create Isa Limit
*ClientsApi* | [**clientCreatePhoneNumber**](docs/Api/ClientsApi.md#clientcreatephonenumber) | **POST** /client/{client_ref}/phone-number | Client Create Phone Number
*ClientsApi* | [**clientDeleteFeeSchedule**](docs/Api/ClientsApi.md#clientdeletefeeschedule) | **DELETE** /client/{client_ref}/fee-schedule/{ref} | Client Delete Fee Schedule
*ClientsApi* | [**clientDeletePhoneNumber**](docs/Api/ClientsApi.md#clientdeletephonenumber) | **DELETE** /client/{client_ref}/phone-number/{ref} | Client Delete Phone Number
*ClientsApi* | [**clientDownloadDocument**](docs/Api/ClientsApi.md#clientdownloaddocument) | **GET** /client/{client_ref}/document/{ref}/download | Client Download Document
*ClientsApi* | [**clientGetFlexibleIsaLimits**](docs/Api/ClientsApi.md#clientgetflexibleisalimits) | **GET** /client/{client_ref}/flex-isa-limits | Client Get Flexible Isa Limits
*ClientsApi* | [**clientGroupReadDefaultFeeSchedules**](docs/Api/ClientsApi.md#clientgroupreaddefaultfeeschedules) | **GET** /client/client-group/{client_group_ref}/fee-schedule/default | Client Group Read Default Fee Schedules
*ClientsApi* | [**clientGroupsRead**](docs/Api/ClientsApi.md#clientgroupsread) | **GET** /client/client-group/ | Client Groups Read
*ClientsApi* | [**clientRead**](docs/Api/ClientsApi.md#clientread) | **GET** /client/{client_ref} | Client Read
*ClientsApi* | [**clientReadAddress**](docs/Api/ClientsApi.md#clientreadaddress) | **GET** /client/{client_ref}/address/{ref} | Client Read Address
*ClientsApi* | [**clientReadAddresses**](docs/Api/ClientsApi.md#clientreadaddresses) | **GET** /client/{client_ref}/address/ | Client Read Addresses
*ClientsApi* | [**clientReadAppliedFeeSchedules**](docs/Api/ClientsApi.md#clientreadappliedfeeschedules) | **GET** /client/{client_ref}/fee-schedule/applied | Client Read Applied Fee Schedules
*ClientsApi* | [**clientReadDefaultFeeSchedules**](docs/Api/ClientsApi.md#clientreaddefaultfeeschedules) | **GET** /client/{client_ref}/fee-schedule/default | Client Read Default Fee Schedules
*ClientsApi* | [**clientReadDocument**](docs/Api/ClientsApi.md#clientreaddocument) | **GET** /client/{client_ref}/document/{ref} | Client Read Document
*ClientsApi* | [**clientReadDocuments**](docs/Api/ClientsApi.md#clientreaddocuments) | **GET** /client/{client_ref}/document/ | Client Read Documents
*ClientsApi* | [**clientReadFeeSchedules**](docs/Api/ClientsApi.md#clientreadfeeschedules) | **GET** /client/{client_ref}/fee-schedule/ | Client Read Fee Schedules
*ClientsApi* | [**clientReadUserGroupFeeSchedules**](docs/Api/ClientsApi.md#clientreadusergroupfeeschedules) | **GET** /client/client_group/{client_group_ref}/fee-schedule/ | Client Read User Group Fee Schedules
*ClientsApi* | [**clientUpdate**](docs/Api/ClientsApi.md#clientupdate) | **PATCH** /client/{client_ref} | Client Update
*ClientsApi* | [**clientUpdateAddress**](docs/Api/ClientsApi.md#clientupdateaddress) | **PATCH** /client/{client_ref}/address/{ref} | Client Update Address
*ClientsApi* | [**clientUpdateDocument**](docs/Api/ClientsApi.md#clientupdatedocument) | **PATCH** /client/{client_ref}/document/{ref} | Client Update Document
*ClientsApi* | [**clientUpdateFeeSchedule**](docs/Api/ClientsApi.md#clientupdatefeeschedule) | **PATCH** /client/{client_ref}/fee-schedule/{ref} | Client Update Fee Schedule
*ClientsApi* | [**clientUpdateIsaLimit**](docs/Api/ClientsApi.md#clientupdateisalimit) | **PATCH** /client/{client_ref}/isa-limit/{tax_year} | Client Update Isa Limit
*ClientsApi* | [**clientUpdatePhoneNumber**](docs/Api/ClientsApi.md#clientupdatephonenumber) | **PATCH** /client/{client_ref}/phone-number/{ref} | Client Update Phone Number
*ClientsApi* | [**clientsRead**](docs/Api/ClientsApi.md#clientsread) | **GET** /client/ | Clients Read
*ClientsApi* | [**entityClientCreate**](docs/Api/ClientsApi.md#entityclientcreate) | **POST** /client/entity | Entity Client Create
*ClientsApi* | [**entityClientRead**](docs/Api/ClientsApi.md#entityclientread) | **GET** /client/entity/{client_ref} | Entity Client Read
*ClientsApi* | [**entityClientReadAssociations**](docs/Api/ClientsApi.md#entityclientreadassociations) | **GET** /client/entity/{client_ref}/associations | Entity Client Read Associations
*ClientsApi* | [**entityClientUpdate**](docs/Api/ClientsApi.md#entityclientupdate) | **PATCH** /client/entity/{client_ref} | Entity Client Update
*ClientsApi* | [**entityLeadUpdate**](docs/Api/ClientsApi.md#entityleadupdate) | **PATCH** /client/entity/lead/{client_ref} | Entity Lead Update
*ClientsApi* | [**goalReadFeeSchedulesProjections**](docs/Api/ClientsApi.md#goalreadfeeschedulesprojections) | **GET** /client/{client_ref}/fee-schedule/{goal_ref}/fee-projections | Goal Read Fee Schedules Projections
*ClientsApi* | [**leadUpdate**](docs/Api/ClientsApi.md#leadupdate) | **PATCH** /client/lead/{client_ref} | Lead Update
*ClientsApi* | [**removeAssociatedClient**](docs/Api/ClientsApi.md#removeassociatedclient) | **DELETE** /client/entity/{client_ref}/associate/{association_id} | Remove Associated Client
*CorporateActionsApi* | [**dividendsBook**](docs/Api/CorporateActionsApi.md#dividendsbook) | **PUT** /corporate-action/dividends/{event_id}/book | Dividends Book
*CorporateActionsApi* | [**dividendsCancel**](docs/Api/CorporateActionsApi.md#dividendscancel) | **DELETE** /corporate-action/dividends/{event_id} | Dividends Cancel
*CorporateActionsApi* | [**dividendsCombine**](docs/Api/CorporateActionsApi.md#dividendscombine) | **PUT** /corporate-action/dividends/combine | Dividends Combine
*CorporateActionsApi* | [**dividendsFx**](docs/Api/CorporateActionsApi.md#dividendsfx) | **PUT** /corporate-action/dividends/fx | Dividends Fx
*CorporateActionsApi* | [**dividendsUnbook**](docs/Api/CorporateActionsApi.md#dividendsunbook) | **PUT** /corporate-action/dividends/{event_id}/unbook | Dividends Unbook
*CorporateActionsApi* | [**securityEventCreate**](docs/Api/CorporateActionsApi.md#securityeventcreate) | **POST** /corporate-action/security_events/create | Security Event Create
*CorporateActionsApi* | [**securityEventUpdate**](docs/Api/CorporateActionsApi.md#securityeventupdate) | **PATCH** /corporate-action/dividends/{event_id} | Security Event Update
*CorporateActionsApi* | [**securityEventsRead**](docs/Api/CorporateActionsApi.md#securityeventsread) | **GET** /corporate-action/security_events/ | Security Events Read
*CorporateActionsApi* | [**securityEventsReadDiv**](docs/Api/CorporateActionsApi.md#securityeventsreaddiv) | **GET** /corporate-action/dividends | Security Events Read Div
*CustomIndexApi* | [**assignedClientsRead**](docs/Api/CustomIndexApi.md#assignedclientsread) | **GET** /custom-index/clients/{security_id}/{adviser_firm_ref} | Assigned Clients Read
*CustomIndexApi* | [**assignedInvStrategiesRead**](docs/Api/CustomIndexApi.md#assignedinvstrategiesread) | **GET** /custom-index/strategies/{security_id}/{investment_management_firm_ref} | Assigned Inv Strategies Read
*CustomIndexApi* | [**checkIndexStatus**](docs/Api/CustomIndexApi.md#checkindexstatus) | **GET** /custom-index/status/{index_id} | Check Index Status
*CustomIndexApi* | [**createIndex**](docs/Api/CustomIndexApi.md#createindex) | **POST** /custom-index/create/{investment_management_firm_ref} | Create Index
*CustomIndexApi* | [**customIndexObjectivesUpdate**](docs/Api/CustomIndexApi.md#customindexobjectivesupdate) | **POST** /custom-index/{index_id} | Custom Index Objectives Update
*CustomIndexApi* | [**customIndexRead**](docs/Api/CustomIndexApi.md#customindexread) | **GET** /custom-index/{index_id} | Custom Index Read
*CustomIndexApi* | [**customIndexesRead**](docs/Api/CustomIndexApi.md#customindexesread) | **GET** /custom-index/ | Custom Indexes Read
*CustomIndexApi* | [**deleteIndex**](docs/Api/CustomIndexApi.md#deleteindex) | **DELETE** /custom-index/delete/{index_id}/{investment_management_firm_ref} | Delete Index
*CustomIndexApi* | [**factsheetRead**](docs/Api/CustomIndexApi.md#factsheetread) | **GET** /custom-index/factsheet/{index_id} | Factsheet Read
*CustomIndexApi* | [**filtersRead**](docs/Api/CustomIndexApi.md#filtersread) | **GET** /custom-index/filters | Filters Read
*CustomIndexApi* | [**getIndexPerf**](docs/Api/CustomIndexApi.md#getindexperf) | **GET** /custom-index/perf/{index_id}/ | Get Index Perf
*CustomIndexApi* | [**getIndexWeights**](docs/Api/CustomIndexApi.md#getindexweights) | **GET** /custom-index/weights/{index_id} | Get Index Weights
*CustomIndexApi* | [**industrySecuritiesRead**](docs/Api/CustomIndexApi.md#industrysecuritiesread) | **GET** /custom-indexindustry/{industry_id} | Industry Securities Read
*CustomIndexApi* | [**methodologyRead**](docs/Api/CustomIndexApi.md#methodologyread) | **GET** /custom-index/methodology | Methodology Read
*CustomIndexApi* | [**previewComponents**](docs/Api/CustomIndexApi.md#previewcomponents) | **POST** /custom-index/preview | Preview Components
*CustomIndexApi* | [**universeRead**](docs/Api/CustomIndexApi.md#universeread) | **GET** /custom-index/universe | Universe Read
*FeeAccountsApi* | [**feeAccountLinkAvailableBankAccount**](docs/Api/FeeAccountsApi.md#feeaccountlinkavailablebankaccount) | **PUT** /fee-account/{ref}/bank-account/{iba_ref} | Fee Account Link Available Bank Account
*FeeAccountsApi* | [**feeAccountRead**](docs/Api/FeeAccountsApi.md#feeaccountread) | **GET** /fee-account/{ref} | Fee Account Read
*FeeAccountsApi* | [**feeAccountReadAvailableBankAccounts**](docs/Api/FeeAccountsApi.md#feeaccountreadavailablebankaccounts) | **GET** /fee-account/{ref}/bank-account | Fee Account Read Available Bank Accounts
*FeeAccountsApi* | [**feeAccountTransactionsRead**](docs/Api/FeeAccountsApi.md#feeaccounttransactionsread) | **GET** /fee-account/{ref}/transactions/ | Fee Account Transactions Read
*FeeAccountsApi* | [**feeAccountsRead**](docs/Api/FeeAccountsApi.md#feeaccountsread) | **GET** /fee-account/ | Fee Accounts Read
*FeeSchedulesApi* | [**feeScheduleCreate**](docs/Api/FeeSchedulesApi.md#feeschedulecreate) | **POST** /fee-schedule/ | Fee Schedule Create
*FeeSchedulesApi* | [**feeScheduleUpdate**](docs/Api/FeeSchedulesApi.md#feescheduleupdate) | **PATCH** /fee-schedule/ | Fee Schedule Update
*FeeSchedulesApi* | [**feeSchedulesRead**](docs/Api/FeeSchedulesApi.md#feeschedulesread) | **GET** /fee-schedule/ | Fee Schedules Read
*GoalsApi* | [**goalCashTransactionsRead**](docs/Api/GoalsApi.md#goalcashtransactionsread) | **GET** /goal/{ref}/cash-transaction/ | Goal Cash Transactions Read
*GoalsApi* | [**goalRead**](docs/Api/GoalsApi.md#goalread) | **GET** /goal/{ref} | Goal Read
*GoalsApi* | [**goalReadSecurityTransactions**](docs/Api/GoalsApi.md#goalreadsecuritytransactions) | **GET** /goal/{ref}/security-transaction/ | Goal Read Security Transactions
*GoalsApi* | [**goalsRead**](docs/Api/GoalsApi.md#goalsread) | **GET** /goal/ | Goals Read
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreate**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreate) | **POST** /investment-management-firm/ | Investment Management Firm Create
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateAddress**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateaddress) | **POST** /investment-management-firm/{investment_management_firm_ref}/address/ | Investment Management Firm Create Address
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateAdviserFirmFeeScheduleLink**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateadviserfirmfeeschedulelink) | **POST** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{ref}/fee-schedule-link | Investment Management Firm Create Adviser Firm Fee Schedule Link
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateAdviserFirmInvestmentStrategy**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateadviserfirminvestmentstrategy) | **POST** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/batch | Investment Management Firm Create Adviser Firm Investment Strategy
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateInvestmentManager**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateinvestmentmanager) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-manager/ | Investment Management Firm Create Investment Manager
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateInvestmentManagerAdviserLink**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateinvestmentmanageradviserlink) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-manager/adviser-link | Investment Management Firm Create Investment Manager Adviser Link
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateInvestmentStrategy**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateinvestmentstrategy) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/ | Investment Management Firm Create Investment Strategy
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateInvestmentStrategyGroup**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateinvestmentstrategygroup) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/ | Investment Management Firm Create Investment Strategy Group
*InvestmentManagementFirmsApi* | [**investmentManagementFirmCreateRiskProfileProviderLink**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmcreateriskprofileproviderlink) | **POST** /investment-management-firm/{investment_management_firm_ref}/rpp-link/ | Investment Management Firm Create Risk Profile Provider Link
*InvestmentManagementFirmsApi* | [**investmentManagementFirmDeleteAdviserFirmFeeScheduleLink**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmdeleteadviserfirmfeeschedulelink) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/fee-schedule-link/end/{ref} | Investment Management Firm Delete Adviser Firm Fee Schedule Link
*InvestmentManagementFirmsApi* | [**investmentManagementFirmDeleteAdviserFirmInvestmentStrategy**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmdeleteadviserfirminvestmentstrategy) | **DELETE** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/{ref} | Investment Management Firm Delete Adviser Firm Investment Strategy
*InvestmentManagementFirmsApi* | [**investmentManagementFirmDeleteInvestmentManager**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmdeleteinvestmentmanager) | **DELETE** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref} | Investment Management Firm Delete Investment Manager
*InvestmentManagementFirmsApi* | [**investmentManagementFirmExternalRead**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmexternalread) | **GET** /investment-management-firm/external/{investment_management_firm_ref} | Investment Management Firm External Read
*InvestmentManagementFirmsApi* | [**investmentManagementFirmGenerateOrders**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmgenerateorders) | **POST** /investment-management-firm/{investment_management_firm_ref}/generate-orders | Investment Management Firm Generate Orders
*InvestmentManagementFirmsApi* | [**investmentManagementFirmRead**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmread) | **GET** /investment-management-firm/{investment_management_firm_ref} | Investment Management Firm Read
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadAdviserFirmAdvisers**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadadviserfirmadvisers) | **GET** /investment-management-firm/{investment_management_firm_ref}/advisers | Investment Management Firm Read Adviser Firm Advisers
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadAdviserFirmFeeScheduleLinks**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadadviserfirmfeeschedulelinks) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{ref}/fee-schedule-link | Investment Management Firm Read Adviser Firm Fee Schedule Links
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadAdviserFirmInvestmentStrategies**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadadviserfirminvestmentstrategies) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/ | Investment Management Firm Read Adviser Firm Investment Strategies
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadAdviserFirms**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadadviserfirms) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/ | Investment Management Firm Read Adviser Firms
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadFeeSchedules**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadfeeschedules) | **GET** /investment-management-firm/{investment_management_firm_ref}/fee-schedule | Investment Management Firm Read Fee Schedules
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadInvestmentManagers**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadinvestmentmanagers) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-manager/ | Investment Management Firm Read Investment Managers
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadInvestmentStrategies**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadinvestmentstrategies) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/ | Investment Management Firm Read Investment Strategies
*InvestmentManagementFirmsApi* | [**investmentManagementFirmReadInvestmentStrategyGroups**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmreadinvestmentstrategygroups) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/ | Investment Management Firm Read Investment Strategy Groups
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateAccessInvestmentManager**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateaccessinvestmentmanager) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager-access/{ref} | Investment Management Firm Update Access Investment Manager
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateAddress**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateaddress) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/address/{ref} | Investment Management Firm Update Address
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateDetails**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdatedetails) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/details | Investment Management Firm Update Details
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentManager**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentmanager) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref} | Investment Management Firm Update Investment Manager
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentManagerPassword**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentmanagerpassword) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref}/update-password | Investment Management Firm Update Investment Manager Password
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentStrategy**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentstrategy) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/{ref} | Investment Management Firm Update Investment Strategy
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentStrategyGroup**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentstrategygroup) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{ref} | Investment Management Firm Update Investment Strategy Group
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentstrategygroupinvestmentstrategies) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{investment_strategy_group_ref}/investment-strategy/batch | Investment Management Firm Update Investment Strategy Group Investment Strategies
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateinvestmentstrategygroupinvestmentstrategy) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{investment_strategy_group_ref}/investment-strategy/{investment_strategy_ref} | Investment Management Firm Update Investment Strategy Group Investment Strategy
*InvestmentManagementFirmsApi* | [**investmentManagementFirmUpdateOptions**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmupdateoptions) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/options | Investment Management Firm Update Options
*InvestmentManagementFirmsApi* | [**investmentManagementFirmsExternalRead**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmsexternalread) | **GET** /investment-management-firm/external/ | Investment Management Firms External Read
*InvestmentManagementFirmsApi* | [**investmentManagementFirmsRead**](docs/Api/InvestmentManagementFirmsApi.md#investmentmanagementfirmsread) | **GET** /investment-management-firm/ | Investment Management Firms Read
*InvestmentManagementFirmsApi* | [**investmentStrategyGroupUpdateSortOrders**](docs/Api/InvestmentManagementFirmsApi.md#investmentstrategygroupupdatesortorders) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/sort-order-batch | Investment Strategy Group Update Sort Orders
*InvestmentManagementFirmsApi* | [**investmentStrategyUpdateSortOrders**](docs/Api/InvestmentManagementFirmsApi.md#investmentstrategyupdatesortorders) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/sort-order-batch | Investment Strategy Update Sort Orders
*InvestmentManagementFirmsApi* | [**readAllInvestmentManagers**](docs/Api/InvestmentManagementFirmsApi.md#readallinvestmentmanagers) | **GET** /investment-management-firm/investment-managers/ | Read All Investment Managers
*InvestmentStrategiesApi* | [**investmentStrategiesRead**](docs/Api/InvestmentStrategiesApi.md#investmentstrategiesread) | **GET** /investment-strategy/ | Investment Strategies Read
*InvestmentStrategiesApi* | [**investmentStrategyGroupsRead**](docs/Api/InvestmentStrategiesApi.md#investmentstrategygroupsread) | **GET** /investment-strategy/investment-strategy-group/ | Investment Strategy Groups Read
*InvestmentStrategiesApi* | [**investmentStrategyRead**](docs/Api/InvestmentStrategiesApi.md#investmentstrategyread) | **GET** /investment-strategy/{ref} | Investment Strategy Read
*OAuth2Api* | [**authorize**](docs/Api/OAuth2Api.md#authorize) | **POST** /oauth/authorize | Authorize
*OAuth2Api* | [**createOauthApp**](docs/Api/OAuth2Api.md#createoauthapp) | **POST** /oauth/app | Create Oauth App
*OAuth2Api* | [**deleteOauthApps**](docs/Api/OAuth2Api.md#deleteoauthapps) | **DELETE** /oauth/app | Delete Oauth Apps
*OAuth2Api* | [**readOauthApps**](docs/Api/OAuth2Api.md#readoauthapps) | **GET** /oauth/apps | Read Oauth Apps
*OAuth2Api* | [**redirectToLoginForm**](docs/Api/OAuth2Api.md#redirecttologinform) | **GET** /oauth/authorize | Redirect To Login Form
*OAuth2Api* | [**swapCodeForToken**](docs/Api/OAuth2Api.md#swapcodefortoken) | **POST** /oauth/token | Swap Code For Token
*OAuth2Api* | [**updateOauthApp**](docs/Api/OAuth2Api.md#updateoauthapp) | **PATCH** /oauth/app | Update Oauth App
*PaymentsApi* | [**getUnsettledClientWithdrawalsAuthWrapper**](docs/Api/PaymentsApi.md#getunsettledclientwithdrawalsauthwrapper) | **GET** /payments/outgoing_payments/client_withdrawal_cts | Get Unsettled Client Withdrawals Auth Wrapper
*PensionsApi* | [**pensionEventCancel**](docs/Api/PensionsApi.md#pensioneventcancel) | **DELETE** /pensions/event/{pev_ref} | Pension Event Cancel
*PensionsApi* | [**pensionEventGroupRead**](docs/Api/PensionsApi.md#pensioneventgroupread) | **GET** /pensions/pev_group/{pev_grp_ref} | Pension Event Group Read
*PensionsApi* | [**pensionEventRead**](docs/Api/PensionsApi.md#pensioneventread) | **GET** /pensions/event/{pev_ref} | Pension Event Read
*PensionsApi* | [**pensionEventScheduleCancel**](docs/Api/PensionsApi.md#pensioneventschedulecancel) | **DELETE** /pensions/{pevs_ref} | Pension Event Schedule Cancel
*PensionsApi* | [**pensionEventScheduleCreate**](docs/Api/PensionsApi.md#pensioneventschedulecreate) | **POST** /pensions/ | Pension Event Schedule Create
*PensionsApi* | [**pensionEventScheduleGroupCreate**](docs/Api/PensionsApi.md#pensioneventschedulegroupcreate) | **POST** /pensions/compound | Pension Event Schedule Group Create
*PensionsApi* | [**pensionEventScheduleRead**](docs/Api/PensionsApi.md#pensioneventscheduleread) | **GET** /pensions/{pevs_ref} | Pension Event Schedule Read
*PensionsApi* | [**pensionEventScheduleUpdate**](docs/Api/PensionsApi.md#pensioneventscheduleupdate) | **PATCH** /pensions/{pevs_ref} | Pension Event Schedule Update
*PensionsApi* | [**pensionEventSchedulesGet**](docs/Api/PensionsApi.md#pensioneventschedulesget) | **GET** /pensions/ | Pension Event Schedules Get
*PensionsApi* | [**pensionEventsGet**](docs/Api/PensionsApi.md#pensioneventsget) | **GET** /pensions/event/status/{status} | Pension Events Get
*PensionsApi* | [**pensionScheduleGroupCancel**](docs/Api/PensionsApi.md#pensionschedulegroupcancel) | **DELETE** /pensions/pes_group/{pes_grp_ref} | Pension Schedule Group Cancel
*PensionsApi* | [**pensionScheduleGroupRead**](docs/Api/PensionsApi.md#pensionschedulegroupread) | **GET** /pensions/pes_group/{pes_grp_ref} | Pension Schedule Group Read
*PensionsApi* | [**pensionScheduleGroupReadEvents**](docs/Api/PensionsApi.md#pensionschedulegroupreadevents) | **GET** /pensions/pes_group/{pes_grp_ref}/events | Pension Schedule Group Read Events
*PensionsApi* | [**readPensionEventScheduleGroupsForAccount**](docs/Api/PensionsApi.md#readpensioneventschedulegroupsforaccount) | **GET** /pensions/account/{account_ref}/groups | Read Pension Event Schedule Groups For Account
*PensionsApi* | [**readPensionEventSchedulesForAccount**](docs/Api/PensionsApi.md#readpensioneventschedulesforaccount) | **GET** /pensions/account/{account_ref} | Read Pension Event Schedules For Account
*PensionsApi* | [**readPensionEventsForAccount**](docs/Api/PensionsApi.md#readpensioneventsforaccount) | **GET** /pensions/account/{account_ref}/events | Read Pension Events For Account
*PublicApi* | [**apiHealthCheck**](docs/Api/PublicApi.md#apihealthcheck) | **GET** /public/health-check | Api Health Check
*PublicApi* | [**publicAdviserFirmDownloadLogo**](docs/Api/PublicApi.md#publicadviserfirmdownloadlogo) | **GET** /public/adviser-firm/logo/download | Public Adviser Firm Download Logo
*PublicApi* | [**publicAdviserFirmRead**](docs/Api/PublicApi.md#publicadviserfirmread) | **GET** /public/adviser-firm | Public Adviser Firm Read
*ReferenceApi* | [**referenceReadAssetClasses**](docs/Api/ReferenceApi.md#referencereadassetclasses) | **GET** /reference/asset-class/ | Reference Read Asset Classes
*ReferenceApi* | [**referenceReadCountries**](docs/Api/ReferenceApi.md#referencereadcountries) | **GET** /reference/country/ | Reference Read Countries
*ReferenceApi* | [**referenceReadCurrencies**](docs/Api/ReferenceApi.md#referencereadcurrencies) | **GET** /reference/currency/ | Reference Read Currencies
*ReferenceApi* | [**referenceReadDocumentTypes**](docs/Api/ReferenceApi.md#referencereaddocumenttypes) | **GET** /reference/document-type/ | Reference Read Document Types
*ReportAccessApi* | [**reportCreate**](docs/Api/ReportAccessApi.md#reportcreate) | **POST** /report-access/report/ | Report Create
*ReportAccessApi* | [**reportDelete**](docs/Api/ReportAccessApi.md#reportdelete) | **DELETE** /report-access/report/{ref} | Report Delete
*ReportAccessApi* | [**reportGroupCreate**](docs/Api/ReportAccessApi.md#reportgroupcreate) | **POST** /report-access/report-group/ | Report Group Create
*ReportAccessApi* | [**reportGroupDelete**](docs/Api/ReportAccessApi.md#reportgroupdelete) | **DELETE** /report-access/report-group/{ref} | Report Group Delete
*ReportAccessApi* | [**reportGroupMemberCreate**](docs/Api/ReportAccessApi.md#reportgroupmembercreate) | **POST** /report-access/report-group-member/ | Report Group Member Create
*ReportAccessApi* | [**reportGroupMemberDelete**](docs/Api/ReportAccessApi.md#reportgroupmemberdelete) | **DELETE** /report-access/report-group-member/{report_group_ref}/{report_ref} | Report Group Member Delete
*ReportAccessApi* | [**reportGroupMemberUpdate**](docs/Api/ReportAccessApi.md#reportgroupmemberupdate) | **PATCH** /report-access/report-group-member/ | Report Group Member Update
*ReportAccessApi* | [**reportGroupMembersRead**](docs/Api/ReportAccessApi.md#reportgroupmembersread) | **GET** /report-access/report-group-member | Report Group Members Read
*ReportAccessApi* | [**reportGroupPermissionCreate**](docs/Api/ReportAccessApi.md#reportgrouppermissioncreate) | **POST** /report-access/report-group-permission/ | Report Group Permission Create
*ReportAccessApi* | [**reportGroupPermissionDelete**](docs/Api/ReportAccessApi.md#reportgrouppermissiondelete) | **DELETE** /report-access/report-group-permission/{report_group_ref}/{report_user_group_ref} | Report Group Permission Delete
*ReportAccessApi* | [**reportGroupPermissionForLoginRead**](docs/Api/ReportAccessApi.md#reportgrouppermissionforloginread) | **GET** /report-access/report-group-permission/login/{login_ref} | Report Group Permission For Login Read
*ReportAccessApi* | [**reportGroupPermissionUpdate**](docs/Api/ReportAccessApi.md#reportgrouppermissionupdate) | **PATCH** /report-access/report-group-permission/ | Report Group Permission Update
*ReportAccessApi* | [**reportGroupPermissionsRead**](docs/Api/ReportAccessApi.md#reportgrouppermissionsread) | **GET** /report-access/report-group-permissions | Report Group Permissions Read
*ReportAccessApi* | [**reportGroupUpdate**](docs/Api/ReportAccessApi.md#reportgroupupdate) | **PATCH** /report-access/report-group/ | Report Group Update
*ReportAccessApi* | [**reportGroupsRead**](docs/Api/ReportAccessApi.md#reportgroupsread) | **GET** /report-access/report-group | Report Groups Read
*ReportAccessApi* | [**reportUpdate**](docs/Api/ReportAccessApi.md#reportupdate) | **PATCH** /report-access/report/ | Report Update
*ReportAccessApi* | [**reportUserGroupCreate**](docs/Api/ReportAccessApi.md#reportusergroupcreate) | **POST** /report-access/report-user-group/ | Report User Group Create
*ReportAccessApi* | [**reportUserGroupDelete**](docs/Api/ReportAccessApi.md#reportusergroupdelete) | **DELETE** /report-access/report-user-group/{ref} | Report User Group Delete
*ReportAccessApi* | [**reportUserGroupMemberCreate**](docs/Api/ReportAccessApi.md#reportusergroupmembercreate) | **POST** /report-access/report-user-group-member/ | Report User Group Member Create
*ReportAccessApi* | [**reportUserGroupMemberDelete**](docs/Api/ReportAccessApi.md#reportusergroupmemberdelete) | **DELETE** /report-access/report-user-group-member/{report_user_group_ref}/{login_ref} | Report User Group Member Delete
*ReportAccessApi* | [**reportUserGroupMemberRead**](docs/Api/ReportAccessApi.md#reportusergroupmemberread) | **GET** /report-access/report-user-group-members | Report User Group Member Read
*ReportAccessApi* | [**reportUserGroupMemberUpdate**](docs/Api/ReportAccessApi.md#reportusergroupmemberupdate) | **PATCH** /report-access/report-user-group-member/ | Report User Group Member Update
*ReportAccessApi* | [**reportUserGroupRead**](docs/Api/ReportAccessApi.md#reportusergroupread) | **GET** /report-access/report-user-group | Report User Group Read
*ReportAccessApi* | [**reportUserGroupUpdate**](docs/Api/ReportAccessApi.md#reportusergroupupdate) | **PATCH** /report-access/report-user-group/ | Report User Group Update
*ReportAccessApi* | [**reportsRead**](docs/Api/ReportAccessApi.md#reportsread) | **GET** /report-access/report | Reports Read
*ReportingApi* | [**createReport**](docs/Api/ReportingApi.md#createreport) | **POST** /reporting/ | Create Report
*ReportingApi* | [**getReportingAvailableParameters**](docs/Api/ReportingApi.md#getreportingavailableparameters) | **GET** /reporting/ | Get Reporting Available Parameters
*RiskProfileProvidersApi* | [**riskProfileProviderCreate**](docs/Api/RiskProfileProvidersApi.md#riskprofileprovidercreate) | **POST** /risk-profile-provider/ | Risk Profile Provider Create
*RiskProfileProvidersApi* | [**riskProfileProviderRead**](docs/Api/RiskProfileProvidersApi.md#riskprofileproviderread) | **GET** /risk-profile-provider/{ref} | Risk Profile Provider Read
*RiskProfileProvidersApi* | [**riskProfileProvidersRead**](docs/Api/RiskProfileProvidersApi.md#riskprofileprovidersread) | **GET** /risk-profile-provider/ | Risk Profile Providers Read
*SecuritiesApi* | [**securitiesRead**](docs/Api/SecuritiesApi.md#securitiesread) | **GET** /security/ | Securities Read
*SecuritiesApi* | [**securitiesSearchRead**](docs/Api/SecuritiesApi.md#securitiessearchread) | **GET** /security/search | Securities Search Read
*SecuritiesApi* | [**securityCreateAccess**](docs/Api/SecuritiesApi.md#securitycreateaccess) | **POST** /security/{ref}/access/ | Security Create Access
*SecuritiesApi* | [**securityCreateCost**](docs/Api/SecuritiesApi.md#securitycreatecost) | **POST** /security/{ref}/cost/ | Security Create Cost
*SecuritiesApi* | [**securityCreateNote**](docs/Api/SecuritiesApi.md#securitycreatenote) | **POST** /security/{ref}/note/ | Security Create Note
*SecuritiesApi* | [**securityCreateValuation**](docs/Api/SecuritiesApi.md#securitycreatevaluation) | **POST** /security/{ref}/valuation/ | Security Create Valuation
*SecuritiesApi* | [**securityDeleteAccess**](docs/Api/SecuritiesApi.md#securitydeleteaccess) | **DELETE** /security/{ref}/access/ | Security Delete Access
*SecuritiesApi* | [**securityRead**](docs/Api/SecuritiesApi.md#securityread) | **GET** /security/{ref} | Security Read
*SecuritiesApi* | [**securityReadCosts**](docs/Api/SecuritiesApi.md#securityreadcosts) | **GET** /security/{ref}/cost/ | Security Read Costs
*SecuritiesApi* | [**securityReadNotes**](docs/Api/SecuritiesApi.md#securityreadnotes) | **GET** /security/{ref}/note/ | Security Read Notes
*SecuritiesApi* | [**securityUpdate**](docs/Api/SecuritiesApi.md#securityupdate) | **PATCH** /security/{ref} | Security Update
*TransferApi* | [**transferSubmit**](docs/Api/TransferApi.md#transfersubmit) | **PUT** /transfer/{ref}/submit | Transfer Submit
*TransferProviderApi* | [**transferProviderRead**](docs/Api/TransferProviderApi.md#transferproviderread) | **GET** /transfer-provider/{ref} | Transfer Provider Read
*TransferProviderApi* | [**transferProvidersRead**](docs/Api/TransferProviderApi.md#transferprovidersread) | **GET** /transfer-provider/ | Transfer Providers Read
*ValuationsApi* | [**readCashValuations**](docs/Api/ValuationsApi.md#readcashvaluations) | **GET** /valuation/cash | Read Cash Valuations
*ValuationsApi* | [**readHoldingValuations**](docs/Api/ValuationsApi.md#readholdingvaluations) | **GET** /valuation/holdings | Read Holding Valuations
*ValuationsApi* | [**valuationsRead**](docs/Api/ValuationsApi.md#valuationsread) | **GET** /valuation/ | Valuations Read

## Models

- [AccountCreateSchema](docs/Model/AccountCreateSchema.md)
- [AccountReturnSchema](docs/Model/AccountReturnSchema.md)
- [AccountTypeReturnSchema](docs/Model/AccountTypeReturnSchema.md)
- [AccountUpdateSchema](docs/Model/AccountUpdateSchema.md)
- [AddressType](docs/Model/AddressType.md)
- [AdviserCreateSchema](docs/Model/AdviserCreateSchema.md)
- [AdviserDocumentCreateSchema](docs/Model/AdviserDocumentCreateSchema.md)
- [AdviserDocumentReturnSchema](docs/Model/AdviserDocumentReturnSchema.md)
- [AdviserFirmAddressCreateSchema](docs/Model/AdviserFirmAddressCreateSchema.md)
- [AdviserFirmAddressReturnSchema](docs/Model/AdviserFirmAddressReturnSchema.md)
- [AdviserFirmAddressUpdateSchema](docs/Model/AdviserFirmAddressUpdateSchema.md)
- [AdviserFirmCreateSchema](docs/Model/AdviserFirmCreateSchema.md)
- [AdviserFirmFeeCreateSchema](docs/Model/AdviserFirmFeeCreateSchema.md)
- [AdviserFirmFeeReturnSchema](docs/Model/AdviserFirmFeeReturnSchema.md)
- [AdviserFirmFeeScheduleCreateSchema](docs/Model/AdviserFirmFeeScheduleCreateSchema.md)
- [AdviserFirmFeeScheduleDeleteSchema](docs/Model/AdviserFirmFeeScheduleDeleteSchema.md)
- [AdviserFirmFeeScheduleReturnSchema](docs/Model/AdviserFirmFeeScheduleReturnSchema.md)
- [AdviserFirmFeeType](docs/Model/AdviserFirmFeeType.md)
- [AdviserFirmIntroduceSchema](docs/Model/AdviserFirmIntroduceSchema.md)
- [AdviserFirmInvestmentManagementFirmLinkCreateSchema](docs/Model/AdviserFirmInvestmentManagementFirmLinkCreateSchema.md)
- [AdviserFirmInvestmentManagementFirmLinkReturnSchema](docs/Model/AdviserFirmInvestmentManagementFirmLinkReturnSchema.md)
- [AdviserFirmInvestmentManagementFirmLinkUpdateSchema](docs/Model/AdviserFirmInvestmentManagementFirmLinkUpdateSchema.md)
- [AdviserFirmInvestmentStrategyCreateSchema](docs/Model/AdviserFirmInvestmentStrategyCreateSchema.md)
- [AdviserFirmInvestmentStrategyReturnSchema](docs/Model/AdviserFirmInvestmentStrategyReturnSchema.md)
- [AdviserFirmOptionCreateSchema](docs/Model/AdviserFirmOptionCreateSchema.md)
- [AdviserFirmOptionReturnSchema](docs/Model/AdviserFirmOptionReturnSchema.md)
- [AdviserFirmOptionUpdateSchema](docs/Model/AdviserFirmOptionUpdateSchema.md)
- [AdviserFirmReturnSchema](docs/Model/AdviserFirmReturnSchema.md)
- [AdviserFirmRppLinkCreateSchema](docs/Model/AdviserFirmRppLinkCreateSchema.md)
- [AdviserFirmRppLinkReturnSchema](docs/Model/AdviserFirmRppLinkReturnSchema.md)
- [AdviserFirmType](docs/Model/AdviserFirmType.md)
- [AdviserFirmUpdateSchema](docs/Model/AdviserFirmUpdateSchema.md)
- [AdviserNetworkAddressReturnSchema](docs/Model/AdviserNetworkAddressReturnSchema.md)
- [AdviserNetworkCreateSchema](docs/Model/AdviserNetworkCreateSchema.md)
- [AdviserNetworkFirmLinkCreateSchema](docs/Model/AdviserNetworkFirmLinkCreateSchema.md)
- [AdviserNetworkFirmLinkReturnSchema](docs/Model/AdviserNetworkFirmLinkReturnSchema.md)
- [AdviserNetworkFirmLinkUpdateSchema](docs/Model/AdviserNetworkFirmLinkUpdateSchema.md)
- [AdviserNetworkLoginCreateSchema](docs/Model/AdviserNetworkLoginCreateSchema.md)
- [AdviserNetworkLoginReturnSchema](docs/Model/AdviserNetworkLoginReturnSchema.md)
- [AdviserNetworkReturnSchema](docs/Model/AdviserNetworkReturnSchema.md)
- [AdviserNetworkUpdateSchema](docs/Model/AdviserNetworkUpdateSchema.md)
- [AdviserOptionsCreateSchema](docs/Model/AdviserOptionsCreateSchema.md)
- [AdviserOptionsReturnSchema](docs/Model/AdviserOptionsReturnSchema.md)
- [AdviserOptionsUpdateSchema](docs/Model/AdviserOptionsUpdateSchema.md)
- [AdviserReturnSchema](docs/Model/AdviserReturnSchema.md)
- [AdviserUpdateSchema](docs/Model/AdviserUpdateSchema.md)
- [ApprovalType](docs/Model/ApprovalType.md)
- [AssetClassReturnSchema](docs/Model/AssetClassReturnSchema.md)
- [AssignedClientSchema](docs/Model/AssignedClientSchema.md)
- [AssignedInvStrategySchema](docs/Model/AssignedInvStrategySchema.md)
- [AssociatedUserLinkSchema](docs/Model/AssociatedUserLinkSchema.md)
- [AssociatedUserReturnSchema](docs/Model/AssociatedUserReturnSchema.md)
- [AuthenticationMethodsReturnSchema](docs/Model/AuthenticationMethodsReturnSchema.md)
- [AuthenticationRegisterOTPAppReturnSchema](docs/Model/AuthenticationRegisterOTPAppReturnSchema.md)
- [AutoRebalanceThresholdFrequency](docs/Model/AutoRebalanceThresholdFrequency.md)
- [BaseFilterSchema](docs/Model/BaseFilterSchema.md)
- [BeneficiaryTypeCreateSchema](docs/Model/BeneficiaryTypeCreateSchema.md)
- [BeneficiaryTypeReturnSchema](docs/Model/BeneficiaryTypeReturnSchema.md)
- [BeneficiaryTypeUpdateSchema](docs/Model/BeneficiaryTypeUpdateSchema.md)
- [Broker](docs/Model/Broker.md)
- [BulkActionReturnSchema](docs/Model/BulkActionReturnSchema.md)
- [CashExecAlgo](docs/Model/CashExecAlgo.md)
- [CashTransactionReturnSchema](docs/Model/CashTransactionReturnSchema.md)
- [ClientAddressCreateSchema](docs/Model/ClientAddressCreateSchema.md)
- [ClientAddressReturnSchema](docs/Model/ClientAddressReturnSchema.md)
- [ClientAddressUpdateSchema](docs/Model/ClientAddressUpdateSchema.md)
- [ClientAppCreateSchema](docs/Model/ClientAppCreateSchema.md)
- [ClientAppReturnSchema](docs/Model/ClientAppReturnSchema.md)
- [ClientAppUpdateSchema](docs/Model/ClientAppUpdateSchema.md)
- [ClientAppliedFeeScheduleLinkReturnSchema](docs/Model/ClientAppliedFeeScheduleLinkReturnSchema.md)
- [ClientAppliedFeeSchedulesReturnSchema](docs/Model/ClientAppliedFeeSchedulesReturnSchema.md)
- [ClientCreateSchema](docs/Model/ClientCreateSchema.md)
- [ClientDefaultFeeScheduleLinkReturnSchema](docs/Model/ClientDefaultFeeScheduleLinkReturnSchema.md)
- [ClientDefaultFeeSchedulesReturnSchema](docs/Model/ClientDefaultFeeSchedulesReturnSchema.md)
- [ClientDocumentReturnSchema](docs/Model/ClientDocumentReturnSchema.md)
- [ClientDocumentUpdateSchema](docs/Model/ClientDocumentUpdateSchema.md)
- [ClientFeeScheduleCreateSchema](docs/Model/ClientFeeScheduleCreateSchema.md)
- [ClientFeeScheduleReturnSchema](docs/Model/ClientFeeScheduleReturnSchema.md)
- [ClientFeeScheduleUpdateSchema](docs/Model/ClientFeeScheduleUpdateSchema.md)
- [ClientGroupClientCreateSchema](docs/Model/ClientGroupClientCreateSchema.md)
- [ClientGroupClientReturnSchema](docs/Model/ClientGroupClientReturnSchema.md)
- [ClientGroupClientUpdateSchema](docs/Model/ClientGroupClientUpdateSchema.md)
- [ClientGroupCreateSchema](docs/Model/ClientGroupCreateSchema.md)
- [ClientGroupDefaultFeeScheduleLinkReturnSchema](docs/Model/ClientGroupDefaultFeeScheduleLinkReturnSchema.md)
- [ClientGroupDefaultFeeSchedulesReturnSchema](docs/Model/ClientGroupDefaultFeeSchedulesReturnSchema.md)
- [ClientGroupNestedClientReturnSchema](docs/Model/ClientGroupNestedClientReturnSchema.md)
- [ClientGroupReturnSchema](docs/Model/ClientGroupReturnSchema.md)
- [ClientGroupUpdateSchema](docs/Model/ClientGroupUpdateSchema.md)
- [ClientLeadUpdateSchema](docs/Model/ClientLeadUpdateSchema.md)
- [ClientPhoneNumberCreateSchema](docs/Model/ClientPhoneNumberCreateSchema.md)
- [ClientPhoneNumberReturnSchema](docs/Model/ClientPhoneNumberReturnSchema.md)
- [ClientPhoneNumberUpdateSchema](docs/Model/ClientPhoneNumberUpdateSchema.md)
- [ClientRelationship](docs/Model/ClientRelationship.md)
- [ClientReturnSchema](docs/Model/ClientReturnSchema.md)
- [ClientType](docs/Model/ClientType.md)
- [ClientUpdateSchema](docs/Model/ClientUpdateSchema.md)
- [CombineEventsSchema](docs/Model/CombineEventsSchema.md)
- [ConstraintInfoReturnSchema](docs/Model/ConstraintInfoReturnSchema.md)
- [CountryReturnSchema](docs/Model/CountryReturnSchema.md)
- [CreateIndexSchema](docs/Model/CreateIndexSchema.md)
- [CurrencyReturnSchema](docs/Model/CurrencyReturnSchema.md)
- [CustomError](docs/Model/CustomError.md)
- [CustomIndexBaseSchema](docs/Model/CustomIndexBaseSchema.md)
- [CustomIndexDetailsSchema](docs/Model/CustomIndexDetailsSchema.md)
- [CustomIndexMethodologySchema](docs/Model/CustomIndexMethodologySchema.md)
- [CustomIndexObjectivesSchema](docs/Model/CustomIndexObjectivesSchema.md)
- [CustomIndexStatus](docs/Model/CustomIndexStatus.md)
- [CustomIndexUniverseSchema](docs/Model/CustomIndexUniverseSchema.md)
- [CustomerLinkMethod](docs/Model/CustomerLinkMethod.md)
- [CustomerListAccess](docs/Model/CustomerListAccess.md)
- [DocumentTypeBaseSchema](docs/Model/DocumentTypeBaseSchema.md)
- [DocumentTypeReturnSchema](docs/Model/DocumentTypeReturnSchema.md)
- [DrawdownType](docs/Model/DrawdownType.md)
- [DropNotification](docs/Model/DropNotification.md)
- [EntityClientCreateSchema](docs/Model/EntityClientCreateSchema.md)
- [EntityClientReturnSchema](docs/Model/EntityClientReturnSchema.md)
- [EntityClientUpdateSchema](docs/Model/EntityClientUpdateSchema.md)
- [EntityLeadUpdateSchema](docs/Model/EntityLeadUpdateSchema.md)
- [EvaluateComponentsSchema](docs/Model/EvaluateComponentsSchema.md)
- [FapiDbAdviserAdviserFirmStatus](docs/Model/FapiDbAdviserAdviserFirmStatus.md)
- [FapiDbFeeFeeScheduleFeeType](docs/Model/FapiDbFeeFeeScheduleFeeType.md)
- [FapiDbHelpersEnumsFeeType](docs/Model/FapiDbHelpersEnumsFeeType.md)
- [FapiDbInvstrategyInvStrategyAuditStatus](docs/Model/FapiDbInvstrategyInvStrategyAuditStatus.md)
- [FapiDbInvstrategyInvStrategyStatus](docs/Model/FapiDbInvstrategyInvStrategyStatus.md)
- [FapiDbPensionPensionClientApprovalStatus](docs/Model/FapiDbPensionPensionClientApprovalStatus.md)
- [FapiDbPensionPensionEventGroupStatus](docs/Model/FapiDbPensionPensionEventGroupStatus.md)
- [FapiDbPensionPensionEventScheduleGroupStatus](docs/Model/FapiDbPensionPensionEventScheduleGroupStatus.md)
- [FapiDbPensionPensionEventStatus](docs/Model/FapiDbPensionPensionEventStatus.md)
- [FapiDbSecuritySecurityEventEventType](docs/Model/FapiDbSecuritySecurityEventEventType.md)
- [FapiDbSecuritySecurityEventStatus](docs/Model/FapiDbSecuritySecurityEventStatus.md)
- [FapiDbSecuritySecurityStatus](docs/Model/FapiDbSecuritySecurityStatus.md)
- [FapiDbUserCashTransactionStatus](docs/Model/FapiDbUserCashTransactionStatus.md)
- [FapiDbUserDocumentUserDocumentStatus](docs/Model/FapiDbUserDocumentUserDocumentStatus.md)
- [FapiDbUserPortfolioAccountStatus](docs/Model/FapiDbUserPortfolioAccountStatus.md)
- [FapiDbUserPortfolioStatus](docs/Model/FapiDbUserPortfolioStatus.md)
- [FapiDbUserSecurityTransactionStatus](docs/Model/FapiDbUserSecurityTransactionStatus.md)
- [FapiDbUserUserEventEventType](docs/Model/FapiDbUserUserEventEventType.md)
- [FapiDbUserUserStatus](docs/Model/FapiDbUserUserStatus.md)
- [FeeAccountBalanceReturnSchema](docs/Model/FeeAccountBalanceReturnSchema.md)
- [FeeAccountFirmReturnSchema](docs/Model/FeeAccountFirmReturnSchema.md)
- [FeeAccountPrefix](docs/Model/FeeAccountPrefix.md)
- [FeeAccountReturnSchema](docs/Model/FeeAccountReturnSchema.md)
- [FeeAccountTransactionReturnSchema](docs/Model/FeeAccountTransactionReturnSchema.md)
- [FeeCalculationType](docs/Model/FeeCalculationType.md)
- [FeeChargeFrequency](docs/Model/FeeChargeFrequency.md)
- [FeeChargeFrequencyType](docs/Model/FeeChargeFrequencyType.md)
- [FeeProjectionDataSchema](docs/Model/FeeProjectionDataSchema.md)
- [FeeProjectionSchema](docs/Model/FeeProjectionSchema.md)
- [FeeScheduleConstraintReturnSchema](docs/Model/FeeScheduleConstraintReturnSchema.md)
- [FeeScheduleConstraintsCreateSchema](docs/Model/FeeScheduleConstraintsCreateSchema.md)
- [FeeScheduleCreateSchema](docs/Model/FeeScheduleCreateSchema.md)
- [FeeScheduleReturnSchema](docs/Model/FeeScheduleReturnSchema.md)
- [FeeScheduleTierCreateSchema](docs/Model/FeeScheduleTierCreateSchema.md)
- [FeeScheduleTierReturnSchema](docs/Model/FeeScheduleTierReturnSchema.md)
- [FeeScheduleUpdateSchema](docs/Model/FeeScheduleUpdateSchema.md)
- [FilterTypeEnum](docs/Model/FilterTypeEnum.md)
- [FlexibleIsaLimitSchema](docs/Model/FlexibleIsaLimitSchema.md)
- [Frequency](docs/Model/Frequency.md)
- [FundmentFilterSchema](docs/Model/FundmentFilterSchema.md)
- [FxSchema](docs/Model/FxSchema.md)
- [Gender](docs/Model/Gender.md)
- [GoalMultipleReturnSchema](docs/Model/GoalMultipleReturnSchema.md)
- [GoalReturnSchema](docs/Model/GoalReturnSchema.md)
- [GrantType](docs/Model/GrantType.md)
- [GrantTypeForm](docs/Model/GrantTypeForm.md)
- [HMRCProtectionCreateSchema](docs/Model/HMRCProtectionCreateSchema.md)
- [HMRCProtectionReturnSchema](docs/Model/HMRCProtectionReturnSchema.md)
- [HTTPStatus](docs/Model/HTTPStatus.md)
- [InvStrategyAuditReturnSchema](docs/Model/InvStrategyAuditReturnSchema.md)
- [InvStrategyBenchmarksReturnSchema](docs/Model/InvStrategyBenchmarksReturnSchema.md)
- [InvStrategyGroupCreateSchema](docs/Model/InvStrategyGroupCreateSchema.md)
- [InvStrategyGroupReturnSchema](docs/Model/InvStrategyGroupReturnSchema.md)
- [InvStrategyGroupUpdateSchema](docs/Model/InvStrategyGroupUpdateSchema.md)
- [InvStrategyWeightingLatestReturnSchema](docs/Model/InvStrategyWeightingLatestReturnSchema.md)
- [InvestmentManagementFirmAddressCreateSchema](docs/Model/InvestmentManagementFirmAddressCreateSchema.md)
- [InvestmentManagementFirmAddressReturnSchema](docs/Model/InvestmentManagementFirmAddressReturnSchema.md)
- [InvestmentManagementFirmAddressUpdateSchema](docs/Model/InvestmentManagementFirmAddressUpdateSchema.md)
- [InvestmentManagementFirmCreateSchema](docs/Model/InvestmentManagementFirmCreateSchema.md)
- [InvestmentManagementFirmDetailsUpdateSchema](docs/Model/InvestmentManagementFirmDetailsUpdateSchema.md)
- [InvestmentManagementFirmFeeCreateSchema](docs/Model/InvestmentManagementFirmFeeCreateSchema.md)
- [InvestmentManagementFirmFeeReturnSchema](docs/Model/InvestmentManagementFirmFeeReturnSchema.md)
- [InvestmentManagementFirmOptionsCreateSchema](docs/Model/InvestmentManagementFirmOptionsCreateSchema.md)
- [InvestmentManagementFirmOptionsReturnSchema](docs/Model/InvestmentManagementFirmOptionsReturnSchema.md)
- [InvestmentManagementFirmOptionsUpdateSchema](docs/Model/InvestmentManagementFirmOptionsUpdateSchema.md)
- [InvestmentManagementFirmPublicReturnSchema](docs/Model/InvestmentManagementFirmPublicReturnSchema.md)
- [InvestmentManagementFirmRPPLinkCreateSchema](docs/Model/InvestmentManagementFirmRPPLinkCreateSchema.md)
- [InvestmentManagementFirmRPPLinkReturnSchema](docs/Model/InvestmentManagementFirmRPPLinkReturnSchema.md)
- [InvestmentManagementFirmReturnSchema](docs/Model/InvestmentManagementFirmReturnSchema.md)
- [InvestmentManagementFirmRppCreateSchema](docs/Model/InvestmentManagementFirmRppCreateSchema.md)
- [InvestmentManagementFirmRppReturnSchema](docs/Model/InvestmentManagementFirmRppReturnSchema.md)
- [InvestmentManagementFirmStatus](docs/Model/InvestmentManagementFirmStatus.md)
- [InvestmentManagementFirmType](docs/Model/InvestmentManagementFirmType.md)
- [InvestmentManagementGenerateOrdersSchema](docs/Model/InvestmentManagementGenerateOrdersSchema.md)
- [InvestmentManagerCreateAdviserLinkSchema](docs/Model/InvestmentManagerCreateAdviserLinkSchema.md)
- [InvestmentManagerCreateSchema](docs/Model/InvestmentManagerCreateSchema.md)
- [InvestmentManagerReturnSchema](docs/Model/InvestmentManagerReturnSchema.md)
- [InvestmentManagerUpdateSchema](docs/Model/InvestmentManagerUpdateSchema.md)
- [InvestmentStrategyGroupInvestmentStrategyUpdateSchema](docs/Model/InvestmentStrategyGroupInvestmentStrategyUpdateSchema.md)
- [InvestmentStrategyReturnSchema](docs/Model/InvestmentStrategyReturnSchema.md)
- [InvestmentStrategyUpdateSchema](docs/Model/InvestmentStrategyUpdateSchema.md)
- [InviteListAccess](docs/Model/InviteListAccess.md)
- [IsaLimitCreateSchema](docs/Model/IsaLimitCreateSchema.md)
- [IsaLimitReturnSchema](docs/Model/IsaLimitReturnSchema.md)
- [IsaLimitUpdateSchema](docs/Model/IsaLimitUpdateSchema.md)
- [LatestValuationReturnSchema](docs/Model/LatestValuationReturnSchema.md)
- [LinkedAdviserFirmReturnSchema](docs/Model/LinkedAdviserFirmReturnSchema.md)
- [LoginReturnSchema](docs/Model/LoginReturnSchema.md)
- [MFAPeriodDrop](docs/Model/MFAPeriodDrop.md)
- [MfaIpWhitelistCreateSchema](docs/Model/MfaIpWhitelistCreateSchema.md)
- [MfaIpWhitelistReturnSchema](docs/Model/MfaIpWhitelistReturnSchema.md)
- [NestedAccountReturnSchema](docs/Model/NestedAccountReturnSchema.md)
- [NestedAccountUserSchema](docs/Model/NestedAccountUserSchema.md)
- [NestedAdviserFirmReturnSchema](docs/Model/NestedAdviserFirmReturnSchema.md)
- [NestedAssetClassReturnSchema](docs/Model/NestedAssetClassReturnSchema.md)
- [NestedClientAddressCreateSchema](docs/Model/NestedClientAddressCreateSchema.md)
- [NestedClientReturnSchema](docs/Model/NestedClientReturnSchema.md)
- [NestedFeeAccountReturnSchema](docs/Model/NestedFeeAccountReturnSchema.md)
- [NestedFeeScheduleReturnSchema](docs/Model/NestedFeeScheduleReturnSchema.md)
- [NestedGoalAccountUserSchema](docs/Model/NestedGoalAccountUserSchema.md)
- [NestedGoalCreateSchema](docs/Model/NestedGoalCreateSchema.md)
- [NestedGoalReturnSchema](docs/Model/NestedGoalReturnSchema.md)
- [NestedInstitutionBankAccountReturnSchema](docs/Model/NestedInstitutionBankAccountReturnSchema.md)
- [NestedInvStrategyCreateSchema](docs/Model/NestedInvStrategyCreateSchema.md)
- [NestedInvStrategyReturnSchema](docs/Model/NestedInvStrategyReturnSchema.md)
- [NestedInvestmentManagementFirmReturnSchema](docs/Model/NestedInvestmentManagementFirmReturnSchema.md)
- [NestedLoginReturnSchema](docs/Model/NestedLoginReturnSchema.md)
- [NestedPensionEventGroupReturnSchema](docs/Model/NestedPensionEventGroupReturnSchema.md)
- [NestedPensionEventReturnSchema](docs/Model/NestedPensionEventReturnSchema.md)
- [NestedPensionEventScheduleGroupReturnSchema](docs/Model/NestedPensionEventScheduleGroupReturnSchema.md)
- [NestedPensionEventScheduleReturnSchema](docs/Model/NestedPensionEventScheduleReturnSchema.md)
- [NestedSecurityAccessCreateSchema](docs/Model/NestedSecurityAccessCreateSchema.md)
- [NestedSecurityAccessReturnSchema](docs/Model/NestedSecurityAccessReturnSchema.md)
- [NestedSecurityReturnSchema](docs/Model/NestedSecurityReturnSchema.md)
- [NestedSecuritySchema](docs/Model/NestedSecuritySchema.md)
- [NestedTransferProviderReturnSchema](docs/Model/NestedTransferProviderReturnSchema.md)
- [NumberType](docs/Model/NumberType.md)
- [OAuthError](docs/Model/OAuthError.md)
- [PageValuationReturnSchema](docs/Model/PageValuationReturnSchema.md)
- [PasswordUpdateSchema](docs/Model/PasswordUpdateSchema.md)
- [PensionAccountInfoReturnSchema](docs/Model/PensionAccountInfoReturnSchema.md)
- [PensionAccountInfoUpsertSchema](docs/Model/PensionAccountInfoUpsertSchema.md)
- [PensionClientApprovalReturnSchema](docs/Model/PensionClientApprovalReturnSchema.md)
- [PensionEventGroupReturnSchema](docs/Model/PensionEventGroupReturnSchema.md)
- [PensionEventReturnSchema](docs/Model/PensionEventReturnSchema.md)
- [PensionEventScheduleCreateSchema](docs/Model/PensionEventScheduleCreateSchema.md)
- [PensionEventScheduleGroupReturnSchema](docs/Model/PensionEventScheduleGroupReturnSchema.md)
- [PensionEventScheduleReturnSchema](docs/Model/PensionEventScheduleReturnSchema.md)
- [PensionEventScheduleUpdateSchema](docs/Model/PensionEventScheduleUpdateSchema.md)
- [PensionEventTaxInfoReturnSchema](docs/Model/PensionEventTaxInfoReturnSchema.md)
- [PensionNotesReturnSchema](docs/Model/PensionNotesReturnSchema.md)
- [PensionTypes](docs/Model/PensionTypes.md)
- [PortfolioFeeProjectionReturnSchema](docs/Model/PortfolioFeeProjectionReturnSchema.md)
- [ProtectionType](docs/Model/ProtectionType.md)
- [PublicAdviserFirmReturnSchema](docs/Model/PublicAdviserFirmReturnSchema.md)
- [ReducedAccountReturnSchema](docs/Model/ReducedAccountReturnSchema.md)
- [ReducedAdviserFirmReturnSchema](docs/Model/ReducedAdviserFirmReturnSchema.md)
- [ReducedAdviserReturnSchema](docs/Model/ReducedAdviserReturnSchema.md)
- [ReducedInvestmentManagementReturnSchema](docs/Model/ReducedInvestmentManagementReturnSchema.md)
- [ReducedLoginReturnSchema](docs/Model/ReducedLoginReturnSchema.md)
- [ReducedNestedInvStrategyReturnSchema](docs/Model/ReducedNestedInvStrategyReturnSchema.md)
- [ReportCreateSchema](docs/Model/ReportCreateSchema.md)
- [ReportGroupCreateSchema](docs/Model/ReportGroupCreateSchema.md)
- [ReportGroupMemberCreateSchema](docs/Model/ReportGroupMemberCreateSchema.md)
- [ReportGroupMemberReturnSchema](docs/Model/ReportGroupMemberReturnSchema.md)
- [ReportGroupMemberUpdateSchema](docs/Model/ReportGroupMemberUpdateSchema.md)
- [ReportGroupPermissionCreateSchema](docs/Model/ReportGroupPermissionCreateSchema.md)
- [ReportGroupPermissionReturnSchema](docs/Model/ReportGroupPermissionReturnSchema.md)
- [ReportGroupPermissionUpdateSchema](docs/Model/ReportGroupPermissionUpdateSchema.md)
- [ReportGroupReturnSchema](docs/Model/ReportGroupReturnSchema.md)
- [ReportGroupUpdateSchema](docs/Model/ReportGroupUpdateSchema.md)
- [ReportInstanceCreateSchema](docs/Model/ReportInstanceCreateSchema.md)
- [ReportReturnSchema](docs/Model/ReportReturnSchema.md)
- [ReportType](docs/Model/ReportType.md)
- [ReportUpdateSchema](docs/Model/ReportUpdateSchema.md)
- [ReportUserGroupCreateSchema](docs/Model/ReportUserGroupCreateSchema.md)
- [ReportUserGroupMemberCreateSchema](docs/Model/ReportUserGroupMemberCreateSchema.md)
- [ReportUserGroupMemberReturnSchema](docs/Model/ReportUserGroupMemberReturnSchema.md)
- [ReportUserGroupMemberUpdateSchema](docs/Model/ReportUserGroupMemberUpdateSchema.md)
- [ReportUserGroupReturnSchema](docs/Model/ReportUserGroupReturnSchema.md)
- [ReportUserGroupUpdateSchema](docs/Model/ReportUserGroupUpdateSchema.md)
- [ReportingStatus](docs/Model/ReportingStatus.md)
- [RiskProfileCreateSchema](docs/Model/RiskProfileCreateSchema.md)
- [RiskProfileProviderCreateSchema](docs/Model/RiskProfileProviderCreateSchema.md)
- [RiskProfileProviderReturnSchema](docs/Model/RiskProfileProviderReturnSchema.md)
- [RiskProfileReturnSchema](docs/Model/RiskProfileReturnSchema.md)
- [RiskQuestionnaireReturnSchema](docs/Model/RiskQuestionnaireReturnSchema.md)
- [RiskQuestionnaireType](docs/Model/RiskQuestionnaireType.md)
- [Roles](docs/Model/Roles.md)
- [SecurityAccessRefType](docs/Model/SecurityAccessRefType.md)
- [SecurityAttributeReturnSchema](docs/Model/SecurityAttributeReturnSchema.md)
- [SecurityAttributeUpdateSchema](docs/Model/SecurityAttributeUpdateSchema.md)
- [SecurityCategory](docs/Model/SecurityCategory.md)
- [SecurityCostCreateSchema](docs/Model/SecurityCostCreateSchema.md)
- [SecurityCostReturnSchema](docs/Model/SecurityCostReturnSchema.md)
- [SecurityEventCreateSchema](docs/Model/SecurityEventCreateSchema.md)
- [SecurityEventNotesBaseSchema](docs/Model/SecurityEventNotesBaseSchema.md)
- [SecurityEventReturnSchema](docs/Model/SecurityEventReturnSchema.md)
- [SecurityEventUpdateSchema](docs/Model/SecurityEventUpdateSchema.md)
- [SecurityMarketCapSchema](docs/Model/SecurityMarketCapSchema.md)
- [SecurityNoteCreateSchema](docs/Model/SecurityNoteCreateSchema.md)
- [SecurityNoteReturnSchema](docs/Model/SecurityNoteReturnSchema.md)
- [SecurityReturnSchema](docs/Model/SecurityReturnSchema.md)
- [SecuritySearchSchema](docs/Model/SecuritySearchSchema.md)
- [SecurityTransactionReturnSchema](docs/Model/SecurityTransactionReturnSchema.md)
- [SecurityUpdateSchema](docs/Model/SecurityUpdateSchema.md)
- [SecurityValuationCreateSchema](docs/Model/SecurityValuationCreateSchema.md)
- [SecurityValuationReturnSchema](docs/Model/SecurityValuationReturnSchema.md)
- [SortOrderUpdateSchema](docs/Model/SortOrderUpdateSchema.md)
- [SuccessResponseSchema](docs/Model/SuccessResponseSchema.md)
- [TaxStatus](docs/Model/TaxStatus.md)
- [TokenSchema](docs/Model/TokenSchema.md)
- [TransactionType](docs/Model/TransactionType.md)
- [TransferFeeSchema](docs/Model/TransferFeeSchema.md)
- [TransferProviderOptionReturnSchema](docs/Model/TransferProviderOptionReturnSchema.md)
- [TransferProviderReturnSchema](docs/Model/TransferProviderReturnSchema.md)
- [TransferProviderSupportedAccountReturnSchema](docs/Model/TransferProviderSupportedAccountReturnSchema.md)
- [TransferProviderSwiftAddressReturnSchema](docs/Model/TransferProviderSwiftAddressReturnSchema.md)
- [TransferProviderSwiftOrganisationReturnSchema](docs/Model/TransferProviderSwiftOrganisationReturnSchema.md)
- [Type](docs/Model/Type.md)
- [TypeFromAny](docs/Model/TypeFromAny.md)
- [TypeFromCrystallised](docs/Model/TypeFromCrystallised.md)
- [TypeFromUncrystallised](docs/Model/TypeFromUncrystallised.md)
- [UserEventNoteReturnSchema](docs/Model/UserEventNoteReturnSchema.md)
- [UserEventReturnSchema](docs/Model/UserEventReturnSchema.md)
- [UserRelationship](docs/Model/UserRelationship.md)
- [ValuationReturnSchema](docs/Model/ValuationReturnSchema.md)
- [VerificationMethodSendOTP](docs/Model/VerificationMethodSendOTP.md)
- [WeightingType](docs/Model/WeightingType.md)
- [WrapperFeeProjectionSchema](docs/Model/WrapperFeeProjectionSchema.md)
- [WrapperType](docs/Model/WrapperType.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2PasswordBearerCookie

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3`
    - Generator version: `7.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
