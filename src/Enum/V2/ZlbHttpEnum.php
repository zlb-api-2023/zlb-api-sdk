<?php


namespace Zlb\SDK\Enum\V2;


class ZlbHttpEnum
{
    // 发布极速任务
    const PUBLISH_FAST_TASK = '/task/api/v2/publishOldTask';

    // 上传文件
    const GET_FILE_UPLOAD = '/fe/api/file/upload';

    // 注册个人用户
    const REGISTER_PERSONAL_USER = '/fe/api/register';

    // 注册个人用户
    const PERSONAL_USER_AUTH = '/fe/api/getAuth';

    // 个人实名认证地址获取
    const GET_PERSONAL_AUTH_URL = '/fe/api/professional/getAuthUrl';

    // 个人认证状态查询
    const GET_AUTH_STATE = '/fe/api/auth/authState';

    // 完善个人信息和银行卡信息
    const GET_USERINFO_PERFECT = '/fe/api/perfect';

    // 获取文件预览地址
    const GET_PREVIEW_URL = '/fe/api/file/getPreviewUrl';

    // 查询企业所属的行业信息
    const GET_Enterprise_TRADES_TREE = '/task/api/getAllTradesTree';

    // 查询极速任务情况
    const GET_FAST_TASK_INFO = '/task/api/oldTaskInfo';

    // 下载支付凭证
    const GET_PAYMENT_DOCUMENT = '/task/api/pay/getPaymentDocument';

    // 查询用户注册认证及协议进度信息
    const GET_USER_PROGRESS = '/fe/api/getUserProgress';

    // 换绑个人用户的手机
    const CHANGE_MOBILE = '/fe/api/changeMobile';

    // 注销个人用户
    const DELETE_USER = '/fe/api/deleteUser';

    // 用户提供认证数据进行认证
    const SUBMIT_PROFESSIONAL = '/fe/api/auth/professional';

    // 上传个人信息，个人认证时自动回填；
    const AUTH_ID_CARD_CHECK = '/fe/api/auth/idCardCheck';

    // 微信小程序实名认证
    const WX_GET_TOKEN_BY_AUTH = '/fe/api/professional/getTokenByAuth';

    // 获取用户信息
    const GET_PERSON_INFO = '/fe/api/auth/v1/getPersonInfo';

    // 编辑企业开票信息
    const SAVE_INVOICE_INFO = '/invoice/api/companyInvoice/saveInvoiceInfo';

    // 企业账户余额查询
    const GET_ACCOUNT_BALANCE = '/fe/api/company/getAccountBalance';

    // 修改个人收款方式
    const MODIFY_PAY_WAY_AND_ACCOUNT  = '/fe/api/auth/modifyPayWayAndAccount';

}