<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setPseudo('admin');
        $user->setNom('barkat');
        $user->setPrenom('loubna');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('admin@test.fr');

        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);
      

         $manager->persist($user);
        //$this->addReference('user-admin',$user); // si on met les mapping user post pour appller user-admin dans l'url il me met bien sur ce user ( a voir si je le laisse)




        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
