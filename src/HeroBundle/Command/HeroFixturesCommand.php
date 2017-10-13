<?php

namespace HeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;
use HeroBundle\Entity\User;


class HeroFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
      $this
            ->setName('hero:fixtures')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $hero = new Hero();
      $hero->setFirstname ('fdsf');
      $hero->setLastname ('dfsdf');

      $em = $this->getContainer()->get('doctrine.orm.entity_manager');

      $em->persist($hero);

      $em->flush();
              $output->writeln('<info>OK</info>');

      }

      private function importUsers($output)
                 {
                     $passwordEncoder = $this->getContainer()->get('security.password_encoder');
                     $em = $this->getContainer()->get('doctrine.orm.entity_manager');
                     $user = new User();
                     $user->setEmail('monsieur@madame.com');
                     $user->setPassword($passwordEncoder->encodePassword($user, 'monsieur'));
                     $user->setRoles(['ROLE_ADMIN']);
                     $em->persist($user);

                     $user = new User();
                     $user->setEmail('madame@monsieur.com');
                     $user->setPassword($passwordEncoder->encodePassword($user, 'madame'));
                     $user->setRoles(['ROLE_USER']);
                     $em->persist($user);
                     $em->flush();
                     $output->writeln('<info>Import users OK !</info>');
                 }

    }
