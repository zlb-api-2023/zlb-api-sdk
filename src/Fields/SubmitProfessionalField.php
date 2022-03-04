<?php
/*
 * This file is part of the zlb package
 *
 * Copyright (c) 2021.  <541575093@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Zlb\SDK\Fields;

/**
 * 实名认证所需的字段
 * Class SubmitProfessionalField
 * @package Zlb\SDK\Fields
 */
class SubmitProfessionalField
{
    /**
     * 居住详细地址 非必传
     * @var string
     */
    protected $address;

    /**
     * 支付宝账户-支付宝支付必填
     * @var string
     */
    protected $alipayAccount;

    /**
     * 开户银行账号-银行卡支付时必填
     * @var string
     */
    protected $bankAccount;

    /**
     * 开户支行名称-银行卡支付时必填
     * @var string
     */
    protected $bankDepositName;

    /**
     * 银行卡图片 将图片文件Base64编码 支付方式选择银行卡也可以不传
     * @var string
     */
    protected $bankImage;

    /**
     * 开户银行名称  银行卡\支付宝\微信支付必须要选择一种 银行卡支付必填
     * @var string
     */
    protected $bankName;

    /**
     * 证件背面图片 将图片文件Base64编码；前期接入时确定是否必填
     * @var string
     */
    protected $cardBackImg;

    /**
     * 证件正面图片 将图片文件Base64编码；前期接入时确定是否必填
     * @var string
     */
    protected $cardFrontImg;

    /**
     * 用户证件号  必传
     * @var string
     */
    protected $cardNumber;

    /**
     * 证件类型  1、身份证 2、护照  非必传
     * @var int
     */
    protected $cardType;

    /**
     * 协议文件  必传  将文件Base64编码(要加前缀)，需是pdf文件
     * @var string
     */
    protected $contractFile;

    /**
     * 证件到期时间  非必传
     * @var string
     */
    protected $expiresDate;

    /**
     * 默认支付方式  1.银企互联 2.线下支付 3.支付宝 4.微信支付  非必传
     * @var int
     */
    protected $payWay;

    /**
     * 用户真实姓名  必传
     * @var string
     */
    protected $realName;

    /**
     * 性别  1、男 2、女 3、未知  非必传
     * @var int
     */
    protected $sex;

    /**
     * 活体采集图片  将图片文件Base64编码；前期接入时确定是否必填
     * @var string
     */
    protected $validationImg;

    /**
     * 个人认证结果回调地址URL 非必传
     * @var string
     */
    protected $callbackUrl;

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return SubmitProfessionalField
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlipayAccount(): string
    {
        return $this->alipayAccount;
    }

    /**
     * @param string $alipayAccount
     * @return SubmitProfessionalField
     */
    public function setAlipayAccount(string $alipayAccount)
    {
        $this->alipayAccount = $alipayAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     * @return SubmitProfessionalField
     */
    public function setBankAccount(string $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankDepositName(): string
    {
        return $this->bankDepositName;
    }

    /**
     * @param string $bankDepositName
     * @return SubmitProfessionalField
     */
    public function setBankDepositName(string $bankDepositName)
    {
        $this->bankDepositName = $bankDepositName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankImage(): string
    {
        return $this->bankImage;
    }

    /**
     * @param string $bankImage
     * @return SubmitProfessionalField
     */
    public function setBankImage(string $bankImage)
    {
        $this->bankImage = $bankImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return SubmitProfessionalField
     */
    public function setBankName(string $bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardBackImg(): string
    {
        return $this->cardBackImg;
    }

    /**
     * @param string $cardBackImg
     * @return SubmitProfessionalField
     */
    public function setCardBackImg(string $cardBackImg)
    {
        $this->cardBackImg = $cardBackImg;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardFrontImg(): string
    {
        return $this->cardFrontImg;
    }

    /**
     * @param string $cardFrontImg
     * @return SubmitProfessionalField
     */
    public function setCardFrontImg(string $cardFrontImg)
    {
        $this->cardFrontImg = $cardFrontImg;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return SubmitProfessionalField
     */
    public function setCardNumber(string $cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardType(): int
    {
        return $this->cardType;
    }

    /**
     * @param int $cardType
     * @return SubmitProfessionalField
     */
    public function setCardType(int $cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractFile(): string
    {
        return $this->contractFile;
    }

    /**
     * @param string $contractFile
     * @return SubmitProfessionalField
     */
    public function setContractFile(string $contractFile)
    {
        $this->contractFile = $contractFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresDate(): string
    {
        return $this->expiresDate;
    }

    /**
     * @param string $expiresDate
     * @return SubmitProfessionalField
     */
    public function setExpiresDate(string $expiresDate)
    {
        $this->expiresDate = $expiresDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayWay(): int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     * @return SubmitProfessionalField
     */
    public function setPayWay(int $payWay)
    {
        $this->payWay = $payWay;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealName(): string
    {
        return $this->realName;
    }

    /**
     * @param string $realName
     * @return SubmitProfessionalField
     */
    public function setRealName(string $realName)
    {
        $this->realName = $realName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSex(): int
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     * @return SubmitProfessionalField
     */
    public function setSex(int $sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidationImg(): string
    {
        return $this->validationImg;
    }

    /**
     * @param string $validationImg
     * @return SubmitProfessionalField
     */
    public function setValidationImg(string $validationImg)
    {
        $this->validationImg = $validationImg;
        return $this;
    }

    /**
     * @param array $professionalData
     * @return SubmitProfessionalField
     */
    public function setProfessionalData(array $professionalData)
    {
        foreach ($professionalData as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getProfessionalData(): array
    {
        return [
            'address' => $this->address,
            'alipayAccount' => $this->alipayAccount,
            'bankAccount' => $this->bankAccount,
            'bankDepositName' => $this->bankDepositName,
            'bankImage' => $this->bankImage,
            'bankName' => $this->bankName,
            'cardFrontImg' => $this->cardFrontImg,
            'cardBackImg' => $this->cardBackImg,
            'cardNumber' => $this->cardNumber,
            'cardType' => $this->cardType,
            'contractFile' => $this->contractFile,
            'expiresDate' => $this->expiresDate,
            'payWay' => $this->payWay,
            'realName' => $this->realName,
            'sex' => $this->sex,
            'validationImg' => $this->validationImg,
            'callbackUrl' => $this->callbackUrl,
        ];
    }
}