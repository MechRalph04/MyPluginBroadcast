<?php
namespace mechralph04\hellobroadcaster
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
class MyPlugin extends PluginBase{
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "hbw"){
      $sender->sendMessage("A hi from", $sender->getName());
      return true;
    }
    return false;
  }
}
