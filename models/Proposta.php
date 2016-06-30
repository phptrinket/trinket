<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proposta".
 *
 * @property integer $id
 * @property integer $id_usuario
 * @property integer $id_produto
 * @property string $comentario
 * @property string $data_oferta
 * @property string $data_conclusao
 *
 * @property Usuario $idUsuario
 * @property Produto $idProduto
 */
class Proposta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proposta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_produto', 'comentario', 'data_oferta'], 'required'],
            [['id_usuario', 'id_produto'], 'integer'],
            [['data_oferta', 'data_conclusao'], 'safe'],
            [['comentario'], 'string', 'max' => 255],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id_usuario' => 'id']],
            [['id_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['id_produto' => 'id']],
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
            'id_produto' => 'Id Produto',
            'comentario' => 'Comentário',
            'data_oferta' => 'Data Oferta',
            'data_conclusao' => 'Data Conclusao',
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
    public function getIdProduto()
    {
        return $this->hasOne(Produto::className(), ['id' => 'id_produto']);
    }
}
