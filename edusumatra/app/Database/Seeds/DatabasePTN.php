<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabasePTN extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Universitas Andalas',
                'path_ke_gambar' => 'assets/unand.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi. A, Hukum. A, Ekonomi. A,',
            ],
            [
                'nama' => 'Universitas Sumatra Utara',
                'path_ke_gambar' => 'assets/usu.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi. A, Hukum. A, Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Syiah Kuala',
                'path_ke_gambar' => 'assets/syiah.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Riau',
                'path_ke_gambar' => 'assets/unri.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Lampung',
                'path_ke_gambar' => 'assets/unila.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Lampung',
                'path_ke_gambar' => 'assets/unila.png',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
            [
                'nama' => 'Universitas Sumatra',
                'path_ke_gambar' => 'assets/',
                'akreditasi' => 'A',
                'profil' => 'Universitas Sumatra is a top-tier institution offering diverse programs.',
                'teks_prodi' => 'Administrasi Negara',
                'prodi' => 'Administrasi, A. Hukum, A. Ekonomi, A.',
            ],
        ];

        // Insert the data into the 'ptn' table
        $this->db->table('ptn')->insertBatch($data);
    }
}
