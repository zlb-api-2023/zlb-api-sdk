<?php


namespace Zlb\SDK;


use Zlb\SDK\AES\AesUtils;
use Zlb\SDK\Client\HttpClient;

class ZlbBase
{
    use AesUtils;
    use HttpClient;

    /**
     * 请求的url 域名
     * @var string
     */
    protected $url;

    /**
     * aes 加密的key
     * @var string
     */
    protected $aesKey;

    /**
     * aes 加密的偏移量
     * @var string
     */
    protected $aesIv;

    /**
     * 签名 用于鉴权的
     * @var string
     */
    protected $sign;

    /**
     * ZlbBase constructor.
     * @param string $url 请求的url 域名
     * @param string $aesKey aes 加密的key
     * @param string $aesIv aes 加密的偏移量
     * @param string $sign 签名 用于鉴权的
     */
    public function __construct(string $url, string $aesKey, string $aesIv, string $sign)
    {
        $this->url = $url;
        $this->aesKey = $aesKey;
        $this->aesIv = $aesIv;
        $this->sign = $sign;
    }


    /**
     * @return string
     */
    public function getAesKey(): string
    {
        return $this->aesKey;
    }

    /**
     * @param string $aesKey
     * @return ZlbBase
     */
    public function setAesKey(string $aesKey): ZlbBase
    {
        $this->aesKey = $aesKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getAesIv(): string
    {
        return $this->aesIv;
    }

    /**
     * @param string $aesIv
     * @return ZlbBase
     */
    public function setAesIv(string $aesIv): ZlbBase
    {
        $this->aesIv = $aesIv;
        return $this;
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return $this->sign;
    }

    /**
     * @param string $sign
     * @return ZlbBase
     */
    public function setSign(string $sign): ZlbBase
    {
        $this->sign = $sign;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ZlbBase
     */
    public function setUrl(string $url): ZlbBase
    {
        $this->url = $url;
        return $this;
    }


}