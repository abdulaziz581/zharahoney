<?php

/**
 * This is the model class for table "pembeli".
 *
 * The followings are the available columns in table 'pembeli':
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property integer $id_propinsi
 * @property integer $id_kota
 * @property integer $id_kecamatan
 * @property integer $kode_pos
 * @property string $no_telpon
 * @property string $no_handphone
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 */
class Pembeli extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */ 
	public $nmpropinsi,$nmkota,$nmkecamatan;
	public function tableName()
	{
		return 'pembeli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_propinsi, id_kota, id_kecamatan, kode_pos', 'numerical', 'integerOnly'=>true),
			array('nama, alamat, no_telpon, no_handphone, email, facebook, twitter', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, alamat, id_propinsi, id_kota, id_kecamatan, kode_pos, no_telpon, no_handphone, email, facebook, twitter,nmpropinsi,nmkota,nmkecamatan', 'safe', 'on'=>'search'),
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
			'pembelipropinsi'=>array(self::BELONGS_TO,'Propinsi','id_propinsi'),
			'pembelikota'=>array(self::BELONGS_TO,'Kota','id_kota'),
			'pembelikecamatan'=>array(self::BELONGS_TO,'Kecamatan','id_kecamatan'),
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
			'alamat' => 'Alamat',
			'id_propinsi' => 'Propinsi',
			'id_kota' => 'Kota',
			'id_kecamatan' => 'Kecamatan',
			'kode_pos' => 'Kode Pos',
			'no_telpon' => 'No Telpon',
			'no_handphone' => 'No Handphone',
			'email' => 'Email',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
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
		$criteria->with=array('pembelipropinsi','pembelikota','pembelikecamatan');
		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('id_propinsi',$this->id_propinsi);
		$criteria->compare('id_kota',$this->id_kota);
		$criteria->compare('id_kecamatan',$this->id_kecamatan);
		$criteria->compare('kode_pos',$this->kode_pos);
		$criteria->compare('no_telpon',$this->no_telpon,true);
		$criteria->compare('no_handphone',$this->no_handphone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('pembelipropinsi.nama',$this->nmpropinsi,true);
		$criteria->compare('pembelikota.nama',$this->nmkota,true);
		$criteria->compare('pembelikecamatan.nama',$this->nmkecamatan,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
					'attributes'=>array(
                                'nmpropinsi'=>array(
                                    'asc'=>'pembelipropinsi.nama',
                                    'desc'=>'pembelipropinsi.nama DESC',
                                ),
                                'nmkota'=>array(
                                    'asc'=>'pembelikota.nama',
                                    'desc'=>'pembelikota.nama DESC',
                                ),
                                'nmkecamatan'=>array(
                                    'asc'=>'pembelikecamatan.nama',
                                    'desc'=>'pembelikecamatan.nama DESC',
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
	 * @return Pembeli the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getFullname(){
		 return strtoupper($this->nama).' ( No.Telp:'.$this->no_telpon.' |Alamat :'.$this->alamat.' | Kec:'.$this->pembelikecamatan->nama.' | Kab/Kota :'.$this->pembelikota->nama.' | Prop:'.$this->pembelipropinsi->nama.' )';
	}
}
