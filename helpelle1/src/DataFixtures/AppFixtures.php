<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Associations;


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
        $user->setEmail('admin@test.fr');
        $user->setRoles(['ROLE_ADMIN']);

        $associations = new Associations();
        $associations->setNom('admin');
        $associations->setType('violence conjugale');
        $associations->setAdresse('14 allée chimen chyen');
        $associations->setTelephone('01 34 13 23 34');
        $associations->setRegion('ile de france');
        $associations->setMail('admin@test.fr');
        $associations->setDescriptif('Anakin... je suis ton pere ...');
       
        

        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);

        $manager->persist($user);
        $manager->persist($associations);

       
        
        // $product = new Product();
        // $manager->persist($product);
        $manager->flush();
        

       

        

    }
}
