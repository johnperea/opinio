<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $nombre
 * @property string $username
 * @property string $password
 * @property integer $id_rol
 * @property integer $id_punto
 *
 * The followings are the available model relations:
 * @property Puntos $idPunto
 * @property Roles $idRol
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, username, password, id_rol', 'required'),
			array('id_rol, id_punto', 'numerical', 'integerOnly'=>true),
			array('nombre, username, password', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nombre, username, password, id_rol, id_punto', 'safe', 'on'=>'search'),
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
			'idPunto' => array(self::BELONGS_TO, 'Puntos', 'id_punto'),
			'idRol' => array(self::BELONGS_TO, 'Roles', 'id_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombre' => 'Nombre',
			'username' => 'username',
			'password' => 'password',
			'id_rol' => 'Id Rol',
			'id_punto' => 'Id Punto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('id_punto',$this->id_punto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
public function validatePassword($password)
 {
 return $this->hashPassword($password)===$this->password;
 }
 public function hashPassword($password)
 {
 return $password;
 }
}