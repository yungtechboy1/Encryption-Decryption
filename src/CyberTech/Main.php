<?php
/*
 * HungerPE (v0.0.0.1) by CyberTech++
 * Developer: CyberTech++ (Yungtechboy1 & LilCrispy2o9)
 * Website: http://www.cybertechpp.com
 * Date: 2/16/15 9:22 PM (CST)
 * Copyright & License: (C) 2015 Cybertech++
 * All Rights Reserved
 */

namespace CyberTech;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionAttachment;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\item\Item;
use pocketmine\inventory\BaseInventory;
use pocketmine\inventory\Inventory;



class Main extends PluginBase implements Listener{
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        return true;
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    switch($command->getName()){
        case "encrypt":
            return true;
        default:
            return false;

        
        
    }
    }
    

    }