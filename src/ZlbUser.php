<?php


namespace Zlb\SDK;


use Zlb\SDK\Enum\V2\ZlbHttpEnum;
use Zlb\SDK\Fields\IdCard\IdCardCheckField;
use Zlb\SDK\Fields\SaveInvoiceInfoField;
use Zlb\SDK\Fields\SubmitProfessionalField;

/**
 * 用户相关
 * Class ZlbFastTask
 * @package Zlb\SDK
 */
class ZlbUser extends ZlbBase
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
     * 注册个人用户并获取auth（如果用户已注册并且属于当前企业邀请的则直接返回auth）
     * @param string $mobile
     * @param string|null $password 密码（不传的话系统随机生成密码）
     * @return array
     */
    public function register(string $mobile, ?string $password = null): array
    {
        $url = $this->url . ZlbHttpEnum::REGISTER_PERSONAL_USER;
        $data = [
            'mobile' => $mobile,
            'password' => $password,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 获取个人信息（姓名及收款方式）
     * @param  string  $auth
     * @return array
     */
    public function getPersonInfo(string $auth): array
    {
        $url = $this->url . ZlbHttpEnum::GET_PERSON_INFO;
        $data = [
            'auth' => $auth,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 获取个人用户的auth
     * @param string $mobile
     * @param string $password
     * @return array
     */
    public function getPersonalUserAuth(string $mobile, string $password): array
    {
        $url = $this->url . ZlbHttpEnum::PERSONAL_USER_AUTH;
        $data = [
            'mobile' => $mobile,
            'password' => $password,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 个人用户实名认证地址获取（页面）
     * @param  string  $auth  个人用户注册后data返回的auth
     * @param  string  $returnUrl  实名认证成功后 回调的地址
     * @param  string  $callbackUrl
     * @return array
     */
    public function getPersonalAuthH5Url(string $auth, string $returnUrl, string $callbackUrl = ''): array
    {
        $url = $this->url . ZlbHttpEnum::GET_PERSONAL_AUTH_URL;
        $data = [
            'auth' => $auth,
            'returnUrl' => urlencode($returnUrl),
            'callbackUrl' => urlencode($callbackUrl),
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }


    /**
     * 个人用户实名认证状态查询
     * @param string $auth 个人用户注册后data返回的auth
     * @return array
     */
    public function getPersonalAuthState(string $auth): array
    {
        $url = $this->url . ZlbHttpEnum::GET_AUTH_STATE;
        $data = [
            'auth' => $auth,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }


    /**
     * 完善个人信息和银行卡信息
     * @param string $auth 个人用户注册后data返回的auth
     * @param string $bankName 开户行名称
     * @param string $bankAccount 开户行账号
     * @param string|null $provinceId 省 通过 查询所有省及其市一二级区域树、查询区域信息、根据编码获取所有上级区域列表、根据编码获取下一级区域列表接口获取id
     * @param string|null $cityId 市
     * @param string|null $areaId 区
     * @param string|null $address 详细地址
     * @param int|null $cateId 擅长行业id
     * @param string|null $fullTimeWork 全职工作
     * @return array
     */
    public function perfectPersonalInfo(string $auth,
                                                string $bankName,
                                                string $bankAccount,
                                                string $provinceId,
                                                string $cityId,
                                                string $areaId,
                                                string $address,
                                                int $cateId,
                                                string $fullTimeWork): array
    {
        $url = $this->url . ZlbHttpEnum::GET_USERINFO_PERFECT;
        $data = [
            'auth' => $auth,
            'bankName' => $bankName,
            'bankAccount' => $bankAccount,
            'provinceId' => $provinceId,
            'cityId' => $cityId,
            'areaId' => $areaId,
            'address' => $address,
            'cateId' => $cateId,
            'fullTimeWork' => $fullTimeWork,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 微信小程序实名认证
     * @param string $auth 个人用户注册后data返回的auth
     * @param string $callbackUrl 个人认证结果回调地址URL
     * @return array
     */
    public function getWxAuthUrl(string $auth, string $callbackUrl): array
    {
        $url = $this->url . ZlbHttpEnum::WX_GET_TOKEN_BY_AUTH;
        $data = [
            'auth' => $auth,
            'callbackUrl' => $callbackUrl,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }


    /**
     * 查询用户注册认证及协议进度信息
     * @param string $auth 个人用户注册后data返回的auth
     * @return array
     */
    public function getUserProgress(string $auth): array
    {
        $url = $this->url . ZlbHttpEnum::GET_USER_PROGRESS;
        $data = [
            'auth' => $auth,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 换绑个人用户的手机
     * @param string $auth 个人用户注册后data返回的auth
     * @param string $newMobile 新的手机号
     * @return array
     */
    public function personalChangeMobile(string $auth, string $newMobile): array
    {
        $url = $this->url . ZlbHttpEnum::CHANGE_MOBILE;
        $data = [
            'auth' => $auth,
            'newMobile' => $newMobile,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }


    /**
     * 注销个人用户
     * @param string $auth 个人用户注册后data返回的auth
     * @return array
     */
    public function deletePerson(string $auth): array
    {
        $url = $this->url . ZlbHttpEnum::DELETE_USER;
        $data = [
            'auth' => $auth,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 用户提供认证数据进行认证
     * @param string $auth 个人用户注册后data返回的auth
     * @param SubmitProfessionalField $professionalField 实名认证需要的信息
     * @return array
     */
    public function submitProfessional(string $auth, SubmitProfessionalField $professionalField): array
    {
        $url = $this->url . ZlbHttpEnum::SUBMIT_PROFESSIONAL;
        $data = $professionalField->getProfessionalData();
        $data['auth'] = $auth;

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 上传个人信息，个人认证时自动回填；
     * @param string $auth 个人用户注册后data返回的auth
     * @param IdCardCheckField $idCardCheckField 上传个人信息 需要的信息
     * @return array
     */
    public function idCardCheck(string $auth, IdCardCheckField $idCardCheckField): array
    {
        $url = $this->url . ZlbHttpEnum::AUTH_ID_CARD_CHECK;
        $data = $idCardCheckField->getIdCardCheckData();
        $data['auth'] = $auth;

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 编辑企业开票信息
     * @param  SaveInvoiceInfoField  $field
     * @return array
     */
    public function saveInvoiceInfo(SaveInvoiceInfoField $field): array
    {
        $url = $this->url . ZlbHttpEnum::SAVE_INVOICE_INFO;
        $data = $field->getInvoiceInfoData();

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 企业账户余额查询
     * @return array
     */
    public function getAccountBalance(): array
    {
        $url = $this->url . ZlbHttpEnum::GET_ACCOUNT_BALANCE;

        return $this->sendRequest($url, [], $this->sign);
    }

    /**
     * 修改个人收款方式
     * @param  string  $auth
     * @param  int  $payWay
     * @param  string|null  $receiveAccount
     * @param  string|null  $bankName
     * @param  string|null  $bankDepositName
     * @return array
     */
    public function modifyPayWayAndAccount(
        string $auth,
        int $payWay,
        ?string $receiveAccount = null,
        ?string $bankName = null,
        ?string $bankDepositName = null
    ): array
    {
        $url = $this->url . ZlbHttpEnum::MODIFY_PAY_WAY_AND_ACCOUNT;
        $data = [
            'auth' => $auth,
            'payWay' => $payWay,
            'receiveAccount' => $receiveAccount,
            'bankName' => $bankName,
            'bankDepositName' => $bankDepositName,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }
}