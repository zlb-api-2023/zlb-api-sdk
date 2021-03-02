<?php


namespace Zlb\SDK\Fields;


trait FastTaskInvoiceObjField
{

    /**
     * 发票类型
     * @var int
     */
    protected $type;

    /**
     * 抬头名称
     * @var string
     */
    protected $companyName;

    /**
     * 纳税人识别号
     * @var string
     */
    protected $companyCode;

    /**
     * 公司详细地址
     * @var string
     */
    protected $comAddress;

    /**
     * 公司联系电话
     * @var string
     */
    protected $comTelPhone;

    /**
     * 公司开户行
     * @var string
     */
    protected $comBankName;

    /**
     * 公司银行账号
     * @var string
     */
    protected $comBankCard;

    /**
     * 收件人电话
     * @var string
     */
    protected $telPhone;

    /**
     * 收件人
     * @var string
     */
    protected $realName;

    /**
     * 申请发票大类
     * @var string
     */
    protected $invoiceCate;

    /**
     * 申请发票内容
     * @var string
     */
    protected $invoiceContent;

    /**
     * 收件地址 省
     * @var string
     */
    protected $province;

    /**
     * 收件地址 市
     * @var string
     */
    protected $city;

    /**
     * 收件地址 区
     * @var string
     */
    protected $area;

    /**
     * 收件地址 详细地址
     * @var string
     */
    protected $invoiceAddress;

    /**
     * 是否自动开票
     * @var bool
     */
    protected $isAutoInvoice;

    /**
     * 寄送偏好 1立即寄出 2按周寄出 3月底寄出 4月初寄出
     * @var int
     */
    protected $invoiceSendType;

    /**
     * 备注
     * @var string
     */
    protected $note;

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return FastTaskInvoiceObjField
     */
    public function setType(int $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return FastTaskInvoiceObjField
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCode(): string
    {
        return $this->companyCode;
    }

    /**
     * @param string $companyCode
     * @return FastTaskInvoiceObjField
     */
    public function setCompanyCode(string $companyCode)
    {
        $this->companyCode = $companyCode;
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
     * @param string $comAddress
     * @return FastTaskInvoiceObjField
     */
    public function setComAddress(string $comAddress)
    {
        $this->comAddress = $comAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getComTelPhone(): string
    {
        return $this->comTelPhone;
    }

    /**
     * @param string $comTelPhone
     * @return FastTaskInvoiceObjField
     */
    public function setComTelPhone(string $comTelPhone)
    {
        $this->comTelPhone = $comTelPhone;
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
     * @param string $comBankName
     * @return FastTaskInvoiceObjField
     */
    public function setComBankName(string $comBankName)
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
     * @param string $comBankCard
     * @return FastTaskInvoiceObjField
     */
    public function setComBankCard(string $comBankCard)
    {
        $this->comBankCard = $comBankCard;
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
     * @param string $telPhone
     * @return FastTaskInvoiceObjField
     */
    public function setTelPhone(string $telPhone)
    {
        $this->telPhone = $telPhone;
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
     * @return FastTaskInvoiceObjField
     */
    public function setRealName(string $realName)
    {
        $this->realName = $realName;
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
     * @param string $invoiceCate
     * @return FastTaskInvoiceObjField
     */
    public function setInvoiceCate(string $invoiceCate)
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
     * @param string $invoiceContent
     * @return FastTaskInvoiceObjField
     */
    public function setInvoiceContent(string $invoiceContent)
    {
        $this->invoiceContent = $invoiceContent;
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
     * @param string $province
     * @return FastTaskInvoiceObjField
     */
    public function setProvince(string $province)
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
     * @param string $city
     * @return FastTaskInvoiceObjField
     */
    public function setCity(string $city)
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
     * @param string $area
     * @return FastTaskInvoiceObjField
     */
    public function setArea(string $area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAddress(): string
    {
        return $this->invoiceAddress;
    }

    /**
     * @param string $invoiceAddress
     * @return FastTaskInvoiceObjField
     */
    public function setInvoiceAddress(string $invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoInvoice(): bool
    {
        return $this->isAutoInvoice;
    }

    /**
     * @param bool $isAutoInvoice
     * @return FastTaskInvoiceObjField
     */
    public function setIsAutoInvoice(bool $isAutoInvoice)
    {
        $this->isAutoInvoice = $isAutoInvoice;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceSendType(): int
    {
        return $this->invoiceSendType;
    }

    /**
     * @param int $invoiceSendType
     * @return FastTaskInvoiceObjField
     */
    public function setInvoiceSendType(int $invoiceSendType)
    {
        $this->invoiceSendType = $invoiceSendType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return FastTaskInvoiceObjField
     */
    public function setNote(string $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param array $invoiceObj
     * @return FastTaskInvoiceObjField
     */
    public function setInvoiceObj(array $invoiceObj)
    {
        foreach ($invoiceObj as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getInvoiceObj(): array
    {
        return [
            'type' => $this->type,
            'companyName' => $this->companyName,
            'companyCode' => $this->companyCode,
            'comAddress' => $this->comAddress,
            'comTelPhone' => $this->comTelPhone,
            'comBankName' => $this->comBankName,
            'comBankCard' => $this->comBankCard,
            'telPhone' => $this->telPhone,
            'realName' => $this->realName,
            'invoiceCate' => $this->invoiceCate,
            'invoiceContent' => $this->invoiceContent,
            'province' => $this->province,
            'city' => $this->city,
            'area' => $this->area,
            'address' => $this->invoiceAddress,
            'isAutoInvoice' => $this->isAutoInvoice,
            'invoiceSendType' => $this->invoiceSendType,
            'note' => $this->note,
        ];
    }
}