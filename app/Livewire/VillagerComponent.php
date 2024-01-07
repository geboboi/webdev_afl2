<?php

namespace App\Livewire;

use Livewire\Component;

class VillagerComponent extends Component
{
    public $districts;
    public $selectedDistrict = NULL;
    public $villages;

    public function mount()
    {
        // Ambil data kecamatan saat komponen dimuat
        $this->districts = \Indonesia::search('surabaya')->allDistricts();
        $this->villages = collect();
    }

    public function updatedSelectedDistrict($district)
    {
            $this->villages = \Indonesia::findDistrict($district, ['villages']);

    }

    public function render()
    {
        return view('livewire.villager-component');
    }
}
