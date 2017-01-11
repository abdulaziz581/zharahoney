<?php

/**
 * This is the model class for table "detail_penjualan".
 *
 * The followings are the available columns in table 'detail_penjualan':
 * @property string $id
 * @property integer $id_penjualan
 * @property integer $id_barang
 * @property integer $jumlah
 * @property integer $harga
 * @property integer $total
 */
class DetailPenjualan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $namaBarang;
	public function tableName()
	{
		return 'detail_penjualan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_penjualan, id_barang, jumlah, harga,total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_penjualan, id_barang, jumlah, harga,total,namaBarang', 'safe', 'on'=>'search'),
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
			'jualBarang'=>array(self::BELONGS_TO,'Barang','id_barang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_penjualan' => 'Id Penjualan',
			'id_barang' => 'Barang',
			'jumlah' => 'Jumlah',
			'harga' => 'Harga',
			'total'=>'Total',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_penjualan',$this->id_penjualan);
		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('total',$this->total);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	 public function caridet($id_penjualan)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
        $criteria->with=array('jualBarang');
		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_penjualan',$this->id_penjualan,true);
		$criteria->compare('id_barang',$this->id_barang,true);
		$criteria->compare('jualBarang.nama',$this->namaBarang,TRUE);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('harga',$this->harga,true);
		$criteria->compare('total',$this->total,true);
        $criteria->addCondition("id_penjualan=$id_penjualan");
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetailPenjualan the static model class
	 */
	public function lengkap(){
            return $this->jualBarang->kode.' '.$this->jualBarang->nama;
        }
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
