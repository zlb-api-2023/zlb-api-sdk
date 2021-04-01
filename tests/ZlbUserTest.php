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
use Zlb\SDK\ZlbUser;

class ZlbUserTest extends TestCase
{

    protected $aesKey = '6fe2260374e14099';
    protected $aesIv = 'f4c43522801949ff';
    protected $sign = '18137af8210f9977';
    protected $zlbUrl = 'http://api.localtest.zlbzb.cn';

    protected $zlbUser;
    protected $zlbMobile = '15600000012';
    protected $zlbPassword = '123456';
    protected $auth = 'f141a4635bc24185';
    protected $returnUrl = 'https://baidu.com';

    protected function setUp(): void
    {
        parent::setUp();

        $this->zlbUser = new ZlbUser($this->zlbUrl, $this->aesKey, $this->aesIv, $this->sign);
    }

    public function testRegister()
    {
        $response = $this->zlbUser->register($this->zlbMobile, $this->zlbPassword);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }

    public function testGetPersonalUserAuth()
    {
        $response = $this->zlbUser->getPersonalUserAuth($this->zlbMobile, $this->zlbPassword);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);
        $this->assertEquals($this->auth, $response['data']);

    }

    public function testGetPersonalAuthUrl()
    {
        $response = $this->zlbUser->getPersonalAuthUrl($this->auth, $this->returnUrl);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testGetPersonalAuthH5Url()
    {
        $response = $this->zlbUser->getPersonalAuthH5Url($this->auth, $this->returnUrl);

        echo $response['data'] . PHP_EOL;
        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testGetPersonalAuthState()
    {
        $response = $this->zlbUser->getPersonalAuthState($this->auth);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testPerfectPersonalInfo()
    {
        $response = $this->zlbUser->perfectPersonalInfo($this->auth,
            '平安银行',
            '6000333000011112222',
            '500000',
            '500100',
            '500112',
            '北大资源财富森林12栋',
            52,
            '程序员'
        );

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }

    public function testGetProtocolUrl()
    {
        $response = $this->zlbUser->getProtocolUrl($this->auth, $this->returnUrl);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }

    public function testGetUserProgress()
    {
        $response = $this->zlbUser->getUserProgress($this->auth);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testPersonalChangeMobile()
    {
        $response = $this->zlbUser->personalChangeMobile('123456','123456123');

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }

    public function testDeletePerson()
    {
        $response = $this->zlbUser->deletePerson('123456');

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }

    public function testGetPersonRealInfo()
    {
        $response = $this->zlbUser->getPersonRealInfo($this->auth);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);

    }
}
