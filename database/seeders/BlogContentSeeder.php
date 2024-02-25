<?php

namespace Database\Seeders;

use App\Models\BlogContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_content')->delete();

        BlogContent::create([
            'id' => 1,
            'language_id' => 1,
            'blog_id' => 1,
            'name' => 'Healthyway Production',
            'content' => 'At Healthyway Production Inc/, we are committed to helping our customers succeed. We offer a wide array of services to ensure your products are of the highest quality and compliant with all industry regulations.
We specialize in custom product manufacturing, with an emphasis on quality and customer service. PuroVite is a nutraceutical contract manufacturer that can help you develop, test and bring your products to domestic and international markets quickly and efficiently. We are NSF GMP and NSF for Sports registered and use only the highest quality ingredients in our products.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);
        BlogContent::create([
            'id' => 2,
            'language_id' => 1,
            'blog_id' => 2,
            'name' => 'Manufacturing',
            'content' => 'When you source your manufacturing to Healthyway Production Inc., you can be confident that you are receiving the best possible product for your customers.
Our state-of-the-art facility and team of highly skilled professionals ensure that every product we produce meets the highest standards of quality and safety.
With our experience and expertise, you can trust us to provide you with the best possible products to meet the needs of your customers.
Contact us today to learn more about how we can help you grow your business.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 3,
            'language_id' => 1,
            'blog_id' => 3,
            'name' => 'Quality Assurance Department',
            'content' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 4,
            'language_id' => 1,
            'blog_id' => 4,
            'name' => 'Product Dev',
            'content' => 'Our team of experts has extensive experience in developing various dosage forms including tablets, capsules, powders, and liquid capsules. We can help you create products with the perfect ingredients and dosages, while also verifying label claims and ensuring allergen control. Plus, our formulations are shelf-stable, so you can be confident your product will stay fresh and effective for longer.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 5,
            'language_id' => 1,
            'blog_id' => 5,
            'name' => 'Quality Assurance Department at Healthyway',
            'content' => 'The department also manages a comprehensive training program for all company employees that includes orientation and refresher training on job-specific duties and Good Manufacturing Practices. With its expertise in various dosage forms, ingredient uses, label claims verification, and allergen control programs, PuroVite is a reliable partner for all your shelf-stable formulation needs.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 6,
            'language_id' => 1,
            'blog_id' => 6,
            'name' => 'Sweeteners',
            'content' => 'In some cases, sweeteners may be necessary. However, you can also choose not to use any type of sweetener. Some active ingredients are naturally bitter, bland, or metallic. Sweeteners can help offset those unfavorable tastes. These are the options that we offer for sweeteners:

Natural sweeteners
Artificial sweeteners
Combined sweeteners
Different sweeteners can be used in supplements, depending on the desired taste. Natural sweeteners, artificial sweeteners, and combined sweeteners are all options that can help offset any unfavorable tastes from active ingredients. The right choice of sweetener depends on your preferences or your target market’s preferences. For example, if you think that an all-natural supplement will be more attractive to your target market, you may choose a natural sweetener.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 7,
            'language_id' => 1,
            'blog_id' => 7,
            'name' => 'CAPSULES',
            'content' => 'CAPSULES are an excellent choice for those looking for a 100% vegetarian option that works just as well as a gelatin-based capsule. These come in two types:
Hypromellose/Hydroxypropyl Methylcellulose (HPMC): The shell is made entirely of water and HPMC, without any animal by-products, BSE, GMOs, or gelatin. It is also gluten- and starch-free. Pullulan: This water-soluble polysaccharide is produced by the fermentation of sugar and starch using the fungus Aerobasidum pullulans. It is similar to the HPMC capsule but 100% natural.',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

        BlogContent::create([
            'id' => 8,
            'language_id' => 1,
            'blog_id' => 8,
            'name' => 'Test name post',
            'content' => '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."',
            'meta_keys' => 'test,keys,test keys' ,
            'meta_description' => 'On the other hand, we denounce with righteous indignation and dislike men',
            'image' => 'private_label_capsule_8.png'
        ]);

    }
}
