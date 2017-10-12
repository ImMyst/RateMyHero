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

    }
