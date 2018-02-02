<?php
namespace Orchid\Traits;
use Orchid\Models\Visit;
use Orchid\Models\Visitor;
use Carbon\carbon;
/**
 *
 */
trait hasVisitTrait
{
  public function departement(){
    return $this->belongsTo(\Orchid\Models\Departement::class);
  }
    public function visits(){
      return $this->HasMany(\Orchid\Models\Visit::class);
    }

    public function visitors(){
      return $this->belongsToMany(\Orchid\Models\Visitor::class, 'users_visitors');
    }

    public function futureVisits(){
      $now = Carbon::now();
      return  $this->visits()->where('date','>',$now);

    }

    public function pastVisits(){
      $now = Carbon::now();
      return  $this->visits()->where('date','<',$now);
    }

    public function pendingVisits(){

      return  $this->visits()->where('status','pending');
    }

    public function confirmedVisits(){

      return  $this->visits()->where('status','confirmed');
    }

  }#
?>
