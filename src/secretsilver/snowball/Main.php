<?php

namespace snowball;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\Listeners;
use pocketmine\level\Explosion;
use pocketmine\event\entity\SnowballEntityHitEvent;
use pocketmine\plugin\PluginBase;
  
class Main extends PluginBase implements Listener {

  public function snowballEntityHit(ProjectileHitEntityEvent $e){
    if($e->getEntity() instanceof Living){
        //The first parameter is the position of the explosion, entities extend Position, so we can directly pass the entity class, 2nd parameter is the size, change it to whatever works ok, and the third is
        $explosion = new Explosion($e->getEntity(), 5, null);
        $explosion->explodeB();
        
    }
  }
}
