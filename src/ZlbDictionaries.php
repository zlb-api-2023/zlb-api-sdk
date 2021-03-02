<?php


namespace Zlb\SDK;


use Zlb\SDK\Enum\ZlbHttpEnum;

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
     * 银行字典查询
     * @return array
     */
    public function getBankNames(): array
    {
        $url = $this->url . ZlbHttpEnum::GET_BANK_NAMES;

        return $this->sendRequest($url, [], $this->sign);
    }

    /**
     * 银行字典分页查询
     * @param int $current 当前第几页
     * @param int $size 每页几条
     * @return array
     */
    public function getBankNamesPage(int $current, int $size): array
    {
        $url = $this->url . ZlbHttpEnum::GET_BANK_NAMES_PAGE;
        $data = [
            'current' => $current,
            'size' => $size,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 查询所有省及其市一二级区域树
     * @return array
     */
    public function listProvinceAndCity(): array
    {
        $url = $this->url . ZlbHttpEnum::GET_PROVINCE_CITIES;

        return $this->sendRequest($url, [], $this->sign);
    }

    /**
     * 查询区域信息
     * @param int $code 区域code
     * @return array
     */
    public function getAreaInfo($code): array
    {
        $url = $this->url . ZlbHttpEnum::GET_AREA_BY_CODE;
        $data = [
            'code' => $code,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 根据编码获取所有上级区域列表
     * @param int $code 区域code
     * @return array
     */
    public function listFatherAreaByCode($code): array
    {
        $url = $this->url . ZlbHttpEnum::GET_FATHER_BY_CODE;
        $data = [
            'code' => $code,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 根据编码获取下一级区域列表
     * @param int $code 区域code
     * @return array
     */
    public function listChildrenAreaByCode($code): array
    {
        $url = $this->url . ZlbHttpEnum::GET_CHILDREN_BY_CODE;
        $data = [
            'code' => $code,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 学校字典
     * @param string $keywords 关键字搜索
     * @return array
     */
    public function getSchools(string $keywords = ''): array
    {
        $url = $this->url . ZlbHttpEnum::GET_SCHOOLS;
        $data = [
            'param' => $keywords,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 学校字典分页
     * @param int $current 当前第几页
     * @param int $size 每页几条
     * @param string $keywords 关键字搜索
     * @return array
     */
    public function getSchoolsPage(int $current, int $size, string $keywords = ''): array
    {
        $url = $this->url . ZlbHttpEnum::GET_SCHOOL_PAGE;
        $data = [
            'current' => $current,
            'size' => $size,
            'param' => $keywords,
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

    /**
     * 查询所有行业信息二级树
     * @return array
     */
    public function getAllTradeTree(): array
    {
        $url = $this->url . ZlbHttpEnum::GET_ALL_TRADES;

        return $this->sendRequest($url, [], $this->sign);
    }

    /**
     * 分页查询所有行业信息二级树
     * @param int $current 当前第几页
     * @param int $size 每页几条
     * @return array
     */
    public function getAllTradeTreePage(int $current, int $size): array
    {
        $url = $this->url . ZlbHttpEnum::GET_ALL_TRADES_PAGE;
        $data = [
            'current' => $current,
            'size' => $size,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }

    /**
     * 根据场景（行业）获取税目二级联动
     * @param int $tradeId
     * @return array
     */
    public function getTaxItemsByTrade($tradeId): array
    {
        $url = $this->url . ZlbHttpEnum::GET_TAX_ITEMS_BY_TRADE;
        $data = [
            'tradeId' => $tradeId,
        ];

        return $this->sendRequest($url, $data, $this->sign);
    }
}