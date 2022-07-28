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

/**
 * 上传个人信息，个人认证时自动回填；接口所需的字段
 * Class IdCardCheckField
 * @package Zlb\SDK\Fields
 */
class IdCardCheckField
{
    /**
     * 用户真实姓名 必填
     * @var string
     */
    protected $name;

    /**
     * 用户真实身份证 必填
     * @var string
     */
    protected $idCard;

    /**
     * 身份证正面base64图片，需要base64头，非必填
     * @var string
     */
    protected $cardFrontImg;

    /**
     * 身份证反面base64图片，需要base64头，非必填
     * @var string
     */
    protected $cardBackImg;

    /**
     * 收款信息对象
     * @var PayWayObjField
     */
    protected $payWayObj;

    /**
     * 银行卡预留手机号,若需要进行银行卡四要素认证，则需要输入办理银行卡号对应的预留手机号
     * @var string
     */
    protected $preMobile;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return IdCardCheckField
     */
    public function setName(string $name): IdCardCheckField
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdCard(): string
    {
        return $this->idCard;
    }

    /**
     * @param string $idCard
     * @return IdCardCheckField
     */
    public function setIdCard(string $idCard): IdCardCheckField
    {
        $this->idCard = $idCard;
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
     * @return IdCardCheckField
     */
    public function setCardFrontImg(string $cardFrontImg): IdCardCheckField
    {
        $this->cardFrontImg = $cardFrontImg;
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
     * @return IdCardCheckField
     */
    public function setCardBackImg(string $cardBackImg): IdCardCheckField
    {
        $this->cardBackImg = $cardBackImg;
        return $this;
    }

    /**
     * @return PayWayObjField
     */
    public function getPayWayObj(): PayWayObjField
    {
        return $this->payWayObj;
    }

    /**
     * @param PayWayObjField $payWayObj
     * @return IdCardCheckField
     */
    public function setPayWayObj(PayWayObjField $payWayObj): IdCardCheckField
    {
        $this->payWayObj = $payWayObj;
        return $this;
    }

    /**
     * @param array $IdCardCheckData
     * @return IdCardCheckField
     */
    public function setIdCardCheckData(array $IdCardCheckData): IdCardCheckField
    {
        foreach ($IdCardCheckData as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getPreMobile(): string
    {
        return $this->preMobile;
    }

    /**
     * @param string $preMobile
     * @return IdCardCheckField
     */
    public function setPreMobile(string $preMobile): IdCardCheckField
    {
        $this->preMobile = $preMobile;
        return $this;
    }



    /**
     * @return array
     */
    public function getIdCardCheckData(): array
    {
        return [
            'name' => $this->name,
            'idCard' => $this->idCard,
            'cardFrontImg' => $this->cardFrontImg,
            'cardBackImg' => $this->cardBackImg,
            'preMobile' => $this->preMobile,
            'payWayObj' => $this->payWayObj,
        ];
    }
}