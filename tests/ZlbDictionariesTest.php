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
use Zlb\SDK\ZlbDictionaries;

class ZlbDictionariesTest extends TestCase
{

    protected $aesKey = 'cbf3ba46288b4c62';
    protected $aesIv = '28e7460e8d2f49f5';
    protected $sign = '388113c8f5ba5cbc';
    protected $zlbUrl = 'http://api.localtest.zlbzb.cn';

    protected $zlbDictionaries;

    protected function setUp(): void
    {
        parent::setUp();

        $this->zlbDictionaries = new ZlbDictionaries($this->zlbUrl, $this->aesKey, $this->aesIv, $this->sign);
    }

    public function testUploadFile()
    {
        $fileName = 'test.ico';
        $fileBlog = 'iVBORw0KGgoAAAANSUhEUgAAAI0AAABXCAIAAAC2mVG7AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKrSURBVHhe7dwxcptAAEZhlLNYKTI5AT6BlEaVW3eoNIdwlwaVVpfWlZqIE4QTeFIY3QUvsKAFAZInM8y+zP81NjKs7X1itVbhRVEUgXjvi/0oflMnBnViUCcGdWJQJwZ1YlAnBnViUCcGdWJQJwZ1YlAnBnViUCcGdWJQJwZ1YlAnBnViUCcGdWJQJwZ1YlAnBnViUCcGdWJQJwZ1YlAnBnViUCcGdWLwqNNpd7+YsE3teRfS7WJxvzvZo2Hl4AMjjDzsn5k7lVPaGpjb6FgMyZPQnjBk9XKMsvhxqlT6M86izcoeEdmZmMUxCsIkPx8EzmEdY6JT86XpZq528PKSMDlOXuj+JB6atVNPWcqZnisBRhLeoPd9XBPPDb94to/45LpnllH31cW82lyupel2vbefktmZmF819/+w2tjrj/l5hDyv1jZ30GqpTdr11hx2ngq6n6aZZ/4yzsLk19Pd1Y1eV33/mBtpGX9PkuD1PTAjNH4/m+1C8vC6bPYo6eHNfI+v1RdLq020XyM2eH2214zsIjZ0K9329C5fb+qzyvPP45wfr2+jdvzOkXMW6H6auZNtNDI13dm9TTvtnfnv6o1rDpsT1WlIOZUT02Ijjhm7sL1sdOReJwem05yvT+lhbyblZfSvzbunP/anulDO9LelPa/jtHuMM/v5f2zGTqf3tyDYr+1+oHHtDZ+KKRw+/HA2DIZ9a8NsJ5r7YXOoHvnMNiH/m4309439Hf1SLZAuZ9lqlrmpVa7WnnGx7jkrLGLVKwr9n0QGz96PkBHqxKBODOrEoE4M6sSgTgzqxKBODOrEoE4M6sSgTgzqxKBODOrEoE4M6sSgTgzqxKBODOrEoE4M6sSgTgzqxKBODOrEoE4M6sSgTgzqxKBODOrEoE4M6sSgTgRB8AF6CfEPASa1zAAAAABJRU5ErkJggg==';
        $response = $this->zlbDictionaries->uploadFile($fileName, $fileBlog);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testPreviewFile()
    {
        $fileId = '1367028052270227457';
        $response = $this->zlbDictionaries->previewFile($fileId);

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

    public function testGetEnterpriseTrades()
    {
        $response = $this->zlbDictionaries->getEnterpriseTrades();

        echo json_encode($response,JSON_UNESCAPED_UNICODE);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(10000, $response['code']);

    }

}
