<?php
use App\Admin;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        Admin::create([
//            'name' => 'admin',
//            'username' => 'admin',
//            'email' => 'admin@example.com',
//            'password' => Hash::make('74521451'),
//        ]);
        Category::create([
            'name' => 'الأجهزة المنزلية',
        ]);
        Category::create([
            'name' => 'الأثاث و ديكورات المنزل',
        ]);
        Category::create([
            'name' => 'الكتـرونيات',
        ]);
        Category::create([
            'name' => 'الكاميرات',
        ]);
        Category::create([
            'name' => 'أحذية، ملابس و اكسسواراتها',
        ]);
        Category::create([
            'name' => 'الألعاب',
        ]);
        Category::create([
            'name' => 'العطور',
        ]);
        Category::create([
            'name' => 'الرياضة و أدواتها',
        ]);
        factory(\App\Product::class, 50)->create(['category_id' => 1]);
        factory(\App\Product::class, 50)->create(['category_id' => 2]);
        factory(\App\Product::class, 50)->create(['category_id' => 3]);
        factory(\App\Product::class, 50)->create(['category_id' => 4]);
        factory(\App\Product::class, 50)->create(['category_id' => 5]);
        factory(\App\Product::class, 50)->create(['category_id' => 6]);
        factory(\App\Product::class, 50)->create(['category_id' => 7]);
        factory(\App\Product::class, 50)->create(['category_id' => 8]);
    }
}
