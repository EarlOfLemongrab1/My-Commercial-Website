<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Doodles',
                'description' => 'Created by Doodles ☑',
                'image' => 'https://lh3.googleusercontent.com/AGP4ZHnmtkNgHfqxuO4L3xXSFi65j77KqV5bw4VZBhpBsdKy3Ea6TAo2TrmlawzcEhUx0L1h8MS6DTXn17OaJ1qow3FaDxgvfZs6KyE=w600',
                'price' => 26000.22,
                'stock' => 25
            ],
            [
                'name' => 'Ape',
                'description' => 'Created by BoredApeYachtClub ☑',
                'image' => 'https://lh3.googleusercontent.com/C3PvvpGQhCGXv7L9rqMINEhlMW7FnyfhMLiEHSWGuPKI5xBfI0SXSOngAIQLo6ZFF8UJHpIZ-apXHBSkuqwpfOakMU8y7rUKGw-l7g=w600',
                'price' => 50000.000,
                'stock' => 14
            ],
            [
                'name' => 'Unicorn',
                'description' => 'Created by Tert',
                'image' => 'https://lh3.googleusercontent.com/INOdR79aLAw365oo96Pt3cFYmVIWzM0XX6gQQa1HLFUXnw9ZRM7mm5QaM1bSPSPKLRJLJvIIefdUmvm0q3mkUYd8=w600',
                'price' => 75000.000,
                'stock' => 10
            ],
            [
                'name' => 'Pinkie',
                'description' => 'Created by 0ABDBF',
                'image' => 'https://lh3.googleusercontent.com/cb6vq__BAxPmFPaI1OBmD3rOf29_st5-ZopTXGyuuf0SK2V25na8nW8lXVxt8x_Hk59Bm2x_k8avGNuQAegm7Okqg95CZC-P09IJfQ=w600',
                'price' => 10000.000,
                'stock' => 5
            ],
            [
                'name' => 'LAZER EYEZ GEN 2 - MAGENTA',
                'description' => 'Created by OfficialMikeTyson ☑',
                'image' => 'https://lh3.googleusercontent.com/8nSVYobCnjwlNshozhSxpCGG5DXfU6ib7Rt9ArSAoOkFwAYtihFhtiMhBMpxX4biYj6Pbt351ZAkixw1zk76bJcSngr8qdDkylNMTso=w600',
                'price' => 100000.000,
                'stock' => 2
            ],
            [
                'name' => 'Bored Baby',
                'description' => 'Created by BoredMummyWakingUpVault',
                'image' => 'https://lh3.googleusercontent.com/1DvSY7KW4NwiwZnfTunlgj9d6nZ1aNXGvUGW0TxI0rirYD8v9_2qfPMHmlDAnEO-6gX7qX19m2OqrIEdZQGyeBm9p9TnMew5HLVxcQ=w600',
                'price' => 15000.000,
                'stock' => 7
            ],
            [
                'name' => 'CypherPunk',
                'description' => 'Created by Max Osiris',
                'image' => 'https://lh3.googleusercontent.com/IsfeQX4mEBZF6iue3MtNPijfE6r8tLB2LfoHY14UgBkcND6DavW9h-LjqJCO-Hwy6frYKJyD-OjdfDgAexTxfO1D=w600',
                'price' => 9999.999,
                'stock' => 1
            ],
            [
                'name' => 'Croco',
                'description' => 'Created by FlashMovie',
                'image' => 'https://lh3.googleusercontent.com/qW7PqBtG1wLXgpKCprxfKAjaJpqRrtCmxYpMZtS-dK2y0oRzAhLUzJIvX6l_bWLzDbp2OhVLUJE1gAxaXeiNZolLzbgpckA3dTZM=w600',
                'price' => 19000.000,
                'stock' => 4
            ],
            [
                'name' => 'Ninja',
                'description' => 'Created by Robot Inc',
                'image' => 'https://lh3.googleusercontent.com/dESpxQfgkru-iSC51OJCUvKVaGXf7Z9edxcuPOLUr5-XnFg1YdYoOVm3XIoZo27dck3k7PxgB_eOa2X7fG1eZcisOmDDAMswdrjEmg=w600',
                'price' => 49000.000,
                'stock' => 6
            ],
            [
                'name' => 'Lama',
                'description' => 'Created by BabyLlamaClub',
                'image' => 'https://lh3.googleusercontent.com/fImMJ0HD8J5bVHiEHI-FVCQDx5L8oyGQfdUPgEWgdSGio14qLjoPokaCVAtPxVVrgI_iGycAU5WCP6w0-Nbs-LfJAthd5KqHC4_jPw=w600',
                'price' => 5000.000,
                'stock' => 10
            ],
            [
                'name' => 'Catfish',
                'description' => 'Created by Catslife4ever',
                'image' => 'https://lh3.googleusercontent.com/WiOxvBWZQdbFlaMNZS1NBiCMyelRcvM5ADAC0VX1QefECwOjp03d3KW4JmwsNgkU56nXtm85U5PZS3jDv7bpXsvfqKJLtpQOEg2fCQ=w600',
                'price' => 20000.000,
                'stock' => 9
            ],
            [
                'name' => 'Open it',
                'description' => 'Created by Game Changers',
                'image' => 'https://lh3.googleusercontent.com/9x5M_P2M6GLLA-CiLL3FQnjR18rGZIRfnrKzifOyBRHHTxPbzUuizGecTAbCsz9tZO0VPpfuE2_GJMQCKZn0xZZ2yZiJulSiKEyD=w600',
                'price' => 40000.000,
                'stock' => 9
            ],
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}