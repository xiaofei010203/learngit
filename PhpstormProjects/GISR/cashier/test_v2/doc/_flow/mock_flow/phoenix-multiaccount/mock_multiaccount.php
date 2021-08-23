<?php

function mock_multiaccount_queryAccountsV2(&$步骤, $args){
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountInfos'=>[


        ],
    ), $args['步骤参数']);

    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryAccountsV2',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'AccountInfoReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}


function mock_multiaccount_queryAccountsV2forTwoSubAccount(&$步骤, $args){
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountInfos'=>[
            ["accountID"=>"100001000000100000473",
                "subAccountType"=>100,
                "userID"=>"562950053421446",
                "partnerID"=>"2160000000",
                "accountType"=>2,
                "userPhone"=>"",
                "productLine"=>523,
                "availableAmount"=>-213644,
                "realAmount"=>-213644,
                "accountStatus"=>0,
                "remark"=>"{\"remark\":\"{\\\"remark\\\":\\\"MultiAccountService.createUserAccount\\\"}\"}",
                "accountUnfreezeTime"=>0,
                "creditLimitInfo"=>
                    ["creditLimit"=>0,
                        "updateRemark"=>null],
                "currency"=>"MXN"],

            ["accountID"=>"100001000000100000474",
                "subAccountType"=>107,
                "userID"=>"562950053421446",
                "partnerID"=>"2160000000",
                "accountType"=>2,
                "userPhone"=>"",
                "productLine"=>523,
                "availableAmount"=>-213644,
                "realAmount"=>-213644,
                "accountStatus"=>0,
                "remark"=>"{\"remark\":\"{\\\"remark\\\":\\\"MultiAccountService.createUserAccount\\\"}\"}",
                "accountUnfreezeTime"=>0,
                "creditLimitInfo"=>
                    ["creditLimit"=>0,
                        "updateRemark"=>null],
                "currency"=>"MXN"],


        ],
    ), $args['步骤参数']);

    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryAccountsV2',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'AccountInfoReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}

function mock_multiaccount_queryAccounts(&$步骤, $args){
    $mock_response = 参数合并(array(
            'errorNo'=>200,
            'errorMsg'=>'success',
            'accountInfos'=>[],
    ), $args['步骤参数']);

    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryAccounts',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'AccountInfoReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];  
}
function mockAssert_multiaccount_queryAccounts(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountInfos'=>[],
    ), $args['步骤参数']['returnMsg']);

    $assert_expect_input = $args['步骤参数']['assertInput'];

    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryAccounts',
            'mock_response'=>$mock_response,
            'assert_input'=>$assert_expect_input,
            'mock_response_type'=>'AccountInfoReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}
function mockAssert_multiaccount_queryTrans(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountTransList'=>[]
    ), $args['步骤参数']['returnMsg']);

    $assert_expect_input = $args['步骤参数']['assertInput'];
    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryTrans',
            'mock_response'=>$mock_response,
            'assert_input'=>$assert_expect_input,
            'mock_response_type'=>'AccountTransInfo',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}
function mockAssert_multiaccount_queryBalance(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountInfos'=>[]
    ), $args['步骤参数']['returnMsg']);

    $assert_expect_input = $args['步骤参数']['assertInput'];
    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryBalance',
            'mock_response'=>$mock_response,
            'assert_input'=>$assert_expect_input,
            'mock_response_type'=>'AccountInfoReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}
function mock_multiaccount_queryTrans(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'accountTransList'=>[]
    ), $args['步骤参数']);

    $步骤[] = [
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'queryTrans',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'AccountTransInfo',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤描述'=>isset($args['步骤描述'])?$args['步骤描述']:'',
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}

function mock_createAccount(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'extraValueMap'=>[
            'accountID'=>'100001000000100000473',
        ]
    ), $args['步骤参数']['returnMsg']);

    $步骤[] = [
        '步骤描述'=>$args['步骤描述'],
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'createAccount',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'ReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}

function mockAssert_createAccount(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'extraValueMap'=>[
            'accountID'=>'100001000000100000473',
        ]
    ), $args['步骤参数']['returnMsg']);

    $步骤[] = [
        '步骤描述'=>$args['步骤描述'],
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'createAccount',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'ReturnMsg',
            'assert_input' => $args['步骤参数']['assertInput'],
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}

function mock_updateAccount(&$步骤, $args)
{
    $mock_response = 参数合并(array(
        'errorNo'=>200,
        'errorMsg'=>'success',
        'extraValueMap'=>[
            'accountID'=>'100001000000100000473',
        ]
    ), $args['步骤参数']['returnMsg']);

    $步骤[] = [
        '步骤描述'=>$args['步骤描述'],
        '步骤参数'=>[
            'mock_idl_file'=>'Account/MultiAccount.thrift',
            'mock_function_name'=>'updateAccount',
            'mock_response'=>$mock_response,
            'mock_response_type'=>'ReturnMsg',
            'mock_server_alias'=>'disf!ibt-pay-phoenix-account',
            'idl_include_dir'=>THRIFT_IDL_DIR,
        ],
        '步骤函数'=>'_ws.steps.mock_common.mock_common_thrift',
    ];
}


function mock_createAccount_返回成功(&$步骤)
{	
 mock_createAccount($步骤, [
    '步骤描述' => '设置mock createAccount: 返回accountID',
    '步骤参数' => [
        'returnMsg' => [
            'errorNo' => 200,
            'errorMsg' => 'success',
            'extraValueMap' => [
                'accountID'=>'100001000000100000473',
            ]
        ]
    ]
]);
}
?>
