<?php

/**
 * This is the model class for table "kasir".
 *
 * The followings are the available columns in table 'kasir':
 * @property integer $nokasir
 * @property string $namapas
 * @property string $namadok
 * @property string $penyakit
 * @property string $obat
 * @property integer $harga
 * @property string $keterangan
 */
class Kasir extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kasir';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nokasir, namapas, namadok, penyakit, obat, harga, keterangan', 'required'),
			array('nokasir, harga', 'numerical', 'integerOnly'=>true),
			array('namapas, namadok, penyakit, obat, keterangan', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nokasir, namapas, namadok, penyakit, obat, harga, keterangan', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nokasir' => 'Nokasir',
			'namapas' => 'Namapas',
			'namadok' => 'Namadok',
			'penyakit' => 'Penyakit',
			'obat' => 'Obat',
			'harga' => 'Harga',
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

		$criteria->compare('nokasir',$this->nokasir);
		$criteria->compare('namapas',$this->namapas,true);
		$criteria->compare('namadok',$this->namadok,true);
		$criteria->compare('penyakit',$this->penyakit,true);
		$criteria->compare('obat',$this->obat,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kasir the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
