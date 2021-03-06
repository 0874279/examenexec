<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $nummer
 * @property string $naam
 * @property string $klas
 *
 * @property Gesprek[] $gespreks
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nummer', 'naam', 'klas'], 'required'],
            [['nummer'], 'integer', 'max' => 999999 ],
            [['naam'], 'string', 'max' => 30],
            [['klas'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nummer' => 'Nummer',
            'naam' => 'Naam',
            'klas' => 'Klas',
        ];
    }

    /**
     * Gets query for [[Gespreks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGesprekken()
    {
        return $this->hasMany(Gesprek::className(), ['studentid' => 'id']);
    }

    public function getAantalGesprekken()
    {
        return $this->hasMany(Gesprek::className(), ['studentid' => 'id'])->count();
    }

}
