<?php
namespace secretsilver\snowball;

use pocketmine\event\Listener;
use pocketmine\level\Explosion;
use pocketmine\event\entity\ProjectileHitEntityEvent;
use pocketmine\entity\Living;
use pocketmine\plugin\PluginBase;
  
class Main extends PluginBase implements Listener {

public function snowballEntityHit(ProjectileHitEntityEvent $e){
  if($e->getEntity() instanceof Living){
    var_dump("Test");
    $explosion = new Explosion($e->getEntity(), 5, null);
    $explosion->explodeB();
  }
}
}
