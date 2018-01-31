<?php
namespace Orchid\Traits;
use Orchid\Models\Visit;
use Orchid\Models\Visitor;

/**
 *
 */
trait hasVisitTrait
{

    public function visits(){
      return $this->HasMany(\Orchid\Models\Visit::class);
    }

    public function visitors(){
      return $this->belongsToMany(\Orchid\Models\Visitor::class, 'users_visitors');
    }


  }
?>
