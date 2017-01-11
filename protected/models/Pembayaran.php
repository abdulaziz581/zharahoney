<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property integer $id
 * @property integer $id_penjualan
 * @property integer $id_bank
 * @property string $byr_nmbank
 * @property string $byr_nama
 * @property string $byr_noref
 * @property string $byr_tgl
 * @property string $jumlah
 * @property integer $id_user
 * @property string $created_date
 * @property string $updated_date
 * @property string $keterangan
 * @property string $nmpembeli
 * @property string $kodepenjualan
 * @property string $nmbank
 * @property string $keterangan
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $kodepenjualan;
	public $nmbank;
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_penjualan, keterangan', 'required'),
			array('id_penjualan, id_bank, id_user', 'numerical', 'integerOnly'=>true),
			array('byr_nmbank, byr_nama, byr_noref, jumlah', 'length', 'max'=>255),
			array('byr_tgl, created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_penjualan, id_bank, byr_nmbank, byr_nama, byr_noref, byr_tgl, jumlah, id_user, created_date, updated_date, keterangan,kodepenjualan,nmbank', 'safe', 'on'=>'search'),
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
			'pembayaranpenjualan'=>array(self::BELONGS_TO,'Penjualan','id_penjualan'),
			'bankpembayaran'=>array(self::BELONGS_TO,'Bank','id_bank'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_penjualan' => 'Transaksi Penjualan',
			'kodepenjualan'=>'Kode Penjualan',
			'nmbank'=>'Nama Bank Tujuan',
			'id_bank' => 'Bank Tujuan',
			'byr_nmbank' => 'Bank',
			'byr_nama' => 'Nama',
			'byr_noref' => 'No.Referensi',
			'byr_tgl' => 'Tanggal Transfer',
			'jumlah' => 'Jumlah',
			'id_user' => 'Id User',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'keterangan' => 'Keterangan',
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
		$criteria->with=array('pembayaranpenjualan','bankpembayaran');
		$criteria->compare('id',$this->id);
		$criteria->compare('id_penjualan',$this->id_penjualan);
		$criteria->compare('id_bank',$this->id_bank);
		$criteria->compare('byr_nmbank',$this->byr_nmbank,true);
		$criteria->compare('byr_nama',$this->byr_nama,true);
		$criteria->compare('byr_noref',$this->byr_noref,true);
		$criteria->compare('byr_tgl',$this->byr_tgl,true);
		$criteria->compare('jumlah',$this->jumlah,true);
		$criteria->compare('pembayaranpenjualan.kode_trans',$this->kodepenjualan,true);
		$criteria->compare('bankpembayaran.nama',$this->nmbank,true);		
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                                'attributes'=>array(
                                    'namaCustomerservice'=>array(
                                        'asc'=>'pembayaranpenjualan.kode_trans',
                                        'desc'=>'pembayaranpenjualan.kode_trans DESC',
                                    ), 
                                    'namaMetodebayar'=>array(
                                        'asc'=>'bankpembayaran.nama',
                                        'desc'=>'bankpembayaran.nama DESC',
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
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
