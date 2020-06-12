<?php
namespace secretsilver\snowball;

use pocketmine\event\Listener;
use pocketmine\level\Explosion;
use pocketmine\event\entity\ProjectileHitEntityEvent;
use pocketmine\entity\Living;
use pocketmine\plugin\PluginBase;
  
class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

public function snowballEntityHit(ProjectileHitEntityEvent $e){
    var_dump("event fired");
  if($e->getEntityHit() instanceof Living){
    var_dump("Test");
    $explosion = new Explosion($e->getEntityHit(), 5, null);
    $explosion->explodeB();
  }
}
}
