<?php
namespace mechralph04\hellobroadcaster
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class MyPlugin extends PluginBase{
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "hbw"){
      $sender->sendMessage("Hi!");
      return true;
    }
    return false;
  }
}
