<?php


namespace Zlb\SDK\Client;


trait HttpClient
{
    /**
     * 发送调用接口的请求
     * @param string $url
     * @param array $data
     * @param string $sign
     * @return array
     */
    public function sendRequest(string $url, array $data, string $sign): array
    {
        $strData = str_replace("\\/", "/", json_encode($data, JSON_UNESCAPED_UNICODE));//替换转义斜杠
        $encryptData = $this->encrypt($strData);
        $sendData = [
            'sign' => $sign,
            'data' => $encryptData,
        ];
        $sendData = json_encode($sendData, JSON_UNESCAPED_UNICODE);
        $result = $this->sendHttpRequest($url, $sendData);
        $resultArr = json_decode($result, true);
        if (is_array($resultArr) && count($resultArr) > 0) {
            if (isset($resultArr['succeed']) && $resultArr['succeed']) {
                return [
                    'code' => 10000,
                    'succeed' => true,
                    'msg' => '操作成功',
                    'data' => isset($resultArr['data']) ? (json_decode($this->decrypt($resultArr['data']), true) ?: $this->decrypt($resultArr['data'])) : [],
                    'error' => null,
                ];
            } else {
                return [
                    'code' => $resultArr['code'] ?? 100200,
                    'succeed' => false,
                    'msg' => $resultArr['msg'] ?? '操作失败',
                    'data' => $resultArr['data'] ?? [],
                    'error' => $resultArr['error'] ?? '操作失败',
                ];
            }
        }
        return [
            'code' => 100200,
            'succeed' => false,
            'msg' => '接口调用失败',
            'data' => $result,
            'error' => '接口调用失败'
        ];
    }

    /**
     * curl post 请求
     * @param string $url
     * @param string $params
     * @return bool|string
     */
    public function sendHttpRequest(string $url, string $params)
    {
        $header = [
            'Content-type:application/json;',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//        curl_setopt($ch, CURLOPT_SSLVERSION, 3);
//        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}