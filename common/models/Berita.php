<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $judul
 * @property string $tanggal
 * @property string $isi
 * @property int $kategori_id
 *
 * @property Kategori $kategori
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul'], 'required'],
            [['tanggal'], 'safe'],
            [['isi'], 'string'],
            [['kategori_id'], 'integer'],
            [['judul'], 'string', 'max' => 64],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'tanggal' => 'Tanggal',
            'isi' => 'Isi',
            'kategori_id' => 'Kategori ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'kategori_id']);
    }
}
