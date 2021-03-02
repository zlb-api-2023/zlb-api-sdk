<?php


namespace Zlb\SDK\Fields;


trait FastTaskInviteUserListField
{

    /**
     * 邀请用户信息
     * @var array
     */
    protected $inviteUserList;

    /**
     * @return array
     */
    public function getInviteUserList(): array
    {
        return $this->inviteUserList;
    }

    /**
     * @param array $inviteUserList
     * @return FastTaskInviteUserListField
     */
    public function setInviteUserList(array $inviteUserList)
    {
        $this->inviteUserList = $inviteUserList;
        return $this;
    }


}