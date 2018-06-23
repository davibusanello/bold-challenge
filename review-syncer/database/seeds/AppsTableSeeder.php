<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appNames = array(
            'product-upsell',
            'product-discount',
            'store-locator',
            'product-options',
            'quantity-breaks',
            'product-bundles',
            'customer-pricing',
            'product-builder',
            'social-triggers',
            'recurring-orders',
            'multi-currency',
            'quickbooks-online',
            'xero',
            'the-bold-brain'
        );
        foreach ($appNames as $name) {
            DB::table('apps')->insert([
                'name' => $name,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
