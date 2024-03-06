<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Url;

class HomeController extends Controller
{

    public function getSaleCollectionProperty()
    {
        return Url::whereElementType(Collection::class)->whereSlug('sale')->first()?->element ?? null;
    }

    public function getProductsProperty()
    {
        $collections = Url::whereElementType(Collection::class);

        if ($this->getSaleCollectionProperty()) {
            $collections = $collections->where('element_id', '!=', $this->getSaleCollectionProperty()?->id);
        }

        return $collections->inRandomOrder()->first()?->element;
    }


    public function getRandomCollectionProperty()
    {
        $collections = Url::whereElementType(Collection::class);

        return $collections->first()?->element;
    }
    

    public function index()
    {
        return view('welcome', [
            'saleCollection'   => $this->getSaleCollectionProperty(),
            'randomCollection' => $this->getRandomCollectionProperty()
        ]);
    }

   
}
