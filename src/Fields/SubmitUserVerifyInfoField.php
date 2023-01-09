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
 * 认证信息校验所需的字段
 * Class SubmitUserVerifyInfoField
 * @package Zlb\SDK\Fields
 */
class SubmitUserVerifyInfoField
{
    /**
     * 用户真实姓名  必传
     * @var string
     */
    protected $realName;

    /**
     * 身份证号  必传
     * @var string
     */
    protected $cardNumber;

    /**
     * 本人办理的银行卡账号 必填
     * @var string
     */
    protected $bankAccount;

    /**
     * 银行卡预留手机号 必填
     * @var string
     */
    protected $reserveMobile;

    /**
     * 证件背面图片 将图片文件Base64编码； 必填
     * @var string
     */
    protected $cardBackImg;

    /**
     * 证件正面图片 将图片文件Base64编码； 必填
     * @var string
     */
    protected $cardFrontImg;

    /**
     * 开户银行名称  非必填
     * @var string
     */
    protected $bankName;

    /**
     * 开户支行名称 非必填
     * @var string
     */
    protected $bankDepositName;


    /**
     * 是否签署协议(1.是 2.否)   必填
     * @var integer
     */
    protected $signProtocol;

    /**
     * @return string
     */
    public function getRealName(): string
    {
        return $this->realName;
    }

    /**
     * @param  string  $realName
     * @return SubmitUserVerifyInfoField
     */
    public function setRealName(string $realName): SubmitUserVerifyInfoField
    {
        $this->realName = $realName;
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
     * @param  string  $cardNumber
     * @return SubmitUserVerifyInfoField
     */
    public function setCardNumber(string $cardNumber): SubmitUserVerifyInfoField
    {
        $this->cardNumber = $cardNumber;
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
     * @param  string  $bankAccount
     * @return SubmitUserVerifyInfoField
     */
    public function setBankAccount(string $bankAccount): SubmitUserVerifyInfoField
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReserveMobile(): string
    {
        return $this->reserveMobile;
    }

    /**
     * @param  string  $reserveMobile
     * @return SubmitUserVerifyInfoField
     */
    public function setReserveMobile(string $reserveMobile): SubmitUserVerifyInfoField
    {
        $this->reserveMobile = $reserveMobile;
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
     * @param  string  $cardBackImg
     * @return SubmitUserVerifyInfoField
     */
    public function setCardBackImg(string $cardBackImg): SubmitUserVerifyInfoField
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
     * @param  string  $cardFrontImg
     * @return SubmitUserVerifyInfoField
     */
    public function setCardFrontImg(string $cardFrontImg): SubmitUserVerifyInfoField
    {
        $this->cardFrontImg = $cardFrontImg;
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
     * @param  string  $bankName
     * @return SubmitUserVerifyInfoField
     */
    public function setBankName(string $bankName): SubmitUserVerifyInfoField
    {
        $this->bankName = $bankName;
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
     * @param  string  $bankDepositName
     * @return SubmitUserVerifyInfoField
     */
    public function setBankDepositName(string $bankDepositName): SubmitUserVerifyInfoField
    {
        $this->bankDepositName = $bankDepositName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSignProtocol(): int
    {
        return $this->signProtocol;
    }

    /**
     * @param  int  $signProtocol
     * @return SubmitUserVerifyInfoField
     */
    public function setSignProtocol(int $signProtocol): SubmitUserVerifyInfoField
    {
        $this->signProtocol = $signProtocol;
        return $this;
    }


    /**
     * @param  array  $userVerifyInfoData
     * @return SubmitUserVerifyInfoField
     */
    public function setUserVerifyInfoData(array $userVerifyInfoData): SubmitUserVerifyInfoField
    {
        foreach ($userVerifyInfoData as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getUserVerifyInfoData(): array
    {
        return [
            'realName' => $this->realName,
            'cardNumber' => $this->cardNumber,
            'bankAccount' => $this->bankAccount,
            'reserveMobile' => $this->reserveMobile,
            'cardBackImg' => $this->cardBackImg,
            'cardFrontImg' => $this->cardFrontImg,
            'bankName' => $this->bankName,
            'bankDepositName' => $this->bankDepositName,
            'signProtocol' => $this->signProtocol,
        ];
    }
}