<?php
/**
 * This file is part of the zlb package
 *
 * Copyright (c) 2021.  <541575093@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Zlb\Tests;

use PHPUnit\Framework\TestCase;
use Zlb\SDK\ZlbFastTask;

class ZlbFastTaskTest extends TestCase
{

    protected $aesKey = '6fe2260374e14099';
    protected $aesIv = 'f4c43522801949ff';
    protected $sign = '18137af8210f9977';
    protected $zlbUrl = 'http://api.localtest.zlbzb.cn';

    protected $zlbFastTask;
    protected $taskId = '1366996989550333954';

    protected function setUp(): void
    {
        parent::setUp();

        $this->zlbFastTask = new ZlbFastTask($this->zlbUrl, $this->aesKey, $this->aesIv, $this->sign);
    }

    public function testGetFastTaskProcessInfo()
    {
        $response = $this->zlbFastTask->getFastTaskProcessInfo($this->taskId);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testPublishFastTask()
    {
        $oldTaskInviteUserList = [
            [
                'realName' => '测试',
                'amt' => 1122,// 单位分
                'mobile' => '13333333302',
                'note' => '测试',
                'attachmentIds' => [
                    "1342715461476814850"
                ],
                'attachmentUrl' => 'https://baidu.com',// 附件地址 非必填
                'appid' => '',// 微信收款账户appid
                'openid' => '',// 微信收款账户openid
                'idCard' => '',// 身份证号码
            ]
        ];
        $taskObj = [
            'water' => rand(100000,999999),// 流水号
            'returnUrl' => 'https://baidu.com',
            'tradeId' => 67,// 场景
            'title' => 'sdk-测试20210301',
            'content' => 'sdk-测试20210301wt-测试20210301',
            'requirement' => '不限',
            'taskAddress' => '不限',
            'deliveryRequirement' => '不限',
            'isAutoInvoice' => false, // 任务完成自动开票（True:自动开票（默认）False：不自动开票）
            'bounty' => 1122,// 单位分
        ];

        $this->zlbFastTask->setInviteUserList($oldTaskInviteUserList)->setTaskObj($taskObj);

        $response = $this->zlbFastTask->publishFastTask();

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);
        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('taskId', $response['data']);

    }


}
