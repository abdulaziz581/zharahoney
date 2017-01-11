<?php

/**
 * This is the model class for table "customerservice".
 *
 * The followings are the available columns in table 'customerservice':
 * @property integer $id
 * @property string $kode_cs
 * @property string $nama
 * @property string $no_handphone
 * @property string $facebook
 */
class Customerservice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $namaUser;
	public function tableName()
	{
		return 'customerservice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_cs, nama, no_handphone, facebook', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_cs, nama, no_handphone, facebook,user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usercustomerservice'=>array(self::BELONGS_TO,'User','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_cs' => 'Kode Cs',
			'nama' => 'Nama',
			'no_handphone' => 'No Handphone',
			'facebook' => 'Facebook',
			'user_id'=>'Nama User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with=array('usercustomerservice');
		$criteria->compare('id',$this->id);
		$criteria->compare('kode_cs',$this->kode_cs,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('no_handphone',$this->no_handphone,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('usercustomerservice.nama',$this->namaUser,true); 
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customerservice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
