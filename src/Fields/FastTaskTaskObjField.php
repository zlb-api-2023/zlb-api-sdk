<?php


namespace Zlb\SDK\Fields;


trait FastTaskTaskObjField
{
    /**
     * 流水号
     * @var string
     */
    protected $water;

    /**
     * 回调地址
     * @var string
     */
    protected $returnUrl;

    /**
     * 所属场景（行业）ID
     * @var int
     */
    protected $tradeId;

    /**
     * 任务标题
     * @var string
     */
    protected $title;

    /**
     * 任务描述
     * @var string
     */
    protected $content;

    /**
     * 报名要求
     * @var string
     */
    protected $requirement = '不限';

    /**
     * 工作地点
     * @var string
     */
    protected $taskAddress = '不限';

    /**
     * 交付内容要求
     * @var string
     */
    protected $deliveryRequirement = '不限';

    /**
     * 任务佣金 （单位分）
     * @var int
     */
    protected $bounty;

    /**
     * @var bool 任务完成自动开票（True:自动开票（默认）False：不自动开票）
     */
    protected $isAutoInvoice = true;
    protected $beginTime;

    /**
     * @return mixed
     */
    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param mixed $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }
    protected $endTime;

    /**
     * @return int
     */
    public function getBounty(): int
    {
        return $this->bounty;
    }

    /**
     * @param int $bounty
     * @return FastTaskTaskObjField
     */
    public function setBounty(int $bounty)
    {
        $this->bounty = $bounty;
        return $this;
    }

    /**
     * @return string
     */
    public function getWater(): string
    {
        return $this->water;
    }

    /**
     * @param string $water
     * @return FastTaskTaskObjField
     */
    public function setWater(string $water)
    {
        $this->water = $water;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     * @return FastTaskTaskObjField
     */
    public function setReturnUrl(string $returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeId(): int
    {
        return $this->tradeId;
    }

    /**
     * @param int $tradeId
     * @return FastTaskTaskObjField
     */
    public function setTradeId(int $tradeId)
    {
        $this->tradeId = $tradeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return FastTaskTaskObjField
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return FastTaskTaskObjField
     */
    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequirement(): string
    {
        return $this->requirement;
    }

    /**
     * @param string $requirement
     * @return FastTaskTaskObjField
     */
    public function setRequirement(string $requirement)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskAddress(): string
    {
        return $this->taskAddress;
    }

    /**
     * @param string $taskAddress
     * @return FastTaskTaskObjField
     */
    public function setTaskAddress(string $taskAddress)
    {
        $this->taskAddress = $taskAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRequirement(): string
    {
        return $this->deliveryRequirement;
    }

    /**
     * @param string $deliveryRequirement
     * @return FastTaskTaskObjField
     */
    public function setDeliveryRequirement(string $deliveryRequirement)
    {
        $this->deliveryRequirement = $deliveryRequirement;
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
     * @param  bool  $isAutoInvoice
     * @return FastTaskTaskObjField
     */
    public function setIsAutoInvoice(bool $isAutoInvoice): FastTaskTaskObjField
    {
        $this->isAutoInvoice = $isAutoInvoice;
        return $this;
    }


    /**
     * @param array $taskObj
     * @return FastTaskTaskObjField
     */
    public function setTaskObj(array $taskObj)
    {
        foreach ($taskObj as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getTaskObj(): array
    {
        return [
            'water' => $this->water,
            'returnUrl' => $this->returnUrl,
            'tradeId' => $this->tradeId,
            'title' => $this->title,
            'content' => $this->content,
            'requirement' => $this->requirement,
            'address' => $this->taskAddress,
            'deliveryRequirement' => $this->deliveryRequirement,
            'bounty' => $this->bounty,
            'isAutoInvoice' => $this->isAutoInvoice,
            'beginTime' => $this->beginTime,
            'endTime' => $this->endTime,
        ];
    }
}