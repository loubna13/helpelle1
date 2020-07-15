<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Association;
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
        $user->setEmail('loubnabarkat@outlook.fr');

        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);

        $user2 = new User();
        $user2->setPseudo('user2');

        $user2->setNom('cottin');
        $user2->setPrenom('mathilde');
        $user2->setRoles(['ROLE_user']);
        $user2->setEmail('test@test.fr');

        $password = $this->encoder->encodePassword($user2, 'pass_1234');
        $user2->setPassword($password);


        $user3 = new User();
        $user3->setPseudo('user3');

        $user3->setNom('elusue');
        $user3->setPrenom('Tiffany');
        $user3->setRoles(['ROLE_user']);
        $user3->setEmail('test@test1.fr');

        $password = $this->encoder->encodePassword($user3, 'pass_1234');
        $user3->setPassword($password);


        $user4 = new User();
        $user4->setPseudo('user4test');

        $user4->setNom('emsaba');
        $user4->setPrenom('Nadia');
        $user4->setRoles(['ROLE_user']);
        $user4->setEmail('test@test2.fr');

         $password = $this->encoder->encodePassword($user4, 'pass_1234');
        $user4->setPassword($password);



        $association = new Association();
        $association->setNom('admin');
        $association->setType('violence conjugale');
        $association->setAdresse('14 allée chimen chyen');
        $association->setTelephone('01 34 13 23 34');
        $association->setRegion('ile de france');
        $association->setMail('admin@test.fr');
        $association->setDescriptif('Anakin... je suis ton pere ...');
       
       

        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->persist($user4);
        $manager->persist($association);
        $manager->flush();

    }
}
