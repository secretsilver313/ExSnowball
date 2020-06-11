<?php
namespace secretsilver\snowball;

use pocketmine\event\Listener;
use pocketmine\level\Explosion;
use pocketmine\event\entity\snowballEntityHitEvent;
use pocketmine\plugin\PluginBase;
  
class Main extends PluginBase implements Listener {

  public function snowballEntityHit(ProjectileHitEntityEvent $e){
    if($e->getEntity() instanceof Living){
        $explosion = new Explosion($e->getEntity(), 5, null);
        $explosion->explodeB();
    }
  }
}
?>
