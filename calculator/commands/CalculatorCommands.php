<?php
namespace calculator\commands;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CalculatorCommands extends Command
{
    protected static $defaultName = 'calculator';

    protected function configure()
    {
         $this
        ->addArgument('input11',InputArgument::REQUIRED)
        ->addArgument('input1',InputArgument::REQUIRED)
        ->addArgument('input2',InputArgument::REQUIRED)
       ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    { 
         $n = $input->getArgument('input1');
         $n1= $input->getArgument('input2');
         $op= $input->getArgument('input11');
       
            if($op=='add' || $op=='Add' || $op=='+')
            {
               $add=$n+$n1;
               
              $output->writeln("Addition".'='.$add);
            }
            else if($op=='sub' || $op=='Sub' || $op=='-')
            {
               $sub=$n-$n1;
               
              $output->writeln("Subtraction".'='.$sub);
            }
            else if($op=='mul' || $op=='Mul')
            {
                $mul=$n*$n1;
               
              $output->writeln("Multiplication".'='.$mul);
            }
            else if($op=='div' || $op=='Div' || $op=='/')
            {
               $div=$n/$n1;
               
              $output->writeln("Division".'='.$div);
            }
    }
}

