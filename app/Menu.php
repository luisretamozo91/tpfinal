<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Menu extends Model
{
    protected $table = "menu";

    protected $fillable = [
        'label', 'url', 'padre',
    ];

    public function menuitems()
    {
        return $this->hasMany('App\TipoDocenteMenu');
    }

    public function getChildren($data, $line)
    {
        $children = [];
        
        foreach ($data as $line1) {
            if ($line['id'] == $line1['padre']) {
                $children = array_merge($children, [ array_merge($line1, ['submenu' => $this->getChildren($data, $line1) ]) ]);
            }
        }

        return $children;
    }

    public function menuOptions()
    {
        return $this->select('menu.id','label','url','padre')->join('tipoDocente_menu','tipoDocente_menu.menu_id','=','menu.id')
                    ->where('tipoDocente_menu.tipoDocente_id', Auth::user()->id)
                    ->orderby('padre')
                    ->orderby('label')
                    ->get()
                    ->toArray();
    }

    public static function menu()
    {
        $menu = new Menu();
        $data = $menu->menuOptions();
        $menuAll = [];
        
        foreach ($data as $line) {
            $item = [ array_merge($line, ['submenu' => $menu->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }

        return $menu->menuAll = $menuAll;
    }
}
