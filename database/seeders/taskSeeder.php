<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliahs')->insert([
            ['kodeMataKuliah'=>'MK001',
            'namaMataKuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kodeMataKuliah'=>'MK002',
            'namaMataKuliah'=>'Audit SI',
            'sks'=>4],
            ['kodeMataKuliah'=>'MK003',
            'namaMataKuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4],
        ]
        );

        \DB::table('khs')->insert([
            ['kodeKhs'=>'KHS001',
            'keterangan'=>'2021/2022',
            'keteranganSingkat'=>'2021/2022'],
            ['kodeKhs'=>'KHS002',
            'keterangan'=>'2022/2023',
            'keteranganSingkat'=>'2022/2023'],
            ['kodeKhs'=>'KHS003',
            'keterangan'=>'2023/2024',
            'keteranganSingkat'=>'2023/2024'],
        ]
        );

        \DB::table('khs_details')->insert([
            ['kodeKhsDetail'=>'KHS001',
            'kodeKhs'=>'KHS001',
            'nilai'=>100],
            ['kodeKhsDetail'=>'KHS002',
            'kodeKhs'=>'KHS002',
            'nilai'=>100],
            ['kodeKhsDetail'=>'KHS003',
            'kodeKhs'=>'KHS003',
            'nilai'=>100],
        ]
        );
        \DB::table('programstudis')->insert([
            ['nama'=>'Sistem Informasi',
            'deskripsi'=>'Mempelajari Sistem Informasi',
            ],
            ['nama'=>'Akuntasi',
            'deskripsi'=>'Mempelajari Akuntansi',
            ],
            ['nama'=>'Informatika',
            'deskripsi'=>'Mempelajari Informatika',
            ],
            ['nama'=>'Manajemen',
            'deskripsi'=>'Mempelajari Manajemen',
            ],
            ['nama'=>'Hukum',
            'deskripsi'=>'Mempelajari Hukum',
            ],
        ]
        );


        \DB::table('pembayarans')->insert([
            ['student_id'=>'03081210033',
            'amount'=>34000000.3,
            'payment_date'=>'2023-10-17',
            'payment_method'=>'Cash'
            ],
            ['student_id'=>'03081210034',
            'amount'=>33000000.0,
            'payment_date'=>'2023-10-17',
            'payment_method'=>'Cash'
            ],
            ['student_id'=>'03081210035',
            'amount'=>33500000.0,
            'payment_date'=>'2023-10-17',
            'payment_method'=>'Cash'
            ],
            ['student_id'=>'03081210036',
            'amount'=>36500000.4,
            'payment_date'=>'2023-10-17',
            'payment_method'=>'Debit'
            ],
            ['student_id'=>'03081210037',
            'amount'=>36000000.7,
            'payment_date'=>'2023-10-17',
            'payment_method'=>'Debit'
            ],
        ]
        );

        \DB::table('jadwalkuliahs')->insert([
            ['kode_matakuliah'=>'SYS0001',
            'kode_term'=>'term1',
            'kode_dosen'=>'0301011',
            'day'=>'Senin',
            'jam_mulai'=>'17:00:00',
            'jam_selesai'=>'19:00:00',
            'ruangan'=>'AD101',
            ],
            ['kode_matakuliah'=>'SYS0002',
            'kode_term'=>'term1',
            'kode_dosen'=>'0301012',
            'day'=>'Selasa',
            'jam_mulai'=>'17:00:00',
            'jam_selesai'=>'19:00:00',
            'ruangan'=>'AD101',
            ],
            ['kode_matakuliah'=>'SYS0003',
            'kode_term'=>'term1',
            'kode_dosen'=>'0301013',
            'day'=>'Rabu',
            'jam_mulai'=>'17:00:00',
            'jam_selesai'=>'19:00:00',
            'ruangan'=>'AD103',
            ],
            ['kode_matakuliah'=>'SYS0004',
            'kode_term'=>'term1',
            'kode_dosen'=>'0301014',
            'day'=>'Kamis',
            'jam_mulai'=>'17:00:00',
            'jam_selesai'=>'19:00:00',
            'ruangan'=>'AD101',
            ],
            ['kode_matakuliah'=>'SYS0005',
            'kode_term'=>'term1',
            'kode_dosen'=>'0301015',
            'day'=>'Jumat',
            'jam_mulai'=>'17:00:00',
            'jam_selesai'=>'19:00:00',
            'ruangan'=>'AD102',
            ],
        ]
        );
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 15; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('mahasiswas')->insert([
    			'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
    			'tahunMasuk' => '2021',
    			'jurusan' => $faker->address
    		]);
        }
    }
}
