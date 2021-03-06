<?php

/**
 * This is the model class for table "kecamatan".
 *
 * The followings are the available columns in table 'kecamatan':
 * @property integer $id
 * @property string $nama
 * @property string $id_kota
 */
class Kecamatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $nmKota;
	public function tableName()
	{
		return 'kecamatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama', 'length', 'max'=>255),
			array('id_kota', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, id_kota,nmKota', 'safe', 'on'=>'search'),
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
		'kecamatankota'=>array(self::BELONGS_TO,'Kota','id_kota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'id_kota' => 'Kota',
			'nmKota'=>'Kota',
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
		$criteria->with=array('kecamatankota');
		$criteria->compare('id',$this->id);
		$criteria->compare('t.nama',$this->nama,true);
		$criteria->compare('id_kota',$this->id_kota,true);
		$criteria->compare('kecamatankota.nama',$this->nmKota,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                            'attributes'=>array(
                                'nmKota'=>array(
                                    'asc'=>'kecamatankota.nama',
                                    'desc'=>'kecamatankota.nama DESC',
                                ),                                 
                                '*',
                            ),
                        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kecamatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
