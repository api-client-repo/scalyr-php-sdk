# Scalyr\ScalyrApi

All URIs are relative to *https://www.scalyr.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserToGroup**](ScalyrApi.md#addUserToGroup) | **POST** /addUsersToGroup | This method adds one or more users to a group.



## addUserToGroup

> \Scalyr\Model\UpdateUsers addUserToGroup($users_to_group_request)

This method adds one or more users to a group.

This method adds one or more users to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Scalyr\Api\ScalyrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$users_to_group_request = new \Scalyr\Model\UsersToGroup(); // \Scalyr\Model\UsersToGroup | Users that need to be added to the group

try {
    $result = $apiInstance->addUserToGroup($users_to_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScalyrApi->addUserToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_to_group_request** | [**\Scalyr\Model\UsersToGroup**](../Model/UsersToGroup.md)| Users that need to be added to the group |

### Return type

[**\Scalyr\Model\UpdateUsers**](../Model/UpdateUsers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

