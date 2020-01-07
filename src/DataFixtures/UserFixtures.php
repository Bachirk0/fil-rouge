<php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($count = 0; $count < 20; $count++) {
            $user = new User();
            $user->setUsername("Username " . $count);
            $user->setPassword("password Fixture" . $count);
            $user->setNomComplet("NomComplet " . $count);
            $user->setActivite("Activite " . $count);
            $manager->persist($user);
        }

        $manager->flush();
    }
}