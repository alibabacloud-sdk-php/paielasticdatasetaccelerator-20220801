<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListEndpointsResponseBody;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\EndpointStatus;
use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 所属加速实例的ID。
     *
     * @example inst-ivrq92qhbyrg4jctih
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example endpoint-1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $ownerId;

    /**
     * @var EndpointStatus
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example 276065346797410278
     *
     * @var string
     */
    public $userId;

    /**
     * @example end-ivrq92qhbyrg4jctih
     *
     * @var string
     */
    public $uuid;

    /**
     * @example vpc-j6co2fcdsl1q0gnuc3ym3
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-j6cmr00qjyrft6jo2mg7g
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'status'          => 'Status',
        'type'            => 'Type',
        'userId'          => 'UserId',
        'uuid'            => 'Uuid',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = EndpointStatus::fromMap($map['Status']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
