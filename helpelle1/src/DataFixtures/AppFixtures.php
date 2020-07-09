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

        $user->setNom('cottin');
        $user->setPrenom('mathilde');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('admin@test.fr');

        $association = new Association();
        $association->setNom('admin');
        $association->setType('violence conjugale');
        $association->setAdresse('14 allée chimen chyen');
        $association->setTelephone('01 34 13 23 34');
        $association->setRegion('ile de france');
        $association->setMail('admin@test.fr');
        $association->setDescriptif('Anakin... je suis ton pere ...');
       
        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);

        $manager->persist($user);
        $manager->persist($association);
        $manager->flush();

    }
}
