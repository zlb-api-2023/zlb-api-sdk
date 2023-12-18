<?php


namespace Zlb\SDK;


use Zlb\SDK\Enum\V2\ZlbHttpEnum;
use Zlb\SDK\Fields\FastTaskInviteUserListField;
use Zlb\SDK\Fields\FastTaskInvoiceObjField;
use Zlb\SDK\Fields\FastTaskTaskObjField;

/**
 * 极速任务
 * Class ZlbFastTask
 * @package Zlb\SDK
 */
class ZlbFastTask extends ZlbBase
{

    use FastTaskTaskObjField;
    use FastTaskInviteUserListField;

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
     * 发布极速任务
     * @return array
     */
    public function publishFastTask(): array
    {
        $url = $this->url . ZlbHttpEnum::PUBLISH_FAST_TASK;
        $data = [
            'taskObj' => $this->getTaskObj(),
            'oldTaskInviteUserList' => $this->getInviteUserList(),
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 发布极速任务V3
     * @return array
     */
    public function publishFastTaskV3(): array
    {
        $url = $this->url . ZlbHttpEnum::PUBLISH_FAST_TASK_V3;
        $data = [
            'taskObj' => $this->getTaskObj(),
            'oldTaskInviteUserList' => $this->getInviteUserList(),
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 获取个人用户实名信息
     * @param int $taskId 任务ID
     * @return array
     */
    public function getFastTaskProcessInfo(int $taskId): array
    {
        $url = $this->url . ZlbHttpEnum::GET_FAST_TASK_INFO;
        $data = [
            'taskId' => $taskId,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 下载支付凭证
     * @param  string  $auth
     * @param  int  $taskId  任务ID
     * @return array
     */
    public function getPaymentDocument(string $auth,int $taskId): array
    {
        $url = $this->url . ZlbHttpEnum::GET_PAYMENT_DOCUMENT;
        $data = [
            'auth' => $auth,
            'taskId' => $taskId,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }
}