<?php
class GamblingSimulation                //Class declaration
{
    //Declaring Constants
    const BET=1;
    const STAKE=100;
    const NO_OF_DAYS=20;

    //Created method for displaying welcome message
    function welcome_mesage()
    {
        echo "=======================================\n";
        echo "Welcome to Gambling Simulation Program\n";
        echo "=======================================\n";
    }


    
    
}
$gambling_simulator_object=new GamblingSimulation();
$gambling_simulator_object->welcome_mesage();

?>