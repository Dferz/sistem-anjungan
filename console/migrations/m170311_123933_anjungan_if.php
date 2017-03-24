<?php

use yii\db\Migration;

class m170311_123933_anjungan_if extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('prestasi_mahasiswa', [
            'id' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'anggota' => $this->text(),
            'deskripsi' => $this->text(),
            'foto' => $this->string()->notNull(),
            'tanggal' => $this->date(),
        ], $tableOptions);

        $this->createTable('profil_dosen', [
            'id' => $this->primaryKey(),
            'nama_dosen' => $this->string()->notNull(),
            'bidang' => $this->string()->notNull(),
            'pend_terakhir' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'jabatan' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('ta_unggulan', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'nim' => $this->string(11)->notNull(),
            'anggota' => $this->text(),
            'judul' => $this->string()->notNull(),
            'keyword' => $this->text(),
            'deskripsi' => $this->text(),
            'tanggal' => $this->date(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('prestasi_mahasiswa');
        $this->dropTable('profil_dosen');
        $this->dropTable('ta_unggulan');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
