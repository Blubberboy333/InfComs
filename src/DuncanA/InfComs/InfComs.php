<?php

namespace DuncanA\InfComs;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server

class InfComs extends PluginBase{
   public function onEnable(){
      $this->getLogger()->info(TextFormat::BLUE . "InfComs enabled");
   }
   public function onDisable(){
      $this->getLogger()->info(TextFormat::RED . "InfComs disabled");
   }
   
   public function onCommand(CommandSender $sender, Command $command, $label, array $args){
      if(strtolower($command->getName()) === "info"){
         if($sender->hasPermission("infcoms.command.info")){
            $online = $this->getServer()->getOnlinePlayers();
            $sender->sendMessage("There are " .$online. " players online");
         }else{
            $sender->sendCommand("You don't have permission to do that!");
         }
      }elseif(strtolower($command->getName()) === "quit"){
         if($sender instanceof Player){
            if($sender->hasPermission("infcoms.command.quit")){
               $player->kick();
            }else{
               $sender->sendMessage("You don't have permission to do that!");
            }
         }else{
            $sender->sendMessage(TextFormat::RED . "Please run that command in-game");
         }
      }elseif(strtolower($command->getName()) === "inv"){
         if($sender->hasPermission("infcoms.command.inv")
            $checkinv = $this->getServer()->getPlayerInventory();
            $player->sendMessage("Your inventory has been checked by an operator.")
            $sender->Broadcast("$player has been checked fpr security purposes. We may contact you for some reason. If not, don't worry about it.")
            //I hate my life. My code disappeared here ;-;
}
