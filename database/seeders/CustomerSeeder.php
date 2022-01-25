<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Customer;
        $item->id = 1;
        $item->ten = "Võ Tuấn";
        $item->ngaysinh = "2000/12/10";
        $item->gioitinh = "Nam";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 2;
        $item->ten = "Chiếm An";
        $item->ngaysinh = "2000/12/09";
        $item->gioitinh = "Nam";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 3;
        $item->ten = "Biên Thùy";
        $item->ngaysinh = "2000/12/10";
        $item->gioitinh = "Nam";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
