<?php
/*
 * This file is part of the zlb package
 *
 * Copyright (c) 2022.  <541575093@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Zlb\SDK;


use Zlb\SDK\Enum\v2\ZlbHttpEnum;

/**
 * ZLB常用字典
 * Class ZlbDictionaries
 * @package Zlb\SDK
 */
class ZlbDictionaries extends ZlbBase
{

    /**
     * ZlbFastTask constructor.
     * @param string $url 请求的url 域名
     * @param string $aesKey aes 加密的key
     * @param string $aesIv aes 加密的偏移量
     * @param string $sign 签名 用于鉴权的
     */
    public function __construct(string $url, string $aesKey, string $aesIv, string $sign)
    {
        parent::__construct($url, $aesKey, $aesIv, $sign);
    }

    /**
     * 上传文件
     * @param string $fileName
     * @param string $fileBlog base64后的文件
     * @return array
     */
    public function uploadFile(string $fileName, string $fileBlog): array
    {
        $url = $this->url . ZlbHttpEnum::GET_FILE_UPLOAD;
        $data = [
            'name' => $fileName,
            'file' => $fileBlog,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 预览文件
     * @param string $fileId
     * @return array
     */
    public function previewFile($fileId): array
    {
        $url = $this->url . ZlbHttpEnum::GET_PREVIEW_URL;
        $data = [
            'fileId' => $fileId
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 获取企业可用的所有行业数据
     * @return array
     */
    public function getEnterpriseTrades(): array
    {
        $url = $this->url . ZlbHttpEnum::GET_Enterprise_TRADES_TREE;

        return $this->sendRequest($url, [], $this->sign);
    }
}