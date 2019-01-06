<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property int $user_id
 * @property int $doc_cat
 * @property string $status
 * @property string $created
 * @property string $status_date
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'doc_cat', 'status', 'created', 'status_date'], 'required'],
            [['id', 'user_id', 'doc_cat'], 'integer'],
            [['created', 'status_date'], 'safe'],
            [['status'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'doc_cat' => 'Doc Cat',
            'status' => 'Status',
            'created' => 'Created',
            'status_date' => 'Status Date',
        ];
    }
}
