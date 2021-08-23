<?php
require_once '../../flow.php';
删除flow文件();

$步骤 = [];
设置apollo全部生效($步骤, []);

通用数据准备($步骤,[
    '步骤参数' => [
        '插入数据库表' => [
            'gulfstream' => [
                'g_driver' => ['join_model' => 1],
            ]
        ],
        '清除数据库表' => [
            'usertrans44' => [
                'u_user_account6'
            ],
            'account_b' => [
                'user_account_logs_956'
            ]
        ]
    ]
]);
mock_multiaccount_queryAccountsV2forTwoSubAccount($步骤,
    [   '步骤描述' => '设置mock phoneix get accout(针对墨西哥坏帐两个账户)',
        '步骤参数' => [
           [
            'errorNo'=>200,
            'errorMsg'=>null,
            'accountInfos'=>[

//                [
//                    'accountID'=>100001000000100000473,
//                    'subAccountType'=>100,
//                    'userID'=>'562950053421446',
//                    'partnerID'=>2160000000,
//                    'accountType'=>2,
//                    'userPhone'=>'',
//                    'productLine'=>523,
//                    'availableAmount'=>-213644,
//                    'realAmount'=>100,
//                    'accountStatus'=>0,
//                    'remark'=>'{"remark":"{\\"remark\\":\\"MultiAccountService.createUserAccount\\"}"}',
//                    'accountUnfreezeTime'=>0,
//                    'creditLimitInfo'=>
//                        ['creditLimit'=>0,
//                            'updateRemark'=>null],
//                    'currency'=>'MXN'
//                ],
//                [
//                    'accountID'=>100001000000100000474,
//                    'subAccountType'=>107,
//                    'userID'=>'562950053421446',
//                    'partnerID'=>2160000000,
//                    'accountType'=>2,
//                    'userPhone'=>'',
//                    'productLine'=>523,
//                    'availableAmount'=>-213644,
//                    'realAmount'=>-200,
//                    'accountStatus'=>0,
//                    'remark'=>'{"remark":"{\\"remark\\":\\"MultiAccountService.createUserAccount\\"}"}',
//                    'accountUnfreezeTime'=>0,
//                    'creditLimitInfo'=>
//                        ['creditLimit'=>0,
//                            'updateRemark'=>null],
//                    'currency'=>'MXN'
//                ]

            ]


]]]

);

mock_getAccount($步骤, [
    '步骤描述' => '设置mock phoneix get accout',
    '步骤参数' => [
        'returnMsg' => [
            'errorNo' => 200,
            'errorMsg' => 'success',
            'userBalance' => [
                'userID' => '562950053421446',
                'amount' => 3000,
                'userStatus' => 1,
                'isExist' => 1,
            ]
        ]
    ]
]);

mockAssert_multiaccount_queryAccounts($步骤, [
    '步骤描述' =>'设置mock phoneix accout queryTrans',
    '步骤参数' => [
        'assertInput'=>[
            'userID' => '562950053421446',
            'accountType' => 2,
        ],
        'returnMsg' =>[
            'errno'=>0,
            'errorNo'=>200,
            'errorMsg'=>'success',
            'accountInfos'=>[
                [
                    'accountID' => '100001000000100000473',
                    'subAccountType' => 100,
                    'userID' => '562950053421446',
                    'partnerID' => '5140000000',
                    'accountType' => 1,
                    'availableAmount' => 200,
                    'realAmount' => 200,
                    'currency' => 'CNY'
                ],
                [
                    'accountID' => '100001000000100000474',
                    'subAccountType' => 107,
                    'userID' => '562950053421446',
                    'partnerID' => '5140000000',
                    'accountType' => 1,
                    'availableAmount' => -300,
                    'realAmount' => -300,
                    'currency' => 'CNY'
                ],
            ],
        ]
    ]
]);

mockAssert_multiaccount_queryTrans($步骤, [
    '步骤描述' =>'设置mock mockAssert_multiaccount_queryTrans',
    '步骤参数' => [

        'returnMsg' =>[
            'errorNo'=>200,
            'errorMsg'=>'success',
            'accountTransList'=>[
                ['id'=>121,"accountID"=>"100001000000100000473","subAccountType"=>100,"userID"=>"562950053421446","partnerID"=>"2160000000","accountType"=>2,"userName"=>"Jose Juan Juarez Nunez","userPhone"=>"","partnerAccountID"=>"1000040130791516947647","partnerSubAccountType"=>100,"partnerUserID"=>"1516947647","partnerAccountType"=>4,"partnerPartnerID"=>"2160000000","partnerUserName"=>"\u58a8\u897f\u54e5\u5feb\u8f66\u53f8\u673a\u5956\u52b1","partnerUserPhone"=>"+5212211647311","amount"=>100,"beforeBalance"=>-169162,"afterBalance"=>-164999,"transactionId"=>"216_202108129783642001574992","billId"=>17897871,"transactionType"=>7,"transactionDesc"=>"\u6536\u5230\u8f66\u8d39","inOutType"=>51,"actionType"=>45,"bankCard"=>"11","productLine"=>216,"createTime"=>1628727136000,"remark"=>"{\"caller\":\"\",\"remark\":\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\"}","businessType"=>"11","subTitle"=>"","currency"=>"MXN","attach"=>"{\"driver_id\":\"650911139825848\",\"o_driver_id\":\"650911139825848\"}","extraMap"=>null],
                ['id'=>122,"accountID"=>"100001000000100000474","subAccountType"=>107,"userID"=>"562950053421446","partnerID"=>"2160000000","accountType"=>2,"userName"=>"Jose Juan Juarez Nunez","userPhone"=>"","partnerAccountID"=>"1000040130791516947647","partnerSubAccountType"=>107,"partnerUserID"=>"1516947647","partnerAccountType"=>4,"partnerPartnerID"=>"2160000000","partnerUserName"=>"\u58a8\u897f\u54e5\u5feb\u8f66\u53f8\u673a\u5956\u52b1","partnerUserPhone"=>"+5212211647311","amount"=>-200,"beforeBalance"=>-169162,"afterBalance"=>-164999,"transactionId"=>"216_202108129783642001574992","billId"=>17897871,"transactionType"=>7,"transactionDesc"=>"\u6536\u5230\u8f66\u8d39","inOutType"=>51,"actionType"=>45,"bankCard"=>"11","productLine"=>216,"createTime"=>1628727136000,"remark"=>"{\"caller\":\"\",\"remark\":\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\"}","businessType"=>"11","subTitle"=>"","currency"=>"MXN","attach"=>"{\"driver_id\":\"650911139825848\",\"o_driver_id\":\"650911139825848\"}","extraMap"=>null]

            ],
        ],
        'assertInput'=>[
            'userID' => '562950053421446',
            'accountType' => 2,
        ]
    ]
]);


插入数据库表($步骤, [
    'account_b'=>[
        'user_account_logs_956'=>array_merge(insert_account_logs_953(),[
            'user_id'=> '100000473',
            'sub_type'=>100,
            'amount'=>200,
        ]),
    ]

]);

插入数据库表($步骤, [
    'account_b'=>[
        'user_account_logs_956'=>array_merge(insert_account_logs_953(),[
            'user_id'=> '100000473',
            'sub_type'=>107,
            'amount'=>250,
        ]),
    ]

]);

clinet_showRelationBalance($步骤, [
    '步骤描述' => 'showRelationBalance-driver-AU-61030100',
    '步骤参数' => [
        'start_time'=>'2021-05-13 22:44:57',
        'end_time'=>'2021-05-15 22:44:57',
        'partner_type' => 1, //2司机ID ,1车头
        'user_type' => 14,
        'user_id'=>'100000473',
        "partner_id" => "650911194798493",
    ],
    '验证结果' => [
        响应应该包含([
            'msg' => '',
            'errno' => 0,
            'data'=>[
                'balance' => '-4.50',
                'balance_display' => '-$4.50',
                'trans'=>[
                    '2021-05-14'=>[
                        'list'=>[
                            [
                                'amount_split'=>[
                                    "-$",
                                    "2.50",
                                    0,
                                    "-$2.50"

                                ]
                            ],
                            [
                                'amount_split'=>[
                                    "-$",
                                    "2.00",
                                    0,
                                    "-$2.00"

                                ]
                            ],
                        ]
                    ]
                ]
            ]



        ])
    ],
],["lang"=>"es-MX", 'locale' => 'es-MX','driverUtcOffset' => '-300','location_cityid' => '52090100']);



account_showTransForMisV2($步骤, [
    '步骤描述' => '发起请求:account/showTransForMisV2,验证返回值',
    '步骤参数' => [
        'userid' => '562950053421446',
    ],
    '验证结果' => [
        响应应该包含('{"errorNo":200,"errorMsg":"success","errno":0,"errmsg":"success","userTransList":[{"id":121,"accountID":"100001000000100000473","subAccountType":100,"userID":"562950053421446","partnerID":"2160000000","accountType":2,"userName":"Jose Juan Juarez Nunez","userPhone":"","partnerAccountID":"1000040130791516947647","partnerSubAccountType":100,"partnerUserID":"1516947647","partnerAccountType":4,"partnerPartnerID":"2160000000","partnerUserName":"\\\\u58a8\\\\u897f\\\\u54e5\\\\u5feb\\\\u8f66\\\\u53f8\\\\u673a\\\\u5956\\\\u52b1","partnerUserPhone":"+5212211647311","amount":100,"beforeBalance":-169162,"afterBalance":-164999,"transactionId":"216_202108129783642001574992","billId":17897871,"transactionType":7,"transactionDesc":"Trip Earnings","inOutType":51,"actionType":45,"bankCard":"11","productLine":216,"createTime":1628727136000,"remark":"{\\"caller\\":\\"\\",\\"remark\\":\\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\\"}","businessType":"11","subTitle":"","currency":"MXN","attach":"{\\"driver_id\\":\\"650911139825848\\",\\"o_driver_id\\":\\"650911139825848\\"}","extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ=="},{"id":122,"accountID":"100001000000100000474","subAccountType":107,"userID":"562950053421446","partnerID":"2160000000","accountType":2,"userName":"Jose Juan Juarez Nunez","userPhone":"","partnerAccountID":"1000040130791516947647","partnerSubAccountType":107,"partnerUserID":"1516947647","partnerAccountType":4,"partnerPartnerID":"2160000000","partnerUserName":"\\\\u58a8\\\\u897f\\\\u54e5\\\\u5feb\\\\u8f66\\\\u53f8\\\\u673a\\\\u5956\\\\u52b1","partnerUserPhone":"+5212211647311","amount":-200,"beforeBalance":-169162,"afterBalance":-164999,"transactionId":"216_202108129783642001574992","billId":17897871,"transactionType":7,"transactionDesc":"Trip Earnings","inOutType":51,"actionType":45,"bankCard":"11","productLine":216,"createTime":1628727136000,"remark":"{\\"caller\\":\\"\\",\\"remark\\":\\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\\"}","businessType":"11","subTitle":"","currency":"MXN","attach":"{\\"driver_id\\":\\"650911139825848\\",\\"o_driver_id\\":\\"650911139825848\\"}","extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ=="},{"id":121,"accountID":"100001000000100000473","subAccountType":100,"userID":"562950053421446","partnerID":"2160000000","accountType":2,"userName":"Jose Juan Juarez Nunez","userPhone":"","partnerAccountID":"1000040130791516947647","partnerSubAccountType":100,"partnerUserID":"1516947647","partnerAccountType":4,"partnerPartnerID":"2160000000","partnerUserName":"\\\\u58a8\\\\u897f\\\\u54e5\\\\u5feb\\\\u8f66\\\\u53f8\\\\u673a\\\\u5956\\\\u52b1","partnerUserPhone":"+5212211647311","amount":100,"beforeBalance":-169162,"afterBalance":-164999,"transactionId":"216_202108129783642001574992","billId":17897871,"transactionType":7,"transactionDesc":"Trip Earnings","inOutType":51,"actionType":45,"bankCard":"11","productLine":216,"createTime":1628727136000,"remark":"{\\"caller\\":\\"\\",\\"remark\\":\\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\\"}","businessType":"11","subTitle":"","currency":"MXN","attach":"{\\"driver_id\\":\\"650911139825848\\",\\"o_driver_id\\":\\"650911139825848\\"}","extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ=="},{"id":122,"accountID":"100001000000100000474","subAccountType":107,"userID":"562950053421446","partnerID":"2160000000","accountType":2,"userName":"Jose Juan Juarez Nunez","userPhone":"","partnerAccountID":"1000040130791516947647","partnerSubAccountType":107,"partnerUserID":"1516947647","partnerAccountType":4,"partnerPartnerID":"2160000000","partnerUserName":"\\\\u58a8\\\\u897f\\\\u54e5\\\\u5feb\\\\u8f66\\\\u53f8\\\\u673a\\\\u5956\\\\u52b1","partnerUserPhone":"+5212211647311","amount":-200,"beforeBalance":-169162,"afterBalance":-164999,"transactionId":"216_202108129783642001574992","billId":17897871,"transactionType":7,"transactionDesc":"Trip Earnings","inOutType":51,"actionType":45,"bankCard":"11","productLine":216,"createTime":1628727136000,"remark":"{\\"caller\\":\\"\\",\\"remark\\":\\"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==&1&\\"}","businessType":"11","subTitle":"","currency":"MXN","attach":"{\\"driver_id\\":\\"650911139825848\\",\\"o_driver_id\\":\\"650911139825848\\"}","extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ=="}],"info":{"list":[{"id":121,"from":"+5212211647311","action_type":"Trip Earnings","amount":100,"trans_type":51,"_create_time":"2021-08-12 08:12:16","order_type":216,"extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==","remark":""},{"id":122,"from":"+5212211647311","action_type":"Trip Earnings","amount":-200,"trans_type":51,"_create_time":"2021-08-12 08:12:16","order_type":216,"extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==","remark":""},{"id":121,"from":"+5212211647311","action_type":"Trip Earnings","amount":100,"trans_type":51,"_create_time":"2021-08-12 08:12:16","order_type":216,"extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==","remark":""},{"id":122,"from":"+5212211647311","action_type":"Trip Earnings","amount":-200,"trans_type":51,"_create_time":"2021-08-12 08:12:16","order_type":216,"extraMap":null,"orderid":"TVRRME1UUTBOamc0T1RRek1EZzNOemN3TUE9PQ==","remark":""}]}}')
    ]
]);

产生flow文件(__FILE__, $步骤);
