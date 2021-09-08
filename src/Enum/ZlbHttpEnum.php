<?php


namespace Zlb\SDK\Enum;


class ZlbHttpEnum
{
    // 发布极速任务
    const PUBLISH_FAST_TASK = '/task/api/publishOldTask';

    // 上传文件
    const GET_FILE_UPLOAD = '/fe/api/file/upload';

    // 注册个人用户
    const REGISTER_PERSONAL_USER = '/fe/api/register';

    // 注册个人用户
    const PERSONAL_USER_AUTH = '/fe/api/getAuth';

    // 个人实名认证地址获取
    const GET_PERSONAL_AUTH = '/fe/api/auth/personal';

    // 个人实名认证地址获取
    const GET_PERSONAL_AUTH_URL = '/fe/api/professional/getAuthUrl';

    // 个人认证状态查询
    const GET_AUTH_STATE = '/fe/api/auth/authState';

    // 获取签订协议地址
    const GET_QUERY_SIGNATURE = '/fe/api/protocol/protocolQuery';

    // 完善个人信息和银行卡信息
    const GET_USERINFO_PERFECT = '/fe/api/perfect';

    // 获取文件预览地址
    const GET_PREVIEW_URL = '/fe/api/file/getPreviewUrl';

    // 银行字典查询
    const GET_BANK_NAMES = '/fe/api/auth/getBankNames';

    // 银行字典分页查询
    const GET_BANK_NAMES_PAGE = '/fe/api/auth/getBankNamesPage';

    // 查询所有省及其市一二级区域树
    const GET_PROVINCE_CITIES = '/fe/api/area/province/cities';

    // 查询区域信息
    const GET_AREA_BY_CODE = '/fe/api/area/areaByCode';

    // 根据编码获取所有上级区域列表
    const GET_FATHER_BY_CODE = '/fe/api/area/fatherByCode';

    // 根据编码获取下一级区域列表
    const GET_CHILDREN_BY_CODE = '/fe/api/area/childrenByCode';

    // 学校字典
    const GET_SCHOOLS = '/fe/api/school/getSchools';

    // 学校字典分页
    const GET_SCHOOL_PAGE = '/fe/api/school/getSchoolPage';

    // 查询企业所属的行业信息
    const GET_Enterprise_TRADES_TREE = '/task/api/getAllTradesTree';

    // 查询所有行业信息二级树
    const GET_ALL_TRADES = '/fe/api/trade/trades';

    // 分页查询所有行业信息二级树
    const GET_ALL_TRADES_PAGE = '/fe/api/trade/tradePage';

    // 根据场景获取税目二级联动
    const GET_TAX_ITEMS_BY_TRADE = '/task/api/taxItem/getTaxItemsByTrade';

    // 查询极速任务情况
    const GET_FAST_TASK_INFO = '/task/api/oldTaskInfo';

    // 查询用户注册认证及协议进度信息
    const GET_USER_PROGRESS = '/fe/api/getUserProgress';

    // 换绑个人用户的手机
    const CHANGE_MOBILE = '/fe/api/changeMobile';

    // 注销个人用户
    const DELETE_USER = '/fe/api/deleteUser';

    // 获取个人用户实名信息
    const GET_USERINFO = '/fe/api/getUserInfo';

    // 获取个人银行卡信息
    const GET_USER_BANK_INFO = '/fe/api/getUserBankInfo';

    // 用户提供认证数据进行认证
    const SUBMIT_PROFESSIONAL = '/fe/api/auth/professional';

    // 获取用户默认支付信息
    const GET_USER_PAY_INFO = '/fe/api/getUserPayInfo';

}