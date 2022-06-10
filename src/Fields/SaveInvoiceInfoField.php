<?php
/*
 * This file is part of the zlb package
 *
 * Copyright (c) 2022.  <541575093@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Zlb\SDK\Fields;


class SaveInvoiceInfoField
{
    /**
     * @var int 发票类型(1增值税专票 2增值税普票，注意：需同贵公司财务确认) 必填
     */
    protected $type;

    /**
     * @var string 发票大类/类目1 必填
     */
    protected $invoiceCate;

    /**
     * @var string 发票内容/类目2 必填
     */
    protected $invoiceContent;

    /**
     * @var string 发票购方公司地址 type为1必填
     */
    protected $comAddress;

    /**
     * @var string 发票购方公司电话 type为1必填
     */
    protected $comTelphone;

    /**
     * @var string 发票购方公司开户行 type为1必填
     */
    protected $comBankName;

    /**
     * @var string 发票购方公司银行账号 type为1必填
     */
    protected $comBankCard;

    /**
     * @var string 电子邮箱 必填
     */
    protected $comEmailAddress;

    /**
     * @var string 省名称 必填
     */
    protected $province;

    /**
     * @var string 城市名称/市名称 必填
     */
    protected $city;

    /**
     * @var string 区名称 非必填
     */
    protected $area;

    /**
     * @var string 收件具体地址 必填
     */
    protected $address;

    /**
     * @var string 收件人姓名 必填
     */
    protected $realName;

    /**
     * @var string 收件人电话 必填
     */
    protected $telPhone;

    /**
     * @var string 寄出时间 1-立即寄出 2-按周寄出 3-月底寄出 没填默认3  非必填
     */
    protected $invoiceSendType;

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param  int  $type
     * @return SaveInvoiceInfoField
     */
    public function setType(int $type): SaveInvoiceInfoField
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCate(): string
    {
        return $this->invoiceCate;
    }

    /**
     * @param  string  $invoiceCate
     * @return SaveInvoiceInfoField
     */
    public function setInvoiceCate(string $invoiceCate): SaveInvoiceInfoField
    {
        $this->invoiceCate = $invoiceCate;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceContent(): string
    {
        return $this->invoiceContent;
    }

    /**
     * @param  string  $invoiceContent
     * @return SaveInvoiceInfoField
     */
    public function setInvoiceContent(string $invoiceContent): SaveInvoiceInfoField
    {
        $this->invoiceContent = $invoiceContent;
        return $this;
    }

    /**
     * @return string
     */
    public function getComAddress(): string
    {
        return $this->comAddress;
    }

    /**
     * @param  string  $comAddress
     * @return SaveInvoiceInfoField
     */
    public function setComAddress(string $comAddress): SaveInvoiceInfoField
    {
        $this->comAddress = $comAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getComTelphone(): string
    {
        return $this->comTelphone;
    }

    /**
     * @param  string  $comTelphone
     * @return SaveInvoiceInfoField
     */
    public function setComTelphone(string $comTelphone): SaveInvoiceInfoField
    {
        $this->comTelphone = $comTelphone;
        return $this;
    }

    /**
     * @return string
     */
    public function getComBankName(): string
    {
        return $this->comBankName;
    }

    /**
     * @param  string  $comBankName
     * @return SaveInvoiceInfoField
     */
    public function setComBankName(string $comBankName): SaveInvoiceInfoField
    {
        $this->comBankName = $comBankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getComBankCard(): string
    {
        return $this->comBankCard;
    }

    /**
     * @param  string  $comBankCard
     * @return SaveInvoiceInfoField
     */
    public function setComBankCard(string $comBankCard): SaveInvoiceInfoField
    {
        $this->comBankCard = $comBankCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getComEmailAddress(): string
    {
        return $this->comEmailAddress;
    }

    /**
     * @param  string  $comEmailAddress
     * @return SaveInvoiceInfoField
     */
    public function setComEmailAddress(string $comEmailAddress): SaveInvoiceInfoField
    {
        $this->comEmailAddress = $comEmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @param  string  $province
     * @return SaveInvoiceInfoField
     */
    public function setProvince(string $province): SaveInvoiceInfoField
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param  string  $city
     * @return SaveInvoiceInfoField
     */
    public function setCity(string $city): SaveInvoiceInfoField
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * @param  string  $area
     * @return SaveInvoiceInfoField
     */
    public function setArea(string $area): SaveInvoiceInfoField
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param  string  $address
     * @return SaveInvoiceInfoField
     */
    public function setAddress(string $address): SaveInvoiceInfoField
    {
        $this->address = $address;
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
     * @param  string  $realName
     * @return SaveInvoiceInfoField
     */
    public function setRealName(string $realName): SaveInvoiceInfoField
    {
        $this->realName = $realName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelPhone(): string
    {
        return $this->telPhone;
    }

    /**
     * @param  string  $telPhone
     * @return SaveInvoiceInfoField
     */
    public function setTelPhone(string $telPhone): SaveInvoiceInfoField
    {
        $this->telPhone = $telPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceSendType(): string
    {
        return $this->invoiceSendType;
    }

    /**
     * @param  string  $invoiceSendType
     * @return SaveInvoiceInfoField
     */
    public function setInvoiceSendType(string $invoiceSendType): SaveInvoiceInfoField
    {
        $this->invoiceSendType = $invoiceSendType;
        return $this;
    }

    /**
     * @param  array  $invoiceInfo
     * @return SaveInvoiceInfoField
     */
    public function setInvoiceInfo(array $invoiceInfo): SaveInvoiceInfoField
    {
        foreach ($invoiceInfo as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }


    /**
     * @return array
     */
    public function getInvoiceInfoData(): array
    {
        return [
            'type'            => $this->type,
            'invoiceCate'     => $this->invoiceCate,
            'invoiceContent'  => $this->invoiceContent,
            'comAddress'      => $this->comAddress,
            'comTelphone'     => $this->comTelphone,
            'comBankName'     => $this->comBankName,
            'comBankCard'     => $this->comBankCard,
            'comEmailAddress' => $this->comEmailAddress,
            'province'        => $this->province,
            'city'            => $this->city,
            'area'            => $this->area,
            'address'         => $this->address,
            'realName'        => $this->realName,
            'telPhone'        => $this->telPhone,
            'invoiceSendType' => $this->invoiceSendType,
        ];
    }
}