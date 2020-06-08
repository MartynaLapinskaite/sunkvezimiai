<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Sunkvezimis extends Model
{
    use Sortable;
    protected $table = 'sunkvezimis';
    protected $fillable = ['id', 'marke','gamybos_metai', 'savininko_vardas_pavarde','savininku_skaicius', 'komentarai'];

    public $sortable = ['marke','gamybos_metai', 'savininko_vardas_pavarde','savininku_skaicius'];
    public $timestamps = false;
}
