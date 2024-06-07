<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START merchantapi_v1beta_generated_UserService_DeleteUser_sync]
use Google\ApiCore\ApiException;
use Google\Shopping\Merchant\Accounts\V1beta\Client\UserServiceClient;
use Google\Shopping\Merchant\Accounts\V1beta\DeleteUserRequest;

/**
 * Deletes a Merchant Center account user. Executing this method requires
 * admin access.
 *
 * @param string $formattedName The name of the user to delete.
 *                              Format: `accounts/{account}/users/{email}`
 *
 *                              It is also possible to delete the user corresponding to the caller by using
 *                              `me` rather than an email address as in `accounts/{account}/users/me`. Please see
 *                              {@see UserServiceClient::userName()} for help formatting this field.
 */
function delete_user_sample(string $formattedName): void
{
    // Create a client.
    $userServiceClient = new UserServiceClient();

    // Prepare the request message.
    $request = (new DeleteUserRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $userServiceClient->deleteUser($request);
        printf('Call completed successfully.' . PHP_EOL);
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = UserServiceClient::userName('[ACCOUNT]', '[EMAIL]');

    delete_user_sample($formattedName);
}
// [END merchantapi_v1beta_generated_UserService_DeleteUser_sync]