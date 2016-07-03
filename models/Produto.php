<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $id
 * @property integer $id_usuario
 * @property string $nome
 * @property string $descricao
 * @property string $imagem
 *
 * @property Usuario $idUsuario
 * @property Proposta[] $propostas
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'nome', 'descricao', 'imagem'], 'required'],
            [['id_usuario'], 'integer'],
            [['nome', 'descricao', 'imagem'], 'string', 'max' => 255],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id_usuario' => 'id']],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_usuario' => 'Id Usuario',
            'nome' => 'Nome',
            'descricao' => 'Descrição',
            'imagem' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropostas()
    {
        return $this->hasMany(Proposta::className(), ['id_produto' => 'id']);
    }
}
