<?php

/**
 * This is the model class for table "pembelian".
 *
 * The followings are the available columns in table 'pembelian':
 * @property string $id
 * @property integer $id_customerservice
 * @property integer $id_metodebayar
 * @property integer $id_ordervia
 * @property integer $id_ekspedisi
 * @property integer $id_pembeli
 * @property string $kode_trans
 * @property string $verifikasi
 * @property string $tanggal
 * @property string $kode_unik
 * @property string $created_date
 * @property string $updated_date
 */
class Pembelian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $namaCustomerservice;
	public $namaMetodebayar;
	public $namaOrdervia;
	public $namaEkspedisi;
	public $namaPembeli;
	public function tableName()
	{
		return 'pembelian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_customerservice, id_metodebayar, id_ordervia, id_ekspedisi, id_pembeli', 'numerical', 'integerOnly'=>true),
			array('kode_trans, verifikasi, kode_unik', 'length', 'max'=>255),
			array('tanggal, created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_customerservice, id_metodebayar, id_ordervia, id_ekspedisi, id_pembeli, kode_trans, verifikasi, tanggal, kode_unik, created_date, updated_date,namaCustomerservice,namaMetodebayar,namaOrdervia,namaEkspedisi,namaPembeli', 'safe', 'on'=>'search'),
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
			'customerservicepembelian'=>array(self::BELONGS_TO,'Customerservice','id_customerservice'),
			'metodebayarpembelian'=>array(self::BELONGS_TO,'Metodebayar','id_metodebayar'),
			'orderviapembelian'=>array(self::BELONGS_TO,'Ordervia','id_ordervia'),
			'ekspedisipembelian'=>array(self::BELONGS_TO,'Ekspedisi','id_ekspedisi'),
			'pembelipembelian'=>array(self::BELONGS_TO,'Pembeli','id_pembeli')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_customerservice' => 'Customer Service',
			'namaCustomerservice'=>'Customer Service',
			'id_metodebayar' => 'Metode Bayar',
			'namaMetodebayar'=>'Metode Bayar',
			'id_ordervia' => 'Order Via',
			'namaOrdervia'=>'Order Via',
			'id_ekspedisi' => 'Ekspedisi',
			'namaEkspedisi'=>'Ekspedisi',
			'id_pembeli' => 'Pembeli',
			'namaPembeli'=>'Nama Customer', 
			'kode_trans' => 'Kode Trans',
			'verifikasi' => 'Verifikasi',
			'tanggal' => 'Tanggal',
			'kode_unik' => 'Kode Unik',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
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
		$criteria->with=array('customerservicepembelian','metodebayarpembelian','orderviapembelian','ekspedisipembelian','pembelipembelian');
		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_customerservice',$this->id_customerservice);
		$criteria->compare('id_metodebayar',$this->id_metodebayar);
		$criteria->compare('id_ordervia',$this->id_ordervia);
		$criteria->compare('id_ekspedisi',$this->id_ekspedisi);
		$criteria->compare('id_pembeli',$this->id_pembeli);
		$criteria->compare('kode_trans',$this->kode_trans,true);
		$criteria->compare('verifikasi',$this->verifikasi,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('kode_unik',$this->kode_unik,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('customerservicepembelian.nama',$this->namaCustomerservice);
		$criteria->compare('metodebayarpembelian.nama',$this->namaMetodebayar);
		$criteria->compare('orderviapembelian',$this->namaOrdervia);
		$criteria->compare('ekspedisipembelian',$this->namaEkspedisi);
		$criteria->compare('pembelipembelian.nama',$this->namaPembeli);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                                'attributes'=>array(
                                    'namaCustomerservice'=>array(
                                        'asc'=>'customerservicepembelian.nama',
                                        'desc'=>'customerservicepembelian.nama DESC',
                                    ), 
                                    'namaMetodebayar'=>array(
                                        'asc'=>'metodebayarpembelian.nama',
                                        'desc'=>'metodebayarpembelian.nama DESC',
                                    ),
                                    'namaOrdervia'=>array(
                                    	'asc'=>'orderviapembelian.nama',
                                    	'desc'=>'orderviapembelian.nama DESC',
                                    ), 
                                    'namaEkspedisi'=>array(
                                    	'asc'=>'ekspedisipembelian.nama',
                                    	'desc'=>'ekspedisipembelian.nama DESC',
                                    ),
                                    'namaPembeli'=>array(
                                    	'asc'=>'ekspedisipembelian.nama',
                                    	'desc'=>'ekspedisipembelian.nama DESC',
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
	 * @return Pembelian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
