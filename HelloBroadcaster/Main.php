<?php
namespace HelloBroadcaster;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
class MyPlugin extends PluginBase{
  public function onEnable(){
    $this->getLogger()->info("Hello Broadcaster enabled");
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "hbw"){
      $sender->sendMessage("Happy Father's Day from", $sender->getName());
      return true;
    }
    return false;
  }
}
