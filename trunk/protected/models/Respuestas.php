<?php

/**
 * This is the model class for table "respuestas".
 *
 * The followings are the available columns in table 'respuestas':
 * @property integer $id
 * @property string $fecha
 * @property string $respuesta
 * @property integer $id_punto
 * @property integer $id_pregunta
 *
 * The followings are the available model relations:
 * @property Preguntas $idPregunta
 * @property Puntos $idPunto
 */
class Respuestas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Respuestas the static model class
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
		return 'respuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, fecha, respuesta, id_punto, id_pregunta', 'required'),
			array('id, id_punto, id_pregunta', 'numerical', 'integerOnly'=>true),
			array('respuesta', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha, respuesta, id_punto, id_pregunta', 'safe', 'on'=>'search'),
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
			'idPregunta' => array(self::BELONGS_TO, 'Preguntas', 'id_pregunta'),
			'idPunto' => array(self::BELONGS_TO, 'Puntos', 'id_punto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'respuesta' => 'Respuesta',
			'id_punto' => 'Id Punto',
			'id_pregunta' => 'Id Pregunta',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('respuesta',$this->respuesta,true);
		$criteria->compare('id_punto',$this->id_punto);
		$criteria->compare('id_pregunta',$this->id_pregunta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}