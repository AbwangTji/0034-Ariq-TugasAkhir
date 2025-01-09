<?php
//2025-01-08-114352_CreateTables
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTables extends Migration
{
    public function up()
{
    // Dapatkan koneksi database
    $db = \Config\Database::connect();

    // Cek apakah tabel sudah ada
    if (!$db->tableExists('anak')) {
        $this->forge->addField([
            'id_anak'         => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'nama'            => ['type' => 'VARCHAR', 'constraint' => 100],
            'tanggal_lahir'   => ['type' => 'DATE'],
            'jenis_kelamin'   => ['type' => 'ENUM', 'constraint' => ['L', 'P']],
            'id_ibu'          => ['type' => 'INT', 'constraint' => 11],
        ]);
        $this->forge->addKey('id_anak', true);
        $this->forge->addForeignKey('id_ibu', 'ibu', 'id_ibu', 'CASCADE', 'CASCADE');
        $this->forge->createTable('anak');
    } else {
        echo "Table 'anak' already exists!\n";
    }
}

    
    public function down()
    {
        // Hapus tabel jika rollback
        $this->forge->dropTable('anak');
        $this->forge->dropTable('ibu');
    }
}
