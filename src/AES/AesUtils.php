<?php


namespace Zlb\SDK\AES;


trait AesUtils
{

    /**
     * 字符串加密
     * @param string $input
     * @return string
     */
    public function encrypt(string $input)
    {
        return base64_encode(openssl_encrypt($input, 'AES-128-CBC', $this->aesKey, OPENSSL_RAW_DATA, $this->aesIv));
    }

    /**
     * 字符串解密
     * @param string $input
     * @return false|string
     */
    public function decrypt(string $input)
    {
        return openssl_decrypt(base64_decode($input), 'AES-128-CBC', $this->aesKey, OPENSSL_RAW_DATA, $this->aesIv);
    }
}