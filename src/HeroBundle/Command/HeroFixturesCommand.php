<?php

namespace HeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\User;
use HeroBundle\Entity\Film;


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
      $hero->setFirstname('Luke');
      $hero->setLastname('Skywalker');
      $hero->setType('Hero');
      $hero->setFilm('Star Wars');
      $em = $this->getContainer()->get('doctrine.orm.entity_manager');
      $em->persist($hero);

      $hero = new Hero();
      $hero->setFirstname('Dark');
      $hero->setLastname('Vador');
      $hero->setType('Vilain');
      $hero->setFilm('Star Wars');
      $em->persist($hero);

      $hero = new Hero();
      $hero->setFirstname('Hermione');
      $hero->setLastname('Granger');
      $hero->setType('Hero');
      $hero->setFilm('Harry Potter');
      $em->persist($hero);

      $hero = new Hero();
      $hero->setFirstname('Lord');
      $hero->setLastname('Voldemort');
      $hero->setType('Vilain');
      $hero->setFilm('Harry Potter');
      $em->persist($hero);

      $film = new Film();
      $film->setTitle('Star Wars');
      $film->setYear('1977');
      $film->setProducer('Georges Lucas');
      $em->persist($film);

      $film = new Film();
      $film->setTitle('Harry Potter');
      $film->setYear('2001');
      $film->setProducer('Chris Colombus');
      $em->persist($film);

      $em->flush();
              $output->writeln('<info>OK</info>');

          $this->importUsers($output);

      }

      private function importUsers($output)
      {
         $passwordEncoder = $this->getContainer()->get('security.password_encoder');
         $em = $this->getContainer()->get('doctrine.orm.entity_manager');

         $user = new User();
         $user->setPseudo('monsieur');
         $user->setPassword('monsieur');
         $user->setRoles(['ROLE_ADMIN']);
         $em->persist($user);


         $user = new User();
         $user->setPseudo('madame');
         $user->setPassword('madame');
         $user->setRoles(['ROLE_USER']);
         $em->persist($user);

         $em->flush();
         $output->writeln('<info>Import users OK !</info>');
      }

    }
