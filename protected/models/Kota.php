<?php

/**
 * This is the model class for table "kota".
 *
 * The followings are the available columns in table 'kota':
 * @property integer $id
 * @property string $nama
 * @property string $id_propinsi
 */
class Kota extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $nmpropinsi;
	public function tableName()
	{
		return 'kota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama', 'required'),
			array('nama', 'length', 'max'=>100),
			array('id_propinsi', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, id_propinsi,nmpropinsi', 'safe', 'on'=>'search'),
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
			'kotapropinsi'=>array(self::BELONGS_TO,'Propinsi','id_propinsi'),
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
			'id_propinsi' => 'Propinsi',
			'nmpropinsi'=>'Nama Propinsi',
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
		$criteria->with=array('kotapropinsi');
		$criteria->compare('id',$this->id);
		$criteria->compare('t.nama',$this->nama,true);
		//$criteria->compare('id_propinsi',$this->id_propinsi,true);
		$criteria->compare('kotapropinsi.nama',$this->nmpropinsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                            'attributes'=>array(
                                'nmpropinsi'=>array(
                                    'asc'=>'kotapropinsi.nama',
                                    'desc'=>'kotapropinsi.nama DESC',
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
	 * @return Kota the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
