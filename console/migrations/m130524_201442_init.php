<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'role' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('user',
            ['id','username','auth_key','password_hash','password_reset_token','email','status','created_at','updated_at','role'],
            [
                [1,'adminyii','M_jSPdyaJ6EtL8Iky2scs8WX0LWhKxCa',
                    '$2y$13$XDYpavOvupQOAQ57tYYNHOvOM9g8gA61vY3QTPXYD7xHQwQ3j90SC',
                    'NULL','admin@admin.com','10','1505272232','1505272232',1],
            ]
        );
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
