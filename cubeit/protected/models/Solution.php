<?php

/**
 * This is the model class for table "solution".
 *
 * The followings are the available columns in table 'solution':
 * @property integer $id
 * @property string $scramble
 * @property integer $user_id
 * @property string $solve_time
 * @property string $goal
 * @property string $cube_type
 * @property string $date
 *
 * The followings are the available model relations:
 * @property User $user
 */

 
 
class Solution extends CActiveRecord
{
	private $generatedScramble;
	
	const GOAL_SPEED = 0;
	const GOAL_MOVES = 1;
	const GOAL_ONE_HAND = 2;
	const GOAL_BLINDFOLD = 3;
	
	const CUBE_2x2x2 = 0;
	const CUBE_3x3x3 = 1;
	const CUBE_4x4x4 = 2;
	const CUBE_5x5x5 = 3;

	/**
	 * @return array types of goals
	 **/
	public function getGoalOptions() {
		return array (
			self::GOAL_SPEED => "Speed",
			self::GOAL_MOVES => "Fewest Moves",
			self::GOAL_ONE_HAND => "Single-Handed",
			self::GOAL_BLINDFOLD => "Blindfolded"
		);
	}
	
	public function getCubeTypes() {
		return array(
			self::CUBE_2x2x2 => "2x2x2",
			self::CUBE_3x3x3 => "3x3x3",
			self::CUBE_4x4x4 => "4x4x4",
			self::CUBE_5x5x5 => "5x5x5"
		);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scramble, user_id, solve_time, goal, cube_type, date', 'required'),
			array('scramble, solve_time', 'length', 'max'=>128),
			array('user_id, goal, cube_type', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scramble, user_id, solve_time, goal, cube_type, date', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'scramble' => 'Scramble',
			'user_id' => 'User',
			'solve_time' => 'Solve Time',
			'goal' => 'Goal',
			'cube_type' => 'Cube Type',
			'date' => 'Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('scramble',$this->scramble,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('solve_time',$this->solve_time,true);
		$criteria->compare('goal',$this->goal,true);
		$criteria->compare('cube_type',$this->cube_type,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getGeneratedScramble() {
		echo $this->generatedScramble;
	}	
	
	public function generateScramble() {
		$newScramble = "";
		$options = array("U", "U'", "U2", "D", "D'", "D2", "L", "L'", "L2", "F", "F'", "F2", "B", "B'", "B2");
		for ($i = 1; $i <= 20; $i++)
			$newScramble .= $options[array_rand($options)]." ";
			
		return $newScramble;
	}
	
	public function __construct() {
		$generatedScramble = $this->generateScramble();
	}
}
