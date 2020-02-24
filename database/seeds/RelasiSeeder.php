<?php
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //menghapus semua simple data
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        //menghapus data
        $dosen = Dosen::create([
             "nama"=>"Seshoin Kiara",
             "nipd"=>"85746385"
        ]);
        $this->command->info('Data Dosen Berhasil dibuat!!');

         $mhs1 = Mahasiswa::create([
             "nama"=>"Sei Shounagon",
             "nim"=>"294723894",
             "id_dosen"=> $dosen->id
        ]);

         $mhs2 = Mahasiswa::create([
             "nama"=>"Murasaki no Shikibu",
             "nim"=>"94859347",
             "id_dosen"=> $dosen->id
        ]);

        $mhs3 = Mahasiswa::create([
             "nama"=>"Minamoto no Raikou",
             "nim"=>"54674848",
             "id_dosen"=> $dosen->id
        ]);
        $this->command->info('Data Mahasiswa Berhasil dibuat!!');

         $wl1 = Wali::create([
             "nama"=>"Oda Nobunaga",
             "id_mahasiswa"=> $mhs1->id
        ]);

         $wl2 = Wali::create([
             "nama"=>"Kama",
             "id_mahasiswa"=> $mhs2->id
        ]);

         $wl3 = Wali::create([
             "nama"=>"Europa",
             "id_mahasiswa"=> $mhs3->id
        ]);
        $this->command->info('Data Wali Berhasil dibuat!!');

        $hobi1 = Hobi::create([
             "hobi"=>"Main game online"
        ]);

        $hobi2 = Hobi::create([
             "hobi"=>"Baca Manga"
        ]);

        $hobi3 = Hobi::create([
             "hobi"=>"Nonton film"
        ]);

        $mhs1->hobi()->attach($hobi1->id);
        $mhs1->hobi()->attach($hobi2->id);
        $mhs2->hobi()->attach($hobi2->id);
        $mhs3->hobi()->attach($hobi3->id);
        $this->command->info('Data Hobi Mahasiswa Berhasil dibuat!!');
    }
}
