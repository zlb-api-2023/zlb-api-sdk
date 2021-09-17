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

namespace Zlb\SDK\Fields\IdCard;


class PayWayObjField
{
    /**
     * 支付方式  1：银行卡支付 2：线下支付 3：支付宝支付 4：微信支付
     * @var int
     */
    protected $payWay;

    /**
     * 收款账号  银行卡支付和支付宝支付必填，银行卡支付填写银行卡账号，支付宝支付填写支付宝账号
     * @var string
     */
    protected $receiveAccount;

    /**
     * 开户行名称 银行卡支付必填
     * @var string
     */
    protected $bankName;

    /**
     * 开户支行行名称
     * @var string
     */
    protected $bankDepositName;

    /**
     * @return int
     */
    public function getPayWay(): int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     * @return PayWayObjField
     */
    public function setPayWay(int $payWay): PayWayObjField
    {
        $this->payWay = $payWay;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiveAccount(): string
    {
        return $this->receiveAccount;
    }

    /**
     * @param string $receiveAccount
     * @return PayWayObjField
     */
    public function setReceiveAccount(string $receiveAccount): PayWayObjField
    {
        $this->receiveAccount = $receiveAccount;
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
     * @return PayWayObjField
     */
    public function setBankName(string $bankName): PayWayObjField
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
     * @param string $bankDepositName
     * @return PayWayObjField
     */
    public function setBankDepositName(string $bankDepositName): PayWayObjField
    {
        $this->bankDepositName = $bankDepositName;
        return $this;
    }

    /**
     * @param array $payWayData
     * @return PayWayObjField
     */
    public function setPayWayData(array $payWayData): PayWayObjField
    {
        foreach ($payWayData as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getPayWayData(): array
    {
        return [
            'payWay' => $this->payWay,
            'receiveAccount' => $this->receiveAccount,
            'bankName' => $this->bankName,
            'bankDepositName' => $this->bankDepositName,
        ];
    }
}