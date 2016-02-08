<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stu_info".
 *
 * @property integer $stu_info_id
 * @property integer $stu_unique_id
 * @property string $stu_title
 * @property string $stu_first_name
 * @property string $stu_middle_name
 * @property string $stu_last_name
 * @property string $stu_gender
 * @property string $stu_dob
 * @property string $stu_email_id
 * @property string $stu_bloodgroup
 * @property string $stu_birthplace
 * @property string $stu_religion
 * @property string $stu_admission_date
 * @property string $stu_photo
 * @property string $stu_languages
 * @property string $stu_mobile_no
 * @property integer $stu_info_stu_master_id
 *
 * @property StuMaster $stuInfoStuMaster
 * @property StuMaster $stuMaster
 */
class StuInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stu_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_unique_id', 'stu_first_name', 'stu_last_name', 'stu_dob', 'stu_admission_date'], 'required'],
            [['stu_unique_id', 'stu_mobile_no', 'stu_info_stu_master_id'], 'integer'],
            [['stu_dob', 'stu_admission_date'], 'safe'],
            [['stu_title'], 'string', 'max' => 5],
            [['stu_first_name', 'stu_middle_name', 'stu_last_name', 'stu_religion'], 'string', 'max' => 50],
            [['stu_gender', 'stu_bloodgroup'], 'string', 'max' => 10],
            [['stu_email_id'], 'string', 'max' => 65],
            [['stu_birthplace'], 'string', 'max' => 45],
            [['stu_photo'], 'string', 'max' => 150],
            [['stu_languages'], 'string', 'max' => 255],
            [['stu_unique_id'], 'unique'],
            [['stu_email_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stu_info_id' => 'Stu Info ID',
            'stu_unique_id' => 'Stu Unique ID',
            'stu_title' => 'Stu Title',
            'stu_first_name' => 'Stu First Name',
            'stu_middle_name' => 'Stu Middle Name',
            'stu_last_name' => 'Stu Last Name',
            'stu_gender' => 'Stu Gender',
            'stu_dob' => 'Stu Dob',
            'stu_email_id' => 'Stu Email ID',
            'stu_bloodgroup' => 'Stu Bloodgroup',
            'stu_birthplace' => 'Stu Birthplace',
            'stu_religion' => 'Stu Religion',
            'stu_admission_date' => 'Stu Admission Date',
            'stu_photo' => 'Stu Photo',
            'stu_languages' => 'Stu Languages',
            'stu_mobile_no' => 'Stu Mobile No',
            'stu_info_stu_master_id' => 'Stu Info Stu Master ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuInfoStuMaster()
    {
        return $this->hasOne(StuMaster::className(), ['stu_master_id' => 'stu_info_stu_master_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStuMaster()
    {
        return $this->hasOne(StuMaster::className(), ['stu_master_stu_info_id' => 'stu_info_id']);
    }
}
