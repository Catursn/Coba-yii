<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $nopas
 * @property string $namapas
 * @property string $alamatpas
 * @property integer $telppas
 * @property integer $umurpas
 * @property string $penyakit
 * @property string $tglmsk
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nopas, namapas, alamatpas, telppas, umurpas, penyakit, tglmsk', 'required'),
			array('nopas, telppas, umurpas', 'numerical', 'integerOnly'=>true),
			array('alamatpas, penyakit', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nopas, namapas, alamatpas, telppas, umurpas, penyakit, tglmsk', 'safe', 'on'=>'search'),
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
			'nopas' => 'Nopas',
			'namapas' => 'Namapas',
			'alamatpas' => 'Alamatpas',
			'telppas' => 'Telppas',
			'umurpas' => 'Umurpas',
			'penyakit' => 'Penyakit',
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

		$criteria->compare('nopas',$this->nopas);
		$criteria->compare('namapas',$this->namapas,true);
		$criteria->compare('alamatpas',$this->alamatpas,true);
		$criteria->compare('telppas',$this->telppas);
		$criteria->compare('umurpas',$this->umurpas);
		$criteria->compare('penyakit',$this->penyakit,true);
		$criteria->compare('tglmsk',$this->tglmsk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	// cobacoba
	public function generateKode_Faktur(){
		
		$date = new DateTime();
		if($this->isNewRecord)
		{
		  $criteria=new CDbCriteria;      //kita menggunakan criteria untuk mengetahui nomor terakhir dari database
		  $criteria->select = 'nopas';   //yang ingin kita lihat adalah field "nilai1"
		  $criteria->order='nipas DESC';  //yang dimbil nilai terakhir
		  $last = $criteria;
		  if($last)   // jika ternyata ada nilai dalam data tersebut maka nilai nya saat ini tinggal di tambah 1 dari data sebelumya
		  {
			$no = $last++;
		  }
		  else  //jika ternyata pada tabel terebut masih kosong, maka akan di input otomatis nilai "sabit-1" karena memang belum ada sebelumnya nilai lain
		  {
			$no = 00001;
		  }
		  $this->$no=$newID; // nilai1 di set nilai yang sudah di dapat tadi
	   } 
	
        return $newID;
    }
}
