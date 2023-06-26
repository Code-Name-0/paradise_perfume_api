<?php

namespace Database\Factories;

use App\Models\Characteristic;
use App\Models\Perfume;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Characteristic>
 */
class CharacteristicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {    
        $perfumeCharacteristics = [
            'Floral',
            'Citrusy',
            'Woody',
            'Spicy',
            'Fresh',
            'Oriental',
            'Aromatic',
            'Fruity',
            'Vanilla',
            'Powdery',
            'Green',
            'Aquatic',
            'Chypre',
            'Gourmand',
            'Amber',
            'Musk',
            'Herbal',
            'Leather',
            'Smoky',
            'Sensual',
            'Exotic',
            'Sweet',
            'Clean',
            'Powder',
            'Balsamic',
            'Earthy',
            'Crisp',
            'Juicy',
            'Warm',
            'Cool',
            'Intense',
            'Delicate',
            'Rich',
            'Soothing',
            'Romantic',
            'Elegant',
            'Sparkling',
            'Sophisticated',
            'Bold',
            'Mysterious',
            'Enchanting',
            'Dreamy',
            'Luxurious',
            'Alluring',
            'Provocative',
            'Refined',
            'Intriguing',
            'Captivating',
            'Charming',
            'Lively',
            'Adventurous',
            'Seductive',
            'Vibrant',
            'Euphoric',
            'Zesty',
            'Sunny',
            'Delicious',
            'Dreamlike',
            'Glamorous',
            'Opulent',
            'Airy',
            'Effervescent',
            'Crisp',
            'Comforting',
            'Velvety',
            'Tropical',
            'Youthful',
            'Mystical',
            'Playful',
            'Balmy',
            'Mesmerizing',
            'Whimsical',
            'Subtle',
            'Intoxicating',
            'Invigorating',
            'Effortless',
            'Calm',
            'Feminine',
            'Masculine',
            'Classic',
            'Timeless',
            'Exquisite',
            'Unisex',
            'Sultry',
            'Scented',
            'Herbaceous',
            'Silky',
            'Aphrodisiac',
            'Summery',
            'Autumnal',
            'Winter',
            'Spring',
            'Romantic',
            'Magnetic',
            'Heady',
            'Enveloping',
            'Smokey',
            'Mature',
            'Youthful',
            'Innocent',
            'Sunny',
            'Royal',
            'Spirited',
            'Sparkling',
            'Comfortable',
            'Delicate',
            'Intense',
            'Elegant',
        ];
        return [
            'name' => $this->faker->unique()->randomElement($perfumeCharacteristics),
        ];
    }
}